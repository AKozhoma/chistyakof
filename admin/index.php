<?php
include('../config.php');
session_start();

if (isset($_POST['go'])) {
    include('../kernel/class.usersession.php');
    $session = new User_session();
    $session->login($_POST['login'],$_POST['password']);
    if ($session->is_logged_in()) {
    	$_SESSION['user'] = 'logged';
    	header("location: index2.php");
    } else {
    	header("location: index.php?login=not");
    }
}

if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION);
}

if (isset($_SESSION['user']) && $_SESSION['user'] == 'logged') {
	header("location: index2.php");
	exit;
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Admin Panel</title>

  <!-- Framework CSS -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
	<link rel="stylesheet" href="css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/plugins/buttons/screen.css" type="text/css" media="screen, projection">
  <!--[if lt IE 8]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>

<body>

	<div class="container">
		<div class="span-6">
			<p><h1 class="alt"><!--Admin Panel--><img src="<?=A_SITE_URL;?>/images/logo.gif" alt="logo" /></h1>
		</div>
		<div class="span-14">
			<p><h3 class="alt">Content Management System <span class="invisible">, powered by Nicklasos!</span></h3>
		</div>
		<div class="span-4 last">
			<p><h3 class="right"><a href="/skeleton" class="positive">К сайту »</a></h3>
		</div>
		<hr>
		
		<?php if (isset ($_GET['login']) and $_GET['login'] == 'not'): ?>
		<div class="error">
			<strong>Неудачный вход!</strong>
		</div>
		<?php endif; ?>
		
		<div class="span-8">
			<div class="box-border">
				<div class="box-header">Вход</div>
				<div class="box-content">
					<form action='' method='post' name="web">
					<table>
						<tr>
							<td><strong>Логин</strong></td>
							<td><input type="text" name="login" class="span-5"></td>
						</tr><tr>
							<td><strong>Пароль</strong></td>
							<td><input type="password" name="password" class="span-5"></td>
						</tr><tr>
							<td colspan="2"><hr class="space"></td>
						</tr><tr>
							<td colspan="2" class="center"> <a href="http://www.google.com/search?hl=en&q=%D1%87%D1%82%D0%BE+%D1%82%D0%B0%D0%BA%D0%BE%D0%B5+%D0%BB%D0%BE%D0%B3%D0%B8%D0%BD+%D0%B8+%D0%BF%D0%B0%D1%80%D0%BE%D0%BB%D1%8C%3F&aq=f&oq=&aqi=" class="bold green">« Погуглить</a> <input type="submit" name="go" value="Вход"></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>