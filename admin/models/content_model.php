<?php

class Content_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_menu()
    {
        $sql = 'SELECT id, name FROM content_' . LANG .
            ' WHERE parent = 0 ORDER BY weight';
        $menu = $this->db->select($sql);

        $sql = 'SELECT id, name, parent FROM content_' . LANG .
            ' WHERE parent <> 0 ORDER BY weight';
        $menu_sub = $this->db->select($sql);
        
        foreach ($menu as $key => $value) {
            
            foreach ($menu_sub as $key_sub => $value_sub) {
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
    
    function get_content_by_id($id)
    {
        $id = intval($id);
        
        $ar = $this->db->select("select * FROM content_" . LANG . " WHERE id=" . $id .
            " LIMIT 1");

        if ($ar[0]['_show'] == 1) {
            $this->view->checked = 'checked';
        } else {
            $this->view->checked = 'unchecked';
        }

        return $ar[0];
    }
}

?>