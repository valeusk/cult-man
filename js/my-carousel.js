jQuery(document).ready(function($){
//вставлять код переменной здесь
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    //center:true,
    //margin:10,
    responsiveClass:true,
    autoWidth:true,
        responsive:{
        0:{
            items:1,
            nav:true,

        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false,
            height:400
        }
    }
})
});
//конец вставки
});
