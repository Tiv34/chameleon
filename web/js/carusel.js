$(document).on('ready', function() {
    if ($(window).width()<=680) {
        count_card = 1;
    } else {
        count_card = 2;
    }
    $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: count_card,
        slidesToScroll: count_card
    });
    $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
    });
    $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: count_card,
        slidesToScroll: count_card
    });
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
    });
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
    });
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});