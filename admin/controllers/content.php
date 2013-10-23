<?php

/**
 * Управление контентом
 */ 
class Content extends Controller
{
    /**
     * Активная страница.
     */ 
    private $active_page;

    function __construct()
    {
        parent::__construct();
        
        $this->path_to_system = ADMIN;
        $this->load_model('content_model');
        
        
        if (isset($_GET['id'])) {
            $this->active_page = intval($_GET['id']);
            $this->show($this->active_page);
        } else {
            $this->active_page = false;
        }
        
        /**
         * Вызываем меню в конструкторе, оно всегда должно отображаться
         */ 
        $this->menu();
        
        /**
         * Загружать это в главный блок в шаблоне
         */ 
        $this->view->view = 'content';
    }
    
    function index() {}

    function menu()
    {
        /**
         * Выбераем полностью все меню с подпунктима
         */ 
        $menu = $this->content_model->get_menu();
        
        /**
         * Заносим в шаблон меню
         */ 
        $this->view->menu = $menu;
    }
    
    /**
     * Функция выводит контент из БД по id странички
     */ 
    function show($id = false)
    {
        if ($id == false) {
            return false;
        }
        
        /**
         * Выбераем страничку по id
         */ 
        $data = $this->content_model->get_content_by_id($id);
        
        if ($data['_show'] == 1) {
            $this->view->checked_show = 'checked';
        } else {
            $this->view->checked_show = 'unchecked';
        }
        
        /**
         * Заносим данные в шаблон и указываем id текущей страницы
         */ 
        $this->view->append_data($data);
        $this->view->active_page = $this->active_page;
        $this->view->view_content = 'content_edit';
    }
}

?>