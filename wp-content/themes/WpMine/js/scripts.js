jQuery(document).ready(function($) {

    if( $('.home_slider').length > 0 ) {
        $('.home_slider').slick({
            dots: false,
            infinite: true,
            speed: 400,
            slidesToShow: 6,
            slidesToScroll: 1,
            rtl: true,
            prevArrow: '<i class="fas fa-chevron-right prev"></i>',
            nextArrow: '<i class="fas fa-chevron-left next"></i>',

            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
                },
                {
                    breakpoint: 1330,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }

});