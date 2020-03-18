<?
	$titles = ['Передача карданная','Коробка раздаточная','Механизм переключения передач','Система питания'];
?>
<div class="product-card">
	<div class="product-card__pic">
		<img src="img/catalog/<?=rand(0,7);?>.png" alt="" />
	</div>
	<div class="product-card__main">
		<h3 class="product-card__title"><?=$titles[rand(0,count($titles)-1)];?></h3>
	</div>
	<div class="product-card__price">307 BYN</div>
	<a href="product.php" class="btn btn--stroke product-card__btn">Заказать</a>
</div>