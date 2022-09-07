$(document).ready(function(){
    $(".slide-show-skate").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class="fa-solid fa-angle-right"></i></button>`,
        dots: true,
        autoplay: true,
        speed: 500
    })
})