<?php

class News_model extends Model
{
    function __construct()
    {
        parent:: __construct();
    }
    
    function get_news()
    {
        $sql = 'SELECT id, header FROM `news` ORDER BY id DESC';
        $ar = $this->db->select($sql);
        return $ar;
    }    
    
    function get_news_by_id($id)
    {
        $id = intval($id);
        $sql = 'SELECT * FROM `news` WHERE id=' . $id;
        $data = $this->db->select($sql);
        return $data[0];
    }
    
    function add_news()
    {
        $table = 'news';
        $ar = array('header' => 'Новость', 'preview' => 'Продпросмотр', 'news' => 'Текст новости', '_show' => '0');
        $result = $this->db->insert($table, $ar);
        $id = mysql_insert_id();
        return $id;
    }
    
    function delete_news($id)
    {
        $id = intval($id);
        if ($id) {
            $tabel = 'news';
            $where = array('id' => $id);
            $result = $this->db->delete($tabel, $where);
        }
    }
    
    function edit_news($post)
    {
        $header = $post['header'];
        $news = $post['news'];
        $preview = $post['preview'];
        $id = $post['id'];
        $show = 0;
        if (isset($post['show'])) {
            $show = 1;
        }

        $table = 'news';
        $what = array('header' => $header, 'preview' => $preview ,'news' => $news, '_show' => $show);
        $where = array('id' => $id);
        $result = $this->db->update($table, $what, $where);
        
        return $id;
    }
}

?>