<?php

/**
 * Класс для работы с контентом на стороне front-end
 * Вытягиваем нужные странички из базы данных
 */
class Content_model extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Находим первую страницу в БД в таблицах content_
     * @return string link
     */
    public function get_first_page()
    {
        $result = $this->db->select("SELECT _link FROM content_" . LANG .
            " WHERE parent=0 order by weight LIMIT 1");

        /**
         * Если не сгенерирован id, отправляемся на страницу index 
         */
        if (empty($result[0]['_link'])) {
            redirect_on_error();
        }

        return isset($result[0]['_link']) ? $result[0]['_link'] : false;
    }

    /**
     * Вытягиваем страницу из БД по линку (ЧПУ)
     * @param string link (ЧПУ)  страницы
     * @return array полная страница для сайта (страница, тайтлы, описание, хедер...)
     */
    public function get_page_by_link($link)
    {
        $link = mysql_real_escape_string($link);

        $ar = $this->db->select("select * FROM content_" . LANG . " WHERE _link='" . $link .
            "' LIMIT 1");

        /**
         * Если нет такой страницы, то на 404 или index 
         */
        if (empty($ar)) {
            redirect_on_error();
        }

        return isset($ar[0]) ? $ar[0] : false;
    }
    
    /**
     * Достать всю страницу по id
     */ 
    public function get_page_by_id($id)
    {
        $id = intval($id);
        $ar = $this->db->select("select * FROM content_" . LANG . " WHERE id='" . $id .
            "' LIMIT 1");
        return $ar[0];
    }
    
    /**
     * Выбераем нужную страницу из подменю
     * Используем постраничную разбивку
     * 
     * @param string|integer $parent Название странички, с которой надо вытащить все подмено. Можно указать id или link
     * @param integer $page Активная страница, используется дл япагинатора 
     */
    function get_sub_pages($parent, $page=0)
    {
        $page = intval($page);
        
        /**
         * Если parent не число, значит это линк и нужно найти его id
         */ 
        if (!is_integer($parent)) {
            $sql = "SELECT id FROM `content_ru` WHERE _link = '". mysql_real_escape_string($parent) . "'";
            $result = $this->db->select($sql);
            $parent = $result[0]['id'];
            if (!$parent) {
                return false;
            }
        }
         
        /**
         * Запрос для выбора всех подменю нужной страницы
         */ 
        $sql = "SELECT * FROM `content_ru` WHERE parent=". $parent ." AND _show=1 LIMIT ". $page .", 1";
        $result = $this->db->select($sql);
        $content = $result[0];
        
        if (!$content) {
            return false;
        }
        
        $sql = "SELECT COUNT(*) FROM `content_ru` WHERE parent=". $parent ." AND _show=1";
        $result = $this->db->select($sql);
        $content['count_pager'] = $result[0]['COUNT(*)'];
        
        return $content;
    } 


/* Меню */

    /**
     * Меню дерево.
     * Достает все меню и подменю.
     */ 
    function menu_tree()
    {
        $sql = 'SELECT id, name, _link, _href FROM content_' . LANG .
            ' WHERE parent = 0 AND _show=1 ORDER BY weight';
        $menu = $this->db->select($sql);

        $sql = 'SELECT id, name, parent, _link, _href FROM content_' . LANG .
            ' WHERE parent <> 0 AND _show=1 ORDER BY weight';
        $menu_sub = $this->db->select($sql);
        
        foreach ($menu as $key => $value) {
            if (empty($value['_href'])) {
                $menu[$key]['_href'] = $menu[$key]['_link'] . '.html';
            }
            foreach ($menu_sub as $value_sub) {
                
                if ($value['id'] == $value_sub['parent']) {
                    foreach ($menu_sub as $value_sub_sub) {
                        if ($value_sub['id'] == $value_sub_sub['parent']) {
                            $value_sub['submenu'][] = $value_sub_sub;
                        }
                    }
                    
                    /** 
                     * Если меню активно или одно из его подменю,
                     * то выставляем свойство active в true 
                     */
                    if ($value_sub['id'] == ID_ACTIVE_PAGE or $value['id'] == ID_ACTIVE_PAGE) {
                        $menu[$key]['active'] = 'true';
                    }
                    $menu[$key]['submenu'][] = $value_sub;
                }
            }
        }
        
        return $menu;
    }
    

    /**
     * Меню
     */
    function menu($id_active_page = false)
    {
        $sql = "select id, name, _link FROM content_" . LANG .
            " WHERE parent=0 AND _show=1 order by weight";
        $menu_all = $this->db->select($sql); // Все пункты меню

        $sql = "select id, name, parent, _link FROM content_" . LANG . " WHERE id=" .
            ID_ACTIVE_PAGE;
        $menu_active = $this->db->select($sql); // Текущая страница

        $sql = "select id, name, _link FROM content_" . LANG . " WHERE parent=" .
            ID_ACTIVE_PAGE . " AND _show=1 order by weight";
        $menu_submenu = $this->db->select($sql); // Все подпункты меню

        if ($menu_active[0]['parent'] == 0) {
            $menuLevel = 1;
        } else {
            $menuLevel = 2;
        }
        $menu1 = $this->get_menu($menu_all, $menu_active, $menuLevel);
        $menu2 = $this->get_submenu($menu_active, $menu_submenu, $menuLevel);

        $menu['menu1'] = $menu1;
        $menu['menu2'] = $menu2;

        return $menu;
    }

    private function get_menu($menu_all, $menu_active, $menuLevel)
    {
        foreach ($menu_all as $value) {
            $a['name'][] = $value['name'];
            $a['id'][] = $value['id'];
            $a['link'][] = $value['_link'];
            switch ($menuLevel) {
                case 1:
                    $a['is_active'][] = ($value['id'] == ID_ACTIVE_PAGE) ? 1:
                    0;
                    break;
                case 2:
                    $a['is_active'][] = ($value['id'] == $menu_active[0]['parent']) ? 1:
                    0;
                    break;
            }
        }
        return $a;
    }

    private function get_submenu($menu_active, $menu_submenu, $menuLevel)
    {
        switch ($menuLevel) {
            case 1:

                /* Выводим все пункты дочернего меню */
                foreach ($menu_submenu as $value) {
                    $a['name'][] = $value['name'];
                    $a['id'][] = $value['id'];
                    $a['link'][] = $value['_link'];
                }
                break;
            case 2:
                $sql = "select id, name, _link FROM content_" . LANG . " WHERE parent=" . $menu_active[0]['parent'] .
                    " order by weight";
                $menu_all_submenu = $db->select($sql); // Все пункты меню 2го уровня

                /* Выводим все пункты дочернего меню */
                foreach ($menu_all_submenu as $value) {
                    $a['name'][] = $value['name'];
                    $a['id'][] = $value['id'];
                    $a['link'][] = $value['_link'];
                    $a['is_active'][] = $value['id'] == ID_ACTIVE_PAGE ? 1 : 0;
                }
                break;
        }
        if (isset($a)) {
            return $a;
        } else {
            return false;
        }
    }
    
    /**
     * Вытащить все подменю из пункта меню по id
     * @param integer $id родительская страница
     * @return array $menu список страниц-подменю
     */ 
    function get_submenu_by_parent($id)
    {
        $id = intval($id);
        $sql = "SELECT id, name, _link, _href FROM `content_ru` WHERE parent = " . $id . " AND _show = 1 order by weight";
        $menu = $this->db->select($sql);
        
        foreach ($menu as $key => $value) {
            if (empty($value['_href'])) {
                $menu[$key]['_href'] = $menu[$key]['_link'] . '.html';
            }
        }
        
        return $menu;
    }
    
    /**
     * Достаем мета данные со страницы по id
     */ 
    function get_meta($id)
    {
        $id = intval($id);
        $sql = "SELECT title, keywords, description FROM `content_" . LANG . "` WHERE id=" . $id;
        $result = $this->db->select($sql);
        
        return $result[0];
    }
    
    public function get_phone($id)
    {
        $result = $this->db->select("SELECT page FROM content_ru WHERE id = $id");
        return @$result[0]['page'];
    }
    
    public function get_page($id)
    {
    	$sql = "SELECT page FROM content_ru WHERE id = $id";
    	$result = $this->db->select($sql);
    	return @$result[0]['page'];
    }
}

?>