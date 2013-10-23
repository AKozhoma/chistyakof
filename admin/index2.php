<?php
echo $_SERVER['DOCUMENT_ROOT'];

include ('../config.php');
session_start();

include ('../libraries/class.timer.php');
$Timer = new Timer;
$Timer->startTime(false);


$user = false;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

if (empty($user) && $user != 'logged') {
    header('Location: index.php');
    exit;
}



/**
 * Шаблонизатор
 */ 
$view = new View(A_VIEWS);

/**
 * База Данных
 */
$db = new MySql;

/**
 * Загрузчик
 */ 
$init = new Init;

/**
 * Указываем системе, от куда брать контролеры, модели, библиотеки и т.д.
 */ 
$init->path_to_system(ADMIN);

/**
 * Загружать по умолчинию, если ниодин не указан в $_GET['route']; 
 */ 
$init->default_controller('content');

/**
 * Загрузчик
 */ 
$init->init();


$view->id = ID_ACTIVE_PAGE;
$view->lang = LANG;
$view->site_url = SITE_URL;

$view->display('index');

?>

<hr class="space">
<div class="box">
<?php $Timer->stopTime(); ?>
</div>

