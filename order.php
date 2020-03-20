<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="basket.php">Корзина</a></li>
					<li>Заказ товара</li>
				</ul>
			</div>
		</div>
		<div class="order">
			<div class="wrapper order__wrapper">
				<h1 class="section-title order__title">Оформить заказ</h1>
				<div class="order__body">
					<div class="order__main">					
						<div class="order__products">
							<div class="product-line">
								<a href="product.php" class="product-line__pic"><img src="img/catalog/0.png" alt=""></a>
								<div class="product-line__text">
									<h3 class="product-line__title"><a href="product.php">Система выпуска отработавших газов</a></h3>
									<p>Артикул: 801-5972254</p>
								</div>
								<span class="product-line__amount">1 шт.</span>
								<div class="product-line__price-column">
									<div class="product-line__price product-line__price--total"><span>120</span> BYN</div>
								</div>
							</div>
							<div class="product-line">
								<a href="product.php" class="product-line__pic"><img src="img/catalog/1.png" alt=""></a>
								<div class="product-line__text">
									<h3 class="product-line__title"><a href="product.php">Передача карданная</a></h3>
									<p>Артикул: 801-5972254</p>
								</div>					
								<span class="product-line__amount">2 шт.</span>
								<div class="product-line__price-column">
									<div class="product-line__price product-line__price--total"><span>168</span> BYN</div>
								</div>
							</div>
							<div class="product-line">
								<a href="product.php" class="product-line__pic"><img src="img/catalog/2.png" alt=""></a>
								<div class="product-line__text">
									<h3 class="product-line__title"><a href="product.php">Раздельно-агрегатная система. Дополнительное оборудование</a></h3>
									<p>Артикул: 801-5972254</p>
								</div>					
								<span class="product-line__amount">3 шт.</span>
								<div class="product-line__price-column">
									<div class="product-line__price product-line__price--total"><span>660</span> BYN</div>
								</div>
							</div>
						</div>
						<form action="" class="order__form">
							<div class="order__fieldset">
								<div class="order__legend">Тип плательщика<span class="order__value"></span></div>
								<div class="order__fieldset-body">
									<div class="order__fieldset-main">
										<label class="classic-label order__option">
											<input type="radio" name="customer" value="физическое лицо" checked />
											<span>Физическое лицо</span>
										</label>
										<label class="classic-label order__option">
											<input type="radio" name="customer" value="юридическое лицо" />
											<span>Юридическое лицо</span>
										</label>
									</div>
									<div class="order__fieldset-footer">
										<button type="button" class="btn btn--small order__nav-btn order__nav-btn--next">Далее</button>
									</div>
								</div>								
							</div>
							<div class="order__fieldset">
								<div class="order__legend">Доставка<span class="order__value"></span></div>
								<div class="order__fieldset-body" style="display:none">
									<div class="order__fieldset-main">
										<div class="box order__fieldset-box">
											<label class="pic-field order__option" data-price="0 руб.">
												<input type="radio" name="delivery" value="самовывоз со склада №1" data-price="0" class="pic-field__input" checked />
												<span class="pic-field__head">
													<i class="fa-truck"></i>
													<span>Самовывоз</span>
												</span>
												<span class="pic-field__caption">Самовывоз со склада №1</span>
											</label>
											<label class="pic-field order__option" data-price="0 руб.">
												<input type="radio" name="delivery" value="самовывоз со склада №2" data-price="0" class="pic-field__input" />
												<span class="pic-field__head">
													<i class="fa-truck"></i>
													<span>Самовывоз</span>
												</span>
												<span class="pic-field__caption">Самовывоз со склада №2</span>
											</label>
											<label class="pic-field order__option" data-price="10 руб.">
												<input type="radio" name="delivery" value="транспортной компанией" data-price="10" class="pic-field__input" />
												<span class="pic-field__head">
													<i class="fa-archive"></i>
													<span>Доставка<br>курьером</span>
												</span>
												<span class="pic-field__caption">Доставка транскпортной компанией</span>
											</label>
										</div>
									</div>
									<div class="order__fieldset-sidebar">
										<div class="order__fieldset-description" style="display:block;">
											<h3>САМОВЫВОЗ: Склад №1 в недосягаемых окраинах города N</h3>
											<p>Вы можете самостоятельно забрать товар со склада:</p>
											<p>Адрес слада Lorem ipsum dolor sit amet.</p>
											<h4>Время работы</h4>
											<p>8:00 - 17:00</p>
											<p>Стоимость: <strong>0 руб.</strong></p>
										</div>
										<div class="order__fieldset-description">
											<h3>САМОВЫВОЗ: Склад №2 в центре замечательного города N</h3>
											<p>Вы можете самостоятельно забрать товар со склада:</p>
											<p>Адрес слада Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam.</p>
											<h4>Время работы</h4>
											<p>9:00 - 18:00</p>
											<p>Стоимость: <strong>0 руб.</strong></p>
										</div>
										<div class="order__fieldset-description">
											<h3>Доставка транспортной компанией</h3>
											<p>Доставка осуществляется силами транспортной компании "Рога и копыта"  либо собственным транспортом ООО "Тра-та-та" после 100% оплаты товара.</p>
											<p>Стоимость: <strong>10 руб.</strong></p>
											<p>Срок доставки: <strong>от 1 до 3 дней</strong></p>
										</div>
									</div>
									<div class="order__fieldset-footer">
										<button type="button" class="btn btn--small btn--stroke order__nav-btn order__nav-btn--prev">Назад</button>
										<button type="button" class="btn btn--small order__nav-btn order__nav-btn--next">Далее</button>
									</div>
								</div>								
							</div>
							<div class="order__fieldset">
								<div class="order__legend">Оплата<span class="order__value"></span></div>
								<div class="order__fieldset-body" style="display:none">
									<div class="order__fieldset-main">
										<div class="box order__fieldset-box">
											<label class="pic-field order__option">
												<input type="radio" name="payment" value="ЕРИП" class="pic-field__input" checked />
												<span class="pic-field__head">
													<img src="img/payment/erip.png" alt="">
												</span>
												<span class="pic-field__caption">Система "Расчет (ЕРИП)"</span>
											</label>
											<label class="pic-field order__option">
												<input type="radio" name="payment" value="наличными" class="pic-field__input" />
												<span class="pic-field__head">
													<i class="fa-money"></i>
													<span>наличными при получении</span>
												</span>
												<span class="pic-field__caption">Оплата наличными при получении товара на складе</span>
											</label>
											<label class="pic-field order__option">
												<input type="radio" name="payment" value="банковской картой" class="pic-field__input" />
												<span class="pic-field__head">
													<img src="img/payment/cards.svg" alt="">
												</span>
												<span class="pic-field__caption">Банковские карты</span>
											</label>
											<label class="pic-field order__option">
												<input type="radio" name="payment" value="банковским переводом" class="pic-field__input" />
												<span class="pic-field__head">
													<i class="fa-file-text-o"></i>
													<span>счёт на <br>оплату</span>
												</span>
												<span class="pic-field__caption">Банковский перевод</span>
											</label>
										</div>
									</div>
									<div class="order__fieldset-sidebar">
										<div class="order__fieldset-description" style="display:block;">
											<h3>Система "Расчет (ЕРИП)"</h3>
											<p>Оплата через систему «Расчет» (ЕРИП) позволяет оплатить покупку со своего карт-счета, используя интернет-банк, либо банкоматы и инфокиоски многих банков РБ. Рассчитаться наличными через систему «Расчет» (ЕРИП) также возможно, обратившись в кассы банков либо воспользовавшись устройствами приема наличных денег (cash-in).</p>
										</div>
										<div class="order__fieldset-description">
											<h3>Оплата наличными при получении товара на складе</h3>
											Оплата производится наличными деньгами, в момент получения заказа на складе. Подтверждением вашей оплаты является фискальный кассовый чек, вручаемый во время получения и оплаты заказа.
										</div>
										<div class="order__fieldset-description">
											<h3>Банковские карты</h3>
											<p>К оплате принимаются карты Visa, Visa Electron, MasterCard всех классов и банков, Maestro с CVC-кодом и Белкарт. Мы рекомендуем заранее обратиться в свой банк, чтобы удостовериться в том, что ваша карта может быть использована в системе Webpay.</p>
										</div>
										<div class="order__fieldset-description">
											<h3>Банковский перевод</h3>
										</div>
									</div>
									<div class="order__fieldset-footer">
										<button type="button" class="btn btn--small btn--stroke order__nav-btn order__nav-btn--prev">Назад</button>
										<button type="button" class="btn btn--small order__nav-btn order__nav-btn--next">Далее</button>
									</div>
								</div>								
							</div>
							<div class="order__fieldset">
								<div class="order__legend">Покупатель<span class="order__value"></span></div>
								<div class="order__fieldset-body" style="display:none">
									<div class="order__fieldset-main">
										<input class="order__input" type="text" placeholder="ФИО" required />
										<input class="order__input" type="email" placeholder="E-mail" required />
										<input class="order__input" type="tel" placeholder="Телефон" required />
										<input class="order__input" type="text" placeholder="Город" />
										<textarea class="order__input" rows="2" placeholder="Комментарии к заказу"></textarea>
									</div>
									<div class="order__fieldset-footer">
										<button type="button" class="btn btn--stroke btn--small order__nav-btn order__nav-btn--prev">Назад</button>
										<button class="btn btn--dark btn--small order__submit">Оформить заказ</button>
									</div>
								</div>								
							</div>
						</form>
					</div>
					<div class="order__info">
						<table class="order__info-table">
							<tbody>
								<tr>
									<td>Товаров на:</td>
									<td class="order__price"><span>948</span> BYN</td>
								</tr>
								<tr>
									<td>НДС (20%, включен в цену):</td>
									<td class="order__tax"><span>189.6</span> BYN</td>
								</tr>
								<tr>
									<td>Доставка:</td>
									<td class="order__delivery"><span>0</span> BYN</td>
								</tr>
								<tr>
									<td>Итого:</td>
									<td class="order__total-price"><span>948</span> BYN</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	