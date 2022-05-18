<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/images/icon-logo.png" type="image/png">
	<title>ЦОПП</title>
	<script defer src="bandle.js"></script><link href="styles.css" rel="stylesheet"></head>

<body>


<div class="overlay third"></div>
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

	<div class="menu">
		<div class="menu__container _container">
			<div class="menu__body">
				<div class="menu__header">
					<div class="menu__block">
						<div class="menu__logo"></div>
						<div class="menu__text">
							Центр
							Опережающей
							Профессиональной
							Подготовки
						</div>
					</div>
					<div class="menu__btn"></div>
				</div>

				<div class="menu__content-wrapper">
					<div class="menu__image"></div>
					<div class="menu__content">
						<div class="menu__item">
							<a class="menu__item-text" href="/">Главная</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text" href="about.php">О нас</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Вакансии</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Курсы</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="banner">
			<div class="banner__container _container">
				<div class="banner__body">
					<div class="banner__content">
						<div class="banner__heading">
							<span>СКИДКА 20%</span>
							<span>Начать просто. Попробуйте</span>
						</div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="auth">
		<div class="auth__body">
			<div class="auth__close"></div>
			<div class="auth__heading">Вход</div>
			<form class="auth__form" method="POST" action="libs/auth.php">

				<div class="auth__form-input-wrapper">
					<input type="email" name="login" placeholder="Логин">
					<div class="auth__form-icon"></div>
				</div>

				<div class="auth__form-input-wrapper">
					<input type="password" name="pass" placeholder="Пароль">
					<div class="auth__form-icon"></div>
				</div>

				<div class="auth__login">Вы еще не зарегистрировались? <span id="btnAuth">Тогда создайте новый профиль</span></div>

				<button type="submit">Войти</button>
				<p>Или</p>
				<a class="google">
					<div class="google-icon"></div>
					<div class="google-text">Войти через Google</div>
				</a>
			</form>
		</div>
	</div>

	<div class="check">
		<div class="check__body">
			<div class="check__close"></div>
			<div class="check__heading">Регистрация</div>
			<form class="check__form" method="POST" action="libs/check.php">
				<div class="check__form-input-wrapper">
					<input type="text" name="name" placeholder="Имя">
					<div class="check__form-icon"></div>
				</div>

				<div class="check__form-input-wrapper">
					<input type="text" name="surname" placeholder="Фамилия">
					<div class="check__form-icon"></div>
				</div>

				<div class="check__form-input-wrapper">
					<input type="email" name="login" placeholder="Почта (Логин)">
					<div class="check__form-icon"></div>
				</div>

				<div class="check__form-input-wrapper">
					<input type="password" name="pass" placeholder="Пароль">
					<div class="check__form-icon"></div>
				</div>

				<select name="role" size="1">
					<option value="0" selected>Роль</option>
					<option value="1">Школьник</option>
					<option value="2">Студент</option>
					<option value="3">Преподаватель</option>
				</select>
				<div class="check__login">У вас уже есть аккаунт?<span id="btnCheck">Войти в профиль</span></div>
				<button type="submit">Зарегистрироваться</button>
				<a class="google">
					<div class="google-icon"></div>
					<div class="google-text">Новый профиль через Google</div>
				</a>
			</form>
		</div>
	</div>


	<header class="header">
		<div class="header__container _container">
			<div class="header__body">
				<div class="header__block">
					<div class="header__logo-wrapper">
						<div class="header__logo" href="/">
							<div class="header__logo-dot"></div>
						</div>
					</div>
					<div class="header__text-wrapper">
						<div class="header__text">
							Центр
							Опережающей
							Профессиональной
							Подготовки
						</div>
					</div>
						<ul class="header__navigation">
							<li><a href="/">Главная</a></li>
							<li><a href="">Профориентация</a></li>
							<li><a href="about.php">О нас</a></li>
						</ul>
						<ul class="header__navigation">
							<li><a href="">Преимущества</a></li>
							<li><a href="">Направления</a></li>
							<li><a href="contact.php">Контакт</a></li>
						</ul>
				</div>
				<div class="header__block">
					<?php
						if($_COOKIE['users'] == ''):
					?>
					<div class="header__btn-auth">Войти</div>
					<?php else: ?>
					<div class="header__btn-profile">
						<div class="profile">
							<div class="profile__item">
								<a class="profile__item-text">Мои программы</a>
							</div>
							<div class="profile__item">
								<a class="profile__item-text" href="profile.html">Настройка профиля <span> <?=$_COOKIE['login']?> </span></a>
							</div>
							<div class="profile__item"></div>
							<div class="profile__item">
								<a class="profile__item-text exit" href="libs/exit.php">Выйти</a>
							</div>
						</div>
					</div>
					<? endif; ?> 
					<div class="header__btn"></div>
				</div>
			</div>
		</div>
	</header>

	<section class="main-02" id="home">
		<div class="main-02__container _container">
			<div class="main-02__body">
				<div class="main-02__wrapper">
				<div class="main-02__image"></div>
				<div class="main-02__content">
					<div class="main-02__content-text">Торжественное открытие площадки ЦОПП состоялось 2 октября 2020 года в День празднования 80-летия системы профессионально-технического образования.
						<br><br>
						В каждом есть сила и талант, чтобы добиваться больших целей. Мы помогаем найти путь развития и реализовать себя через профессию — так, как вам этого хочется</div>
					<div class="main-02__content-arrow-wrapper">
						<div class="main-02__content-arrow"></div>
					</div>
				</div>	
				</div>
				<div class="main-02__block">
					<div class="main-02__heading">
						Источник знаний для
						<span>роста</span> в <span>профессии</span>
					</div>
					<div class="main-02__text">
						Центр опережающей профессиональной подготовки ​— это площадка – агрегатор и оператор ресурсов региона для профессиональной ориентации
					</div>
				</div>
			
			</div>
		</div>
	</section>

	<section class="platform">
		<div class="platform__container _container">
			<div class="platform__body">
				<div class="platform__block">
					<div class="platform__heading">
						О нашей
						<span>платформе</span>
					</div>
					<div class="platform__text">Миссия ЦОПП — дать возможность каждому быть актуальным и востребованным специалистом прямо сейчас. Вне зависимости от возраста и географии.</div>
					<div class="platform__num">01</div>
				</div>
				<div class="platform__decore"></div>
				<div class="platform__video">
					<iframe width="1200" height="500" src="https://www.youtube.com/embed/SOYqeP8LAF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section class="offer">
		<div class="offer__container _container">
			<div class="offer__body">
				<div class="offer__block">
					<div class="offer__heading">
						Мы предлагаем большой выбор курсов для <span>профессионального</span> и <span>личностного</span> развития.
					</div>
					<div class="offer__num">02</div>
				</div>
				<div class="main__stat">
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num01">0</div>
						<div class="main__stat-item-text">слушателей</div>
					</div>
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num02">0</div>
						<div class="main__stat-item-text">курсов</div>
					</div>
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num03">0</div>
						<div class="main__stat-item-text">
							образовательных
							организаций
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="expert">
		<div class="expert__container _container">
			<div class="expert__body">
				<div class="expert__block">
					<div class="expert__heading">
						Делаем специалистов
						<span>экспертами</span>
					</div>
					<div class="expert__num">03</div>
				</div>
				<div class="expert__content">
					<div class="expert__item-wrapper">
						<div class="expert__item">
							<div class="expert__item-image"></div>
							<div class="expert__item-heading">Собираем лучшие методологии</div>
							<div class="expert__item-text">Над нашими курсами работает большая команда: авторы, методисты, продюсеры, преподаватели, маркетологи, редакторы. Каждый следит за трендами на рынке, чтобы запустить качественную программу. Мы создаём продукт, которым пользуемся сами.</div>
						</div>
						<div class="expert__item">
							<div class="expert__item-image"></div>
							<div class="expert__item-heading">Собираем лучшие методологии</div>
							<div class="expert__item-text">Над нашими курсами работает большая команда: авторы, методисты, продюсеры, преподаватели, маркетологи, редакторы. Каждый следит за трендами на рынке, чтобы запустить качественную программу. Мы создаём продукт, которым пользуемся сами.</div>
						</div>
					</div>
					<div class="expert__item-wrapper">
						<div class="expert__item">
							<div class="expert__item-image"></div>
							<div class="expert__item-heading">Собираем лучшие методологии</div>
							<div class="expert__item-text">Над нашими курсами работает большая команда: авторы, методисты, продюсеры, преподаватели, маркетологи, редакторы. Каждый следит за трендами на рынке, чтобы запустить качественную программу. Мы создаём продукт, которым пользуемся сами.</div>
						</div>
						<div class="expert__item">
							<div class="expert__item-image"></div>
							<div class="expert__item-heading">Собираем лучшие методологии</div>
							<div class="expert__item-text">Над нашими курсами работает большая команда: авторы, методисты, продюсеры, преподаватели, маркетологи, редакторы. Каждый следит за трендами на рынке, чтобы запустить качественную программу. Мы создаём продукт, которым пользуемся сами.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="colleague">
		<div class="colleague__container _container">
			<div class="colleague__body">
				<div class="colleague__block">
					<div class="colleague__heading">
						О нашей 
						<span>компании</span>
					</div>
					<div class="colleague__text">В нашей команде 33 профессионала, увлеченные своей работой</div>
					<div class="colleague__num">04</div>
				</div>
				<div class="colleague__content">
					<div class="colleague__item-wrapper">
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item-arrow"><div class="colleague__arrow"></div></div>
					</div>
					<div class="colleague__item-wrapper">
						<div class="colleague__item-arrow"><div class="colleague__arrow"></div></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
						<div class="colleague__item"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="next">
		<div class="next__container _container">
			<div class="next__body">
				<div class="next__content">
					<a href="" class="next__heading">Вакансии</a>
					<div class="next__text">Следующий раздел</div>
					<a class="next__arrow-wrapper">
						<div class="next__arrow"></div>
					</a>
				</div>
			</div>
		</div>
	</section>


	<section class="banner" id="banner">
		<div class="banner__container _container">
			<div class="banner__body">
				<div class="banner__content">
					<div class="banner__heading">
						<span>СКИДКА 20%</span>
						<span>Начать просто. Попробуйте</span>
					</div>
					<div class="banner__decore"></div>
					<div class="banner__decore"></div>
					<div class="banner__decore">
						<div class="banner__decore-arrow"></div>
					</div>
					<div class="banner__decore"></div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer" id="footer">
		<div class="footer__container _container">
			<div class="footer__body">
				<div class="footer__content">
					<div class="footer__block">
						<div class="footer__heading">
							<span>Обратная</span>
							<span>связь</span>
						</div>
						<div class="footer__copyright">ЦОПП— © 2022</div>
					</div>
					<div class="footer__block">
						<ul class="footer__navigation">
							<li><a href="#category">Направления</a></li>
							<li><a href="#advantage">Преимущества</a></li>
							<li><a href="#about">О нас</a></li>
							<li><a href="#prof">Профориентация</a></li>
						</ul>
						<div class="footer__social-wrapper">
							<div class="footer__social">
								<span>Instagram</span>
								<span>Instagram</span>
							</div>
							<div class="footer__social">
								<span>Telegram</span>
								<span>Telegram</span>
							</div>
						</div>
					</div>
					<div class="footer__block">
						<div class="footer__block-text">Адрес <br> Республика Саха (Якутия), 677000 Якутск, ул.Крупской, 13</div>
						<div class="footer__block-text">Почта <br> info@copp14.com</div>
						<div class="footer__block-text">Номер  <br> +7 800 222-41-40</div>
					</div>
					<form class="footer__form" method="POST" action="libs/telegram.php">
						<input type="name" name="name" placeholder="Имя">
						<textarea name="message" placeholder="Сообщение"></textarea>
						<button type="submit">Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>