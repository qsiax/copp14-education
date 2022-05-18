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
							<li><a href="">Контакт</a></li>
						</ul>
				</div>
				<div class="header__block">
					<div class="header__btn"></div>
				</div>
			</div>
		</div>
	</header>

	<div class="tabs">
		<div class="tabs__container _container">
			<div class="tabs__body">
				<div class="tabs__content">
					<div class="tabs__item active" id="dataBtn">Личные данные</div>
					<div class="tabs__item">Избранное</div>
					<div class="tabs__item">Рекомендации</div>
					<div class="tabs__item" id="ratingBtn">Рейтинг</div>
					<div class="tabs__item">Платежи</div>
				</div>
			</div>
		</div>
	</div>

	<div class="window-wrapper">
			<section class="personal">
			<div class="personal__container _container">
			<div class="personal__body">
				<div class="personal__block">
					<div class="personal__avatar"></div>
					<div class="personal__text">Актуальные знания от признанных экспертов рынка для новичков и практикующих специалистов.</div>
				</div>
				<div class="personal__block">
					<div class="personal__heading">Личная <span>информация</span></div>
				</div>
				<div class="personal__block">
					<form action="" class="personal__form">
						<div class="personal__form-block">
							<p href="#"><?=$_COOKIE['name']?></p>
							<p href="#"><?=$_COOKIE['surname']?></p>
							<p href="#">Отчество</p>
						</div>
						<div class="personal__form-block">
							<div class="personal__form-wrapper">
								<label>Дата рождения</label>
								<input type="date" name="date">
							</div>
							<div class="personal__form-wrapper">
								<label>Телефон</label>
								<input type="phone" name="phone" placeholder="+9 (999) 999-99-99">
							</div>
							<div class="personal__form-wrapper">
								<label>Пол</label>
								<input type="text" name="gender" placeholder="Гендер">
							</div>
						</div>
						<div class="personal__form-block">
							<div class="personal__form-wrapper">
								<label>Роль</label>
								<input type="text" name="gender" placeholder="<?=$_COOKIE['role']?>" class="last-input">
							</div>
							<button type="submit">Сохранить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

			<section class="rating">
				<div class="rating__container _container">
					<div class="rating__body">
						<div class="rating__block">
							<div class="rating__heading">Рейтинг студентов</div>
							<div class="rating__text">Актуальные знания от признанных экспертов рынка для новичков и практикующих специалистов.</div>
						</div>
						<div class="rating__content">
							<div class="rating__content-text-wrapper">
								<div class="rating__content-text">Место</div>
								<div class="rating__content-text">Фото</div>
								<div class="rating__content-text">Имя</div>
								<div class="rating__content-text">Рейтинг</div>
							</div>
							<div class="rating__item-wrapper">

								<div class="rating__item">
									<div class="rating__item-num">01</div>
									<div class="rating__item-photo"></div>
									<div class="rating__item-name">
									<?=$_COOKIE['name']?> <br>
									<?=$_COOKIE['surname']?>
									</div>
									<div class="rating__item-rating"></div>
								</div>
								
								<div class="rating__item">
									<div class="rating__item-num">02</div>
									<div class="rating__item-photo"></div>
									<div class="rating__item-name">
									Павел <br>
									Дмитриев
									</div>
									<div class="rating__item-rating"></div>
								</div>

								<div class="rating__item">
									<div class="rating__item-num">03</div>
									<div class="rating__item-photo"></div>
									<div class="rating__item-name">
									Роман <br>
									Егоров
									</div>
									<div class="rating__item-rating"></div>
								</div>

								<div class="rating__item">
									<div class="rating__item-num">04</div>
									<div class="rating__item-photo"></div>
									<div class="rating__item-name">
									Дина <br>
									Иванова
									</div>
									<div class="rating__item-rating"></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
	</div>
	
	

	<script>

const rating = document.querySelector('.rating'),
	  personal = document.querySelector('.personal'),
      ratingBtn = document.querySelector('#ratingBtn'),
	  dataBtn = document.querySelector('#dataBtn');

	ratingBtn.addEventListener('click', () => {
		personal.classList.add('active');
		rating.classList.add('active');
		ratingBtn.classList.add('active');
		dataBtn.classList.add('active-01');
	});

	dataBtn.addEventListener('click', () => {
		personal.classList.remove('active');
		rating.classList.remove('active');
		ratingBtn.classList.remove('active');
		dataBtn.classList.remove('active-01');
	});
    
	</script>

</body>

</html>