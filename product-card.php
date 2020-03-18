<?
	$titles = ['Передача карданная','Система выпуска отработавших газов','Механизм переключения передач','Раздельно-агрегатная система. Дополнительное оборудование'];
?>
<div class="product-card">
	<div class="product-card__pic">
		<img src="img/catalog/<?=rand(0,7);?>.png" alt="" />
	</div>
	<div class="product-card__main">
		<div class="product-card__id">Артикул: 801-5972254</div>
		<h3 class="product-card__title"><?=$titles[rand(0,count($titles)-1)];?></h3>
	</div>
	<div class="product-card__price">307 BYN</div>
	<div class="product-card__price product-card__price--wholesale">219 BYN</div>
	<span class="number-field product-card__amount">
		<span class="number-field__btn number-field__btn--minus">-</span>
		<input type="number" class="number-field__input" value="1" min="1" max="99" readonly />
		<span class="number-field__btn number-field__btn--plus">+</span>		
	</span>
	<a href="product.php" class="btn btn--stroke product-card__btn">Заказать</a>
</div>