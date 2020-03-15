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
//
$('.top-block').slick({
	prevArrow: '<span class="fa-angle-left top-block__arrow top-block__arrow--prev" />',
	nextArrow: '<span class="fa-angle-right top-block__arrow top-block__arrow--next" />',
	dots: true,
	dotsClass: 'top-block__dots',
	customPaging: function(slick,i){
		return '<strong>'+leadingZero(i+1)+'/</strong>'+leadingZero(slick.slideCount);
	}
})
$('.category-block__filter li').click(function(){
	if(!$(this).is('.active')){
		var category = $(this).text(),
				slider = $(this).closest('.category-block').find('.category-block__slider');
		$(this).addClass('active').siblings().removeClass('active');
		slider.slick('slickUnfilter');
		if(category != 'Все'){
			slider.slick('slickFilter','[data-category="'+category+'"]');
		}
	}	
})
$('.category-block__slider').slick({
	slidesToShow: 4,
	prevArrow: '<span class="fa-angle-left category-block__arrow category-block__arrow--prev">',
	nextArrow: '<span class="fa-angle-right category-block__arrow category-block__arrow--next">'
})
