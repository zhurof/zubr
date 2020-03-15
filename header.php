<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=1440, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="header__topline">
			<div class="wrapper">
				<a href="/" class="logo header__logo"><img src="img/logo.png" alt=""></a>
				<div class="header__contact">
					<h3 class="header__subtitle"><i class="fa-envelope"></i> E-mail</h3>
					<a href="mailto:companyname@gmail.com" class="header__contact-link">companyname@gmail.com</a>
					<a href="#feedback" data-fancybox>Напишите нам</a>
				</div>
				<div class="header__contact">
					<h3 class="header__subtitle"><i class="fa-phone"></i> Телефон</h3>
					<a href="tel:+375442585514" class="header__contact-link">+375 (44) 258-55-14</a>
					<a href="tel:+375442595615" class="header__contact-link">+375 (44) 259-56-15</a>
				</div>
				<a href="#callback" class="btn btn--stroke header__btn" data-fancybox>Обратный звонок</a>
				<a href="#" class="header__tool" data-amount="1">
					<i class="icon-shopping-cart"></i>
					<span>Корзина</span>
				</a>
				<a href="#" class="header__tool">
					<i class="icon-lock"></i>
					<span>Войти</span>
				</a>
			</div>
		</div>
		<div class="header__bottomline">
			<div class="wrapper">
				<div class="header__bottomline-inner">
					<div class="header__menu">
						<div class="btn btn--block btn--menu header__menu-btn">Каталог</div>
						<ul class="header__menu-list">
							<li><a href="#"><i class="icon-tractor"></i> Запчасти МТЗ</a></li>
							<li><a href="#"><i class="icon-truck"></i> Запчасти МАЗ</a></li>
							<li><a href="#"><i class="icon-harvester"></i> Запчасти Амкодор</a></li>
							<li><a href="#"><i class="icon-van"></i> Запчасти ГАЗ (УАЗ)</a></li>
							<li><a href="#"><i class="icon-canister"></i> Технические жидкости</a></li>
							<li><a href="#"><i class="icon-hydraulics"></i> Гидрооборудование</a></li>
							<li><a href="#"><i class="icon-battery"></i> Аккумуляторы</a></li>
						</ul>
					</div>
					<form class="search header__search">
						<select class="search__select">
							<option disabled selected>Категория</option>
							<option>Запчасти МТЗ</option>
							<option>Запчасти МАЗ</option>
							<option>Запчасти Амкодор</option>
							<option>Запчасти ГАЗ (УАЗ)</option>
							<option>Технические жидкости</option>
							<option>Гидрооборудование</option>
							<option>Аккумуляторы</option>
						</select>
						<input type="text" class="search__input" placeholder="Поиск по наименованию или артикулу">
						<button class="btn btn--small btn--dark btn--search search__btn">Найти</button>
						<div class="search__content">
							<h3 class="search__subtitle">Основной каталог товаров</h3>
							<ul class="search__results">
								<li><a href="#">Запчасть 1</a></li>
								<li><a href="#">Запчасть 2</a></li>
								<li><a href="#">Запчасть 3</a></li>
								<li><a href="#">Запчасть 4</a></li>
								<li><a href="#">Запчасть 5</a></li>
								<li><a href="#">Запчасть 6</a></li>
							</ul>
							<h3 class="search__subtitle"><a href="#">Все результаты</a></h3>
						</div>
					</form>
					<a href="#" class="icon-shopping-cart header__cart" data-amount="1"></a>
				</div>
			</div>
		</div>
	</header>