<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="catalog.php">Каталог</a></li>
					<li><a href="category.php">Запчасти МАЗ</a></li>
					<li>Сцепление</li>
				</ul>
			</div>
		</div>
		<div class="product">
			<div class="wrapper product__wrapper">
				<div class="product__pic">					
					<div class="product__slider">
						<div class="product__slide"><img src="img/catalog/1.png" alt=""></div>
						<div class="product__slide"><img src="img/catalog/2.png" alt=""></div>						
						<div class="product__slide"><img src="img/catalog/4.png" alt=""></div>
						<div class="product__slide"><img src="img/catalog/6.png" alt=""></div>
						<div class="product__slide"><img src="img/catalog/7.png" alt=""></div>
					</div>
					<div class="product__thumbs">
						<div class="product__thumb"><img src="img/catalog/1.png" alt=""></div>						
						<div class="product__thumb"><img src="img/catalog/2.png" alt=""></div>						
						<div class="product__thumb"><img src="img/catalog/4.png" alt=""></div>
						<div class="product__thumb"><img src="img/catalog/6.png" alt=""></div>
						<div class="product__thumb"><img src="img/catalog/7.png" alt=""></div>
					</div>
				</div>
				<div class="product__text">
					<div class="product__info">
						<span class="product__char">Артикул: <strong>801-5972254</strong></span>
						<span class="product__char">Бренд: <strong>для а/м МАЗ</strong></span>
					</div>
					<h1 class="product__title">Система выпуска отработавших газов</h1>
					<div class="product__description">
						<p>ТМ238-1601130 Диск ведомый МАЗ с двиг.ЯМЗ-236/238</p>
					</div>
					<div class="product__price">252 BYN</div>
					<a href="#" class="btn product__btn">Купить</a>
				</div>
				<div class="product__main">
					<div class="tabs">
						<div class="tabs__head">
							<div class="tabs__trigger tabs__trigger--active">Описание</div>
							<div class="tabs__trigger">Сертификат</div>
						</div>
						<div class="tabs__body">
							<div class="tabs__item" style="display:block;">
								<p>ТМ238-1601130 ДИСК СЦЕПЛЕНИЯ ВЕДОМЫЙ <br>Аналог ЯМЗ-236.</p>								
								<div class="table-wrapper">
									<table>
										<tbody>
											<tr>
												<td width="350">Диск сцепления ведомый предназначен для установки на автомобили:</td>
												<td><strong>МАЗ-500; МАЗ-503; МАЗ-504 с маховиком 236-1005120</strong></td>
											</tr>
											<tr>
												<td>Код для заказа:</td>
												<td><strong>ТМ238-1601130</strong></td>
											</tr>
											<tr>
												<td>Вес, кг:</td>
												<td><strong>6,1</strong></td>
											</tr>
											<tr>
												<td>Передаваемый крутящий момент, кгс∙м:</td>
												<td><strong>90</strong></td>
											</tr>
											<tr>
												<td>Наружный диаметр фрикционной накладки, мм:</td>
												<td><strong>400</strong></td>
											</tr>
											<tr>
												<td>Толщина по накладкам,мм:</td>
												<td><strong>10,2</strong></td>
											</tr>
											<tr>
												<td>Внутренний диаметр фрикционной накладки, мм:</td>
												<td><strong>220</strong></td>
											</tr>
											<tr>
												<td>Параметры шлицевого отверстия, мм dxDxbxz:</td>
												<td><strong>34х42х6х10</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tabs__item">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, harum sunt nisi tenetur eligendi assumenda debitis labore exercitationem officiis cumque distinctio et non quaerat aspernatur saepe dicta vel at dolorem dolores culpa doloribus dignissimos quis. Nobis, nesciunt, pariatur officia aspernatur fugiat mollitia nam cupiditate ad quidem nulla vel dolorem eos sunt? Culpa, provident sint necessitatibus eius magnam vero tenetur quaerat dolorem aut a aliquid eveniet voluptate et atque repellat eligendi veniam laudantium officia! Atque, cupiditate assumenda voluptatibus alias non facilis quo. Asperiores, qui tempore eaque accusamus excepturi. Quasi, obcaecati, corporis beatae tempora natus delectus unde dignissimos eveniet commodi fugit esse!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="catalog-block">
			<div class="wrapper">
				<div class="catalog-block__head">
					<h1 class="section-title catalog-block__title">Похожие товары</h1>
				</div>
				<div class="box catalog-block__box">
					<?
						for($i=0;$i<4;$i++){
							include "product-card--small.php";
						}
					?>
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
	</main>
<?php	include "footer.php";?>	