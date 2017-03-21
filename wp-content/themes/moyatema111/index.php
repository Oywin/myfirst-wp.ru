<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Snaps
 * @since Snaps 1.0
 */
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Alcatel</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Alcatel" />
<link rel="icon" href="img/icon.png" type="image/x-icon" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="js/common.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body>
<header>
	<div class="container">
	<div class="row">
	 <div class="col-sm-4 col-md-3 col-xs-6 ">
		<div id="logo">
			<img src="img/logo.png" alt="logo" class="img-responsive" />
		</div>
	 </div>
	 <div class="col-sm-2 col-md-2 col-xs-5 col-sm-offset-6 col-md-offset-7 col-xs-offset-1">
		<div id="rules">
			<a href="#">Полные правила</a>
		</div>
	 </div>
	</div>
	</div>
</header>
<section id="promo">
	<div class="container">
		<div class="row">
		<div class="col col-sm-4 col-md-4 col-xs-6">
			<div class="item">
				<img src="img/p1.png" alt="p1" />
				<p><b>1</b><span>Регистрируйся</span></p>
			</div>
			<div class="item">
				<img src="img/p2.png" alt="p2" />
				<p><b>2</b><span>Изучай<br/> 
материалы</span></p>
			</div>
			<div class="item">
				<img src="img/p3.png" alt="p3" />
				<p><b>3</b><span>Проходи<br/>
тестирование</span></p>
			</div>
			<div class="item">
				<img src="img/p4.png" alt="p4" />
				<p><b>4</b><span>Получай призы</span></p>
			</div>									
		</div>
		<div class="col2 col-sm-8 col-md-8 col-xs-6">
			<img src="img/p_img.png" alt="promo" class="img-responsive" />
		</div>
		</div>
	<div class="row buttons">
		<div class="col-sm-4 col-md-3 col-xs-12">
		<a href="#" id="enter" class="button">Вход</a>
		</div>
		<div class="col-sm-4 col-md-3 col-xs-12">
		<a href="#" id="register" class="button">Регистрация</a>	
		</div>	
	</div>	
	</div>
</section>
<section id="studies" class="wr">
	<div class="container">
		<div class="row">
		<div class="col col-sm-6 col-md-6 col-xs-12">
		<h2>Обучение</h2>
		<a href="#" class="button">О бренде</a>
		<a href="#" class="button">Idol 3</a>
		<a href="#" class="button">Техники продаж</a>
		</div>
		</div>
	</div>
</section>
	
<div class="overlay enter">
	<div class="container">
		<div class="row">
		<div class="form col-md-3 col-sm-6 col-xs-12">
		<div class="close"></div>
		<span class="title">Вход</span>
		<form id="Form1">
			<span>Email</span><br/>
			<input type="text" name="email" /><br/>
			<span>Пароль</span><br/>
			<input type="password" name="password" /><br/>
			<button type="submit"><span>Войти</span></button>
		</form>
		</div>
		</div>
	</div>
</div>

<div class="overlay reg">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
		<div class="form">
		<div class="close"></div>
		<span class="title">Регистрация</span>
		<form id="Form1">
			<div class="col col-md-5 col-sm-5 col-xs-12">
			<span>Имя</span><br/>
			<input type="text" name="name" value="" class="good"/><label></label><br/>
			<span class="err">Текст ошибки!</span>
			<span>Отчество</span><br/>
			<input type="text" name="surn" value=""/><label></label><br/>	
			<span class="err">Текст ошибки!</span>		
			<span>Пароль</span><br/>
			<input type="password" name="password" value=""/><label></label><br/>
			<span class="err">Текст ошибки!</span>
			<span>Повтороно введите пароль</span><br/>
			<input type="password" name="password" value=""/><label></label><br/>
			<span class="err">Текст ошибки!</span>			
			</div>
			<div class="col col2 col-md-5 col-sm-5 col-xs-12 col-md-offset-2 col-sm-offset-2">
			<span>Фамилия</span><br/>
			<input type="text" name="lastn" value=""/><label></label><br/>
			<span>Название компании</span><br/>
			<input type="text" name="email" value=""/><label></label><br/>
			<span class="err">Текст ошибки!</span>
			<span>Email</span><br/>
			<input type="text" name="email" value=""/><label></label><br/>	
			<span class="err" style="display: block;">Текст ошибки!</span>			
			</div>
			<div class="full col-md-12 col-sm-12 col-xs-12">
				<input type="checkbox" name="agree" id="agree" /><label for="agree">Согласен на обработку персональных данных</label><br/>
				<input type="checkbox" name="18" id="18" /><label for="18">Мне есть 18</label><br/>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			<button type="submit"><span>Зарегистрироваться</span></button>
			</div>
		</form>
		</div>
			</div>
		</div>
	</div>
</div>

		
	
</body>

?>
