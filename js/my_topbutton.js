jQuery(document).ready(function($){

	/**
	 * Кнопка наверх на jQuery.
	 * Автор: Тимур Камаев - wp-kama.ru
	 * version 2.2
	 */
	$('body').append('<style>\
		.scrollTop{\
			display:none; z-index:9999; position:fixed; bottom:10px; left:80%; width:60px; height:70px;\
			background:url(http://gckid/wp-content/themes/gckid/img/upbutton.png) 0 0 no-repeat;\
		}\
		.scrollTop:hover{ background-position:0 -70px;}\
	</style>');

	var speed      = 500,
		$scrollTop = $('<a href="#" class="scrollTop"></a>').appendTo('body');

	$scrollTop.click(function(e){
		e.preventDefault();

		$( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
	});

	//появление
	function show_scrollTop(){
		( $(window).scrollTop() > 300 ) ? $scrollTop.stop().fadeIn(600) : $scrollTop.stop().fadeOut(600);
	}
	$(window).scroll( function(){ show_scrollTop(); } );
	show_scrollTop();

});
