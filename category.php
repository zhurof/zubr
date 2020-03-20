<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="#">Каталог</a></li>
					<li>Запчасти МАЗ</li>
				</ul>
			</div>
		</div>
		<div class="catalog">
			<div class="wrapper">
				<h1 class="section-title catalog__title">Двигатель</h1>
				<form action="" class="filter catalog__filter">
					<span class="filter__label">Сортировать по:</span>
					<label class="text-radio filter__option">
						<input type="radio" name="sort" value="price" class="text-radio__input" checked>
						<span class="text-radio__btn">Цене</span>
					</label>
					<label class="text-radio filter__option">
						<input type="radio" name="sort" value="popular" class="text-radio__input">
						<span class="text-radio__btn">Популярности</span>
					</label>
					<label class="text-radio filter__option">
						<input type="radio" name="sort" value="name" class="text-radio__input">
						<span class="text-radio__btn">Имени</span>
					</label>
					<span class="filter__label">Показывать по:</span>
					<div class="select select--small filter__select" tabindex="0">
						<select class="select__input" tabindex="-1" >
							<option>10</option>
							<option selected>20</option>
							<option>30</option>
						</select>
						<div class="select__output">20</div>									
						<ul class="select__list">
							<li>10</li>
							<li>20</li>
							<li>30</li>
						</ul>													
					</div>
					<span class="filter__view-btn filter__view-btn--active" data-view="table">
						<i class="icon-th"></i>
						<span>Галерея</span>
					</span>
					<span class="filter__view-btn" data-view="list">
						<i class="icon-th-list"></i>
						<span>Список</span>
					</span>
				</form>
				<div class="catalog__thead">
					<div class="catalog__th">Наименование</div>
					<div class="catalog__th">Розница</div>
					<div class="catalog__th">Опт</div>
					<div class="catalog__th">Количество</div>
				</div>
				<div class="box catalog__box">
					<?
						for($i=0;$i<16;$i++){
							include "product-card.php";
						}
					?>
				</div>
				<div class="pagination catalog__pagination">
					<a href="#" class="fa-angle-left pagination__arrow pagination__arrow--prev"></a>
					<a href="#" class="pagination__link pagination__link--active">1</a>
					<a href="#" class="pagination__link">2</a>
					<a href="#" class="pagination__link">3</a>
					<a href="#" class="pagination__link">4</a>
					<a href="#" class="pagination__link">5</a>
					<a href="#" class="fa-angle-right pagination__arrow pagination__arrow--next"></a>
				</div>
			</div>
		</div>
		<div class="feedback">
			<div class="wrapper">
				<div class="feedback__inner">
					<div class="feedback__main">
						<h2 class="section-title section-title--white feedback__title">Необходима консультация?</h2>
						<div class="feedback__text">
							Заполните форму и наш специалист свяжется с вами в&nbsp;ближайшее время и ответит на все вопросы
						</div>
					</div>
					<form action="" class="feedback__form">
						<input type="text" class="feedback__input" placeholder="Ваше имя" required />
						<input type="tel" class="feedback__input" placeholder="Телефон" required />
						<button class="btn btn--medium feedback__btn">Отправить</button>
					</form>
				</div>
			</div>
		</div>
		<div class="text-block">
			<div class="wrapper">
				<h2 class="section-title text-block__title">Большой выбор запасных частей к автомобилям МАЗ</h2>
				<div class="text-block__content">
					<p><strong><i>Компания ООО "АвтоБелЗубр"</i></strong> успешно занимается реализацией на белорусском рынке запчастей к технике Минского Автомобильного Завода (МАЗ) от лучших отечественных и зарубежных производителей. </p>
					<p>За это время мы значительно расширили количество поставщиков и ассортимент продукции. Среди предлагаемых нами запасных частей  МАЗ вы найдете, как самые мелкие детали, так и крупные комплектующие.</p>
					<p>Оперативные поставки, индивидуальный подход к каждому клиенту, отличный сервис, выгодные условия и низкие цены. <br><strong><i>Компания ООО "АвтоБелЗубр"</i></strong> нацелена на своевременную поставку запчастей МАЗ во все регионы Республики Беларусь, стран СНГ и дальнего зарубежья.</p>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	