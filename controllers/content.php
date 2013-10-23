<?php

/**
 * 
 */
class Content extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load_model('content_model');
        
        $this->view->phone = $this->content_model->get_phone(5);
        
        $this->view->block1 = $this->content_model->get_page(10);
        $this->view->block2 = $this->content_model->get_page(11);
        $this->view->block3 = $this->content_model->get_page(12);
    }

    /**
     * Выбераем первую страничку и отображаем ее
     * @see $this->show()
     */
    function index()
    {
        $link = $this->content_model->get_first_page();
        $this->show($link);
    }
    
    /**
     * Показываем нужную страничку
     */ 
    function show($link)
    {
    	/*
    		TODO Описать нормально документы
    	*/
    	
        /**
         * Загружаем страничку из БД по линку (_link)
         */ 
        $content = $this->content_model->get_page_by_link($link);
        
        /**
         * Загружаем меню
         */ 
        //$menu = $this->content_model->menu();
        

        
        /**
         * Запихиваем переменные в шаблон
         */ 
        $this->view->append_data($content);
        
        /**
         * В главную часть шаблона будем выводить подшаблон content
         */ 
        $this->view->main_view = 'content';
    }
    
    
    
    /**
     * Отправка формы
     */ 
    function send()
    {
        session_start();
        
        /**
         * Результат отправки сообщения
         * @var string|bool
         */ 
        $result = '';
        
        if (isset($_POST['go'])) {
            
        $mail = "
        Имя: " . $_POST['name'] . "<br>
        Телефон: " . $_POST['phone'] . "<br>
        E-Mail: " . $_POST['email'] . "<br>
        Тема: " . $_POST['theme'] . "<br>
        Сообщение: " . $_POST['text'];
        
        $from_header = "Content-type: text/html; charset=UTF-8\n";
        $from_header .= "From: Anfrage<info@merleblanc.de>\n";
         
            if ( true /*mail("lasos@meta.ua", "Ремот котлов", $mail, $from_header) /* && $_SESSION['cap_nomer'] == $_POST['cap'] */ ) {
                switch (LANG) {
                    case 'ua':
                        $result = '<center><b>Форма вiдправлена</b></center><br><br>';
                        break;
                    case 'en':
                    default :
                        $result = '<center><b>Form sended</b></center><br><br>';
                }
            } else {
                $result = false;
            }
        }
        
        /**
         * Загружаем страничку из БД по линку (_link)
         */ 
        $content = $this->content_model->get_page_by_id(4);
        
        /**
         * Загружаем меню
         */ 
        //$content['menu'] = $this->content_model->menu_tree();
        
        $content['page'] = $result;
        
        /**
         * Запихиваем переменные в шаблон
         */ 
        $this->view->append_data($content);
        
        /**
         * В главную часть шаблона будем выводить подшаблон content
         */ 
        $this->view->main_view = 'content';
    }
}