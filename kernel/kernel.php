<?php
/**
 * ���� �������
 * 
 * @package kernel
 * @author Nicklasos
 */


/**
 * ��������� � ������
 */
class Init extends Load
{
    /**
     * ������, ������� ������ ����������� �� ���������
     * @var string
     */
    private $controller_default;
    
    private $action_default;
    
    private $args_default;

    function __construct()
    {
        parent::__construct();
        
        $this->controller_default = 'index';
        $this->action_default = 'index';
    }
    
    /**
     * �������� ���� � �������, �������� �������, ��� ��� �����-�����
     * ������ �������� � ������� ��������� ADMIN
     * @see config.php
     */ 
    public function path_to_system($path_to_system)
    {
        $this->path_to_system = $path_to_system;
    }

    /**
     * ������� ���������� ������, ������� ����� �������� �� ���������
     * @param string �������� ����������
     */
    public function default_controller($controller, $action = 'index', $args = null)
    {
        $this->controller_default = $controller;
        $this->action_default = $action;
        $this->args_default = $args;
    }

    /**
     * ������
     * ���� �������� �������� ���:
     * http://sitename.com/�����/�������
     * http://sitename.com/�����/�����/�������/��������/��������2
     * ��� ����� - ��� ����� � ����� controllers
     * ��� ����� - ��� �������� ����� � ����� controllers ��� � ��������, � ������ ����� ����� � ����� �� ������
     * ��� ������� � ��������� - ��� �������� ������� � ������ � ���������, ������� �� ����������
     * ������ �� ����� ������� ��� ���:
     * http://sitename.com/content/show/1/2/3
     * ������ ������ ���� content.php � ����� controllers � ����������� ����� (content), 
     * ������� ���� ����� � ������� ����� show � ����������� 1, 2, 3
     */
    public function init()
    {
        $route = (empty($_GET['route'])) ? $this->controller_default : $_GET['route'];
        
        $route = trim($route, '/\\');

        $parts = explode('/', $route);
        
        $cmd_path = $this->path_to_system . 'controllers' . DIRECTORY_SEPARATOR;

        foreach ($parts as $part) {

            $fullpath = $cmd_path . $part;

            /* ���� �� ����� � ����� ����? */
            if (is_dir($fullpath)) {
                $cmd_path .= $part . DIRECTORY_SEPARATOR;
                array_shift($parts);

                continue;
            }

            /* ������� ���� */
            if (is_file($fullpath . '.php')) {
                $controller = $part;
                array_shift($parts);

                break;
            }
        }

        if (empty($controller)) { $controller = $this->controller_default; }

        $action = array_shift($parts);
        if (empty($action)) { $action = $this->action_default; }
        
        $args = $parts;
        if (empty($args)) { $args = $this->args_default; }
        
        /**
         * ��������� ������ ���������
         */ 
        $this->load_controller($controller, $action, $args);
    }
}


/**
 * ����� ���������.
 * ���������� ������ ������, ���������� � �.�.
 * 
 * @author Nick
 */ 
abstract class Load
{
    /**
     * ���� � �����������, �������, ����������� � �.�.
     * ���� ����� ��������� ������ �� ����� �����, �� ����� ������� � �������� $this->path_to_system = ADMIN;
     * �� ��������� ��� ROOT, ������ ��� ������ ����������� �� �����.
     */ 
    protected $path_to_system;
    
    function __construct()
    {
        $this->path_to_system = ROOT;
    }
    
    private function load($load)
    {
        $class = '';
        $class = explode('/', $load);
        $class = array_pop($class);
        
        if ($this->include_file($load)) {
            $this->$class = new $class;
        }
    }
    
    private function include_file($load)
    {
        $file = $this->path_to_system . $load . '.php';
        if (file_exists($file)) {
            include($file);
            return true;
        } else {
            return false;
        }
    }
    
    public function load_model($load)
    {
        $load = 'models'. DIRECTORY_SEPARATOR . $load;
        $this->load($load);
    }
    
    public function load_libray($load)
    {
        $load = 'libraries' . DIRECTORY_SEPARATOR . $load;
        $this->load($load);
    }
    
    public function load_helper($load)
    {
        $load = 'helpers' . DIRECTORY_SEPARATOR . $load;
        $this->include_file($load);
    }
    
    public function load_controller($load, $func = 'index', $args = array())
    {
        $load = 'controllers' . DIRECTORY_SEPARATOR . $load;
        if($this->include_file($load)) {
            $controller = '';
            $controller = explode('/', $load);
            $controller = array_pop($controller);
            $controller = new $controller;
            
            /**
             * ���� ���� ����� � ������, �� �������� ���,
             * ���� ���, �� �� �������
             * ������������ ��� �������
             * ��������, ���� ������������ ����������� ���� �����, �� ��� ������������ �� �������
             * @see Init::init()
             */ 
            if (method_exists($controller, $func)) {
                call_user_func_array(array($controller, $func), $args);
            } else {
                header('Location: /');
                exit;
            }
            
        }
        
    }
}


/**
 * ����� ������.
 * ���� ����� �����������, � ��� �������������� ��� ����������� � �� � �.�.
 * ����� ������ ���.
 */ 
abstract class Model extends Load
{
    protected $db;
    
    function __construct()
    {
        parent::__construct();
        
        global $db;
        $this->db = $db;
    }
}


/**
 * ����� ���������.
 * ��������� ��� ������ ����������.
 * ����� ��������� ������� ������ �������, �������� �������.
 * ����� �����������, ������� �� �����������.
 * �� ���!
 */ 
abstract class Controller extends Load
{
    protected $view;
    protected $db;
    
    function __construct()
    {
        parent::__construct();
               
        global $view;
        $this->view = $view;
        
        global $db;
        $this->db = $db;
    }
}


/**
 * ������������
 *
 * �������������:
 * $template = new View;
 * $template->test_var = "Hello, world!";
 * $template->display('index');
 * � �������:
 * <div><?php echo $this->test_var; ?></div>
 */
class View
{
    /**
     * ���� � ���������� � ���������
     */
    private $view_dir;

    /**
     * ����������
     */
    private $data = array();

    /**
     * ���������� ���������� � ���������
     */
    function __construct($view_dir = VIEWS)
    {
        //$view_dir .= DIRECTORY_SEPARATOR;
        $this->view_dir = $view_dir;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {

            /* ���� ���������������� ��� �������, �� ����� ������ ������ � �������������� ���������� */
            return '';
        }

        $trace = debug_backtrace();
        trigger_error('Undefined property : <b>' . $name . '</b>' . ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'], E_USER_NOTICE);
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }
    
    /**
     * �������� � ������������ ������ ������ ������
     * @param array
     */ 
    public function append_data($new_data)
    {
        if (is_array($new_data)) {
            $this->data = array_merge($this->data, $new_data);
        }
    }

    /**
     * ���������� ������
     */
    public function display($file, $default = false)
    {
        if (empty($file)) {
            $file = $default;
        }
        $path_to_file = $this->view_dir . $file . '.php';
    
        if (isset($file) and file_exists($path_to_file)) {
            include ($path_to_file);
        }
    }

    /**
     * ������� �������� ������ ����������
     * print_r
     * @param string ��� ����������
     */
    public function r_all()
    {
        echo "<pre>";
        print_r($this->data);
        echo "</pre>";
    }
    
    /**
     * ������� �������� ���� ���������� �������
     * print_r
     */
    public function r($var)
    {
        echo "<pre>";
        print_r($this->data[$var]);
        echo "</pre>";
    }
}

?>