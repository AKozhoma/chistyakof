<?php

class News extends Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->path_to_system = ADMIN;
        
        $this->load_model('news_model');
        
        $this->view->view = 'news';
    }
    
    /**
     * В начале просто показываем список всех новостей
     */ 
    function index() 
    {
        $this->show_list();
    }

    /**
     * Показать список всех новостей
     */ 
    function show_list()
    {
        $data = $this->news_model->get_news();
        $this->view->news = $data;
    }

    function show($id)
    {
        $data = $this->news_model->get_news_by_id($id);
        $this->view->news_active = $data;
        $this->view->active_page = $id;
        $this->view->view_news = 'news_edit';
        
        $this->show_list();
    }

    function add()
    {
        $result_id = $this->news_model->add_news();
        
        $this->show($result_id);
        
        $this->show_list();
    }

    function delete($id)
    {
        $this->news_model->delete_news($id);
        
        $this->show_list();
    }

    function edit()
    {
        
        $id = $this->news_model->edit_news($_POST);
        
        
        $this->show($id);
        
        $this->show_list();
    }
}

?>