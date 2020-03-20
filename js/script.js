function leadingZero(number){
	if(+number < 10){
		return '0'+number;
	}else{
		return number;
	}
}
$('.header__menu-btn').click(function(e){
	e.preventDefault();
	$('.header__menu-list').toggleClass('header__menu-list--open')
})
$(document).click(function(e){
	if(!$(e.target).is('.header__menu') && !$(e.target).closest('.header__menu').length){
		$('.header__menu-list').removeClass('header__menu-list--open')
	}
})
//Подсказки поиска для демонстрации 
$('.search__input').on('input',function(){
	var content = $(this).closest('.search').find('.search__content');
	if(this.value){
		content.fadeIn(300);
	}else{
		content.fadeOut(300);
	}
})
$('.search__input').on('blur',function(){
	$(this).closest('.search').find('.search__content').fadeOut(200);
})
//изменение шапки при прокрутке
$(window).on('load scroll',function(){
	if(scrollY > $('.header__topline').innerHeight()){
		$('.header__bottomline').addClass('header__bottomline--fixed');
	}else{
		$('.header__bottomline').removeClass('header__bottomline--fixed');
	}
})
//кастомный input[type=number]
$('.number-field__btn').click(function(){
	var input = $(this).siblings('input')[0],
			min = input.min || 0,
			max = input.max || 99,
			step = input.step || 1,
			value = input.value || min;

	if($(this).is('.number-field__btn--plus') && value <= max-step){
		input.value = +value + +step;
		$(input).trigger('change');
	}
	if($(this).is('.number-field__btn--minus') && value >= +min + +step){
		input.value = value - step;
		$(input).trigger('change');
	}
})
//Кастомный select
$('.select').blur(function(){
	$(this).removeClass('select--open');
})
$('.select__output').click(function(){
	$(this).parent('.select').toggleClass('select--open');
})
$('.select__list>li').click(function(){
	var value = $(this).text(),
			select = $(this).parents('.select');
			
	select.removeClass('select--open');
	select.find('.select__input').val(value).trigger('change');
})
$('.select__input').change(function(){
	var wrapper = $(this).parent('.select');	
	wrapper.find('.select__output').text(this.value);	
})
//
$('.top-block').slick({
	prevArrow: '<span class="fa-angle-left top-block__arrow top-block__arrow--prev" />',
	nextArrow: '<span class="fa-angle-right top-block__arrow top-block__arrow--next" />',
	dots: true,
	dotsClass: 'top-block__dots',
	customPaging: function(slick,i){
		return '<strong>'+leadingZero(i+1)+'/</strong>'+leadingZero(slick.slideCount);
	},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false
			}
		}
	]
})
$('.catalog-block__filter li').click(function(){
	if(!$(this).is('.active')){
		var category = $(this).text(),
				slider = $(this).closest('.catalog-block').find('.catalog-block__slider');
		$(this).addClass('active').siblings().removeClass('active');
		slider.slick('slickUnfilter');
		if(category != 'Все'){
			slider.slick('slickFilter','[data-category="'+category+'"]');
		}
	}	
})
$('.catalog-block__slider').slick({
	slidesToShow: 4,
	prevArrow: '<span class="fa-angle-left catalog-block__arrow catalog-block__arrow--prev">',
	nextArrow: '<span class="fa-angle-right catalog-block__arrow catalog-block__arrow--next">',
	responsive: [
		{
			breakpoint: 1320,
			settings: {
				slidesToShow: 3
			}
		},{
			breakpoint: 992,
			settings: {
				variableWidth: true,
				centerMode: true,
				centerPadding: 0,
				arrows: false
			}
		}
	]
})
//смена вида в каталоге
$('.filter__view-btn').click(function(){
	var view = $(this).data('view');
	$(this).addClass('filter__view-btn--active').siblings('.filter__view-btn').removeClass('filter__view-btn--active');
	if(view == 'list'){
		$('.catalog__thead').addClass('catalog__thead--active');
		$('.product-card').not('.slick-slide').addClass('product-card--horizontal');
	}else{
		$('.catalog__thead').removeClass('catalog__thead--active');
		$('.product-card--horizontal').removeClass('product-card--horizontal');
	}
})
$(window).on('load resize',function(){
	if(innerWidth < 993){
		$('.catalog__thead').removeClass('catalog__thead--active');
		$('.product-card--horizontal').removeClass('product-card--horizontal');
		$('.filter__view-btn').removeClass('filter__view-btn--active').filter('[data-view="table"]').addClass('filter__view-btn--active');
	}
})
//слайдер на странице товара
var slidesCount = $('.product__slide').length,
		thumbsCount = $('.product__thumb').length;

if(slidesCount > 1 &&  thumbsCount == slidesCount){
	
	$('.product__thumbs').slick({
		slidesToShow: slidesCount <= 3 ? slidesCount - 1 : 3,
		vertical: true,
		verticalSwiping: true,
		prevArrow: '<span class="fa-angle-up product__arrow product__arrow--prev" />',
		nextArrow: '<span class="fa-angle-down product__arrow product__arrow--next" />',
		asNavFor: '.product__slider',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					vertical: false,
					verticalSwiping: false,
					arrows: false,
					focusOnSelect: true
				}
			}
		]
	})

	$('.product__slider').slick({
		arrows: false,
		asNavFor: '.product__thumbs'
	})	
}
/*табы*/
$('.tabs__trigger').click(function(e){
	if(!$(this).is('.tabs__trigger--active')){
		var index = $(this).index();
		$(this).addClass('tabs__trigger--active').siblings().removeClass('tabs__trigger--active');
		$(this).closest('.tabs').find('.tabs__item').hide().eq(index).fadeIn(300);
	}
})
/*рассчеты в корзине*/
function calculateBasket(){
	var totalPrice = 0;
	$('.product-line__price--total span').each(function(){
		var price = +$(this).text();
		if(isFinite(price)){
			totalPrice += price;
		}
	})
	$('.basket__total-price span').text(totalPrice);
}
$('.product-line__amount input').change(function(){
	var card = $(this).closest('.product-line'),
			unitPriceEl = card.find('.product-line__price--per-unit span'),
			totalPriceEl = card.find('.product-line__price--total span'),
			result = unitPriceEl.text() * this.value;
	if(isFinite(result)){
		totalPriceEl.text(result);
		calculateBasket();
	}
})
//типа удаление товара из корзины
$('.product-line__remove-btn').click(function(){
	$(this).closest('.product-line').fadeOut(300,function(){
		$(this).remove();
		calculateBasket();
	});
})
//заказ
$('.order__option').change(function(e){
	$(this).closest('.order__fieldset').find('.order__value').text(e.target.value);
	var index = $(this).index();
	$(this).closest('.order__fieldset').find('.order__fieldset-description').hide().eq(index).fadeIn(300);
})
$('.order__nav-btn--next').click(function(){
	var value = $(this).closest('.order__fieldset').find('.order__option input:checked').val();
	if(value){
		$(this).closest('.order__fieldset').find('.order__value').text(value);
	}
	$(this).closest('.order__fieldset').find('.order__legend').addClass('order__legend--editable');
	$(this).closest('.order__fieldset-body').slideUp(300);
	$(this).closest('.order__fieldset').next().find('.order__fieldset-body').slideDown(300);
})
$('.order__nav-btn--prev').click(function(){
	$(this).closest('.order__fieldset-body').slideUp(300);
	$(this).closest('.order__fieldset').prev().find('.order__fieldset-body').slideDown(300);
})
$('.order__legend').click(function(){
	if($(this).is('.order__legend--editable')){
		var targetContent = $(this).siblings('.order__fieldset-body');
		$('.order__fieldset-body').not(targetContent).slideUp(300);
		targetContent.slideDown(300)
	}
})

function calculateOrder(){
	var price = +$('.order__price span').text() || 0,
			delivery = +$('.order__delivery span').text() || 0;
	$('.order__total-price span').text(price + delivery);
}
$('.order__form [name=delivery]').change(function(){
	var deliveryPrice = +$(this).data('price') || 0;
	$('.order__delivery span').text(deliveryPrice);
	calculateOrder();
})