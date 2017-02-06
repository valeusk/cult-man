jQuery(document).ready(function($){
//вставлять код переменной здесь
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    center:true,
    autoplay:true,
    responsiveClass:true,
        nav:true,
        navText: ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
        smartSpeed: 1000,
        navSpeed:1000,
        responsive:{
        0:{
            loop:true,
            items:1,
            //nav:true,

        },
        600:{
            items:1,
            nav:true,
            loop:true
           // nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:true
            }
    }
})
});
//конец вставки
});
