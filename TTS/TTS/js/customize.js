// 自行加入的JS請寫在這裡
$(function() {
   $('.singleSlider').slick({
    dots: true,
    arrow: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: 'ease'
});
   $('.adSlider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrow: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true
        }
    }, {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
        }
    }]
});
   $('.adSlider-small').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrow: true,
    focusOnSelect: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: true
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true
        }
    }, {
        breakpoint: 575,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true
        }
    }]
});

	//燈箱slick+lightBox組合
    $('.cp_slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: false,
        autoplaySpeed: 1500,
        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnSelect: true,
        accessibility: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('.cp_slider').slickLightbox({
        caption: 'caption',
        useHistoryApi: 'true',
        lazy: true
    });
});