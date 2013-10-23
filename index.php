<?php
/**
 * MVC
 * Front Controller
 * @author Nicklasos
 */

/**
 * Подключаем класс:
 * Время генерации страницы
 */ 
include('libraries/class.timer.php');
$timer = new Timer(false);
$timer->startTime();

/**
 * Все настройки, константы и подключаемые файлы
 */ 
include('config.php');

/**
 * Шаблонизатор
 */ 
$view = new View(VIEWS);

/**
 * База Данных
 */
$db = new MySql;

/**
 * Загрузчик
 */ 
$init = new Init;

/**
 * Загружать контролер по умолчинию 
 */ 
$init->default_controller('content');

/**
 * Загрузчик
 */ 
$init->init();

/**
 * Отображаем шаблон
 */ 
if (ID_ACTIVE_PAGE == 1) {
	$view->display('index2');
} else {
	$view->display('index');  
}

$timer->stopTime();

?>
