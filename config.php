<?php

/**
 * Это пока бэта версия сайта, но работает, вроде, стабильно.
 */ 

error_reporting(0);

/* Параметры для базы данных */
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'chistyakofsql1');

/* Константы. Ок Кэп! */

/**
 * Доменное имя. Адрес сайта
 */
define('SITE_URL', 'http://chistyakoff.com.ua');

/**
 * Название сайта
 */
define('SITE_NAME', 'Skeleton!');

/**
 * Перенаправление в случае ошибки
 */ 
define('REDIRECT_ON_ERROR', SITE_URL . '/errors/404.html');

/**
 * Полный путь к папке сайта
 */
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

/**
 * Путь к ядру сайта
 */ 
define('KERNEL', ROOT . 'kernel' . DIRECTORY_SEPARATOR);

/**
 * Путь к модулям сайта
 */ 
define('MODULES', ROOT . 'modules' . DIRECTORY_SEPARATOR);

/**
 * Путь к контролеру
 */
define('CONTROLLERS', ROOT . 'controllers' . DIRECTORY_SEPARATOR);

/**
 * Модели и классы
 */ 
define('MODELS', ROOT . 'models' . DIRECTORY_SEPARATOR);

/**
 * Путь к шаблонам
 */ 
define('VIEWS', ROOT . 'views' . DIRECTORY_SEPARATOR);

/**
 * Подключаемые библиотеки
 */ 
define('LIBRARIES', ROOT . 'libraries' . DIRECTORY_SEPARATOR);

/**
 * Вспомогательные функции
 */
define('HELPERS', ROOT . 'helpers' . DIRECTORY_SEPARATOR); 

/* Пути для админки */

/**
 * Админка
 */ 
define('ADMIN', ROOT . 'admin' . DIRECTORY_SEPARATOR);

/**
 * 
 */
define('A_SITE_URL', SITE_URL . '/admin'); 

/**
 * Путь к модулям сайта админ-части
 */ 
define('A_MODULES', ADMIN . 'modules' . DIRECTORY_SEPARATOR);

/**
 * Путь у контролерам админки
 */
define('A_CONTROLLERS', ADMIN . 'controllers' . DIRECTORY_SEPARATOR);


/**
 * Модели и классы для админки
 */ 
define('A_MODELS', ADMIN . 'models' . DIRECTORY_SEPARATOR);

/**
 * Путь к шаблонам для админки
 */ 
define('A_VIEWS', ADMIN . 'views' . DIRECTORY_SEPARATOR);

/**
 * Вспомогательные функции в админке
 */ 
define('A_HELPERS', ADMIN . 'helpers' . DIRECTORY_SEPARATOR);

/**
 * Библиотеки для админки
 */ 
define('A_LIBRARIES', ADMIN . 'libraries' . DIRECTORY_SEPARATOR);

/**
 * Время жизни сессии
 */ 
ini_set('session.gc_maxlifetime', 120960);
ini_set('session.cookie_lifetime', 120960);

/**
 * Место хранения сессий
 */ 
ini_set('session.save_path', ROOT .'sessions/');

/* Подключаемые файлы */
include(KERNEL . 'class.mysql.php'); /* База Данных */
include(KERNEL . 'functions.php'); /* Основные функции */

/* Ядро */
include(KERNEL . 'kernel.php');

/* Определяем активную страницу и язык */
#define('LANG', get_lang('ru')); /* Ставим язык (функции передаем дефолтный язык)*/
define('LANG', 'ru');
define('LINK_ACTIVE_PAGE', link_generate());
define('ID_ACTIVE_PAGE', id_generate());

?>