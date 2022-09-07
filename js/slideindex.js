$(document).ready(function() {
    $(".slide-show-skate").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: `<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow: `<button type='button' class='slick-next pull-right'><i class="fa-solid fa-angle-right"></i></button>`,
        dots: true,
        autoplay: true,
        speed: 500
    })
})



function process(tabShow) {
    $('.owl-stage-2').hide();

    $('#' + tabShow).show();
}


$('.owl-stage-2').hide();

$('.owl-stage-2').each(function(index) {
    if (index == 0) {
        $(this).show();
    }
});


function addCart() {
    var count_item_pr = parseInt($('.count_item_pr').html());
    count_item_pr++;
    $('.count_item_pr').html(count_item_pr);
}