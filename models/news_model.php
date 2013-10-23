<?php

class News_model extends Model
{
    function __construct()
    {
        parent:: __construct();
    }
    
    function get_last_news($count)
    {
        $count = intval($count);
        $sql = "SELECT * FROM `news` WHERE _show = 1 ORDER BY id DESC LIMIT " . $count;
        $news = $this->db->select($sql);
        
        return $news;
    }    
    
    function show_news($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM `news` WHERE id = " . $id;
        $news = $this->db->select($sql);
        
        return $news[0];
    }
    
    function get_list_news()
    {
        $sql = "SELECT * FROM `news` WHERE _show = 1 ORDER BY id DESC";
        $news = $this->db->select($sql);
        
        return $news;
    }
}

?>