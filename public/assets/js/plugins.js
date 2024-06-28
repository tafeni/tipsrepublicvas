 /* ==============
 ========= js documentation ==========================

 * template name: Nftlotty 
 * version: 1.0
 * description: Nftlotty - NFT lottery Landing pages HTML Template
 * author: softivus
 * author url: https://www.templatemonster.com/authors/softivus/

    ==================================================

     01. wow init
     -------------------------------------------------
     02. magnificPopup
     -------------------------------------------------
     03. odometer counter
     -------------------------------------------------
     04. form validate
     -------------------------------------------------
     05. team slider
     -------------------------------------------------
     06. lottery slider
     -------------------------------------------------

    ==================================================
============== */

(function ($) {
    "use strict";

    jQuery(document).ready(function () {

        // wow init
        // new WOW().init();
        new WOW({
            offset: 200
          }).init();
          
        //   niceSelect
        //   $('select').niceSelect();

        // magnific-popup
        $('.popup-video').magnificPopup({
            type: 'iframe'
        });

        // odometer counter
        $(".odometer").each(function () {
            $(this).isInViewport(function (status) {
                if (status === "entered") {
                    for (
                        var i = 0;
                        i < document.querySelectorAll(".odometer").length;
                        i++
                    ) {
                        var el = document.querySelectorAll(".odometer")[i];
                        el.innerHTML = el.getAttribute("data-odometer-final");
                    }
                }
            });
        });

        // form validate
        $("#frmContactus").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                subject: {
                    required: true
                }
            },
            messages: {
                name: {
                    minlength: "Name should be at least 2 characters"
                },
                message: {
                    number: "Offer should be at least 5 characters"
                }
            }
        });
                
        // team slider
        $(".team-slider")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            autoplay: true,
            focusOnSelect: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 1500,
            arrows: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
          
        // lottery__slide
        $('#lottery__slide1').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            pauseOnHover:true,
            vertical:true,
            arrows: false,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: 'linear',
        });
      
        $('#lottery__slide2').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            vertical:true,
            arrows: false,
            autoplaySpeed: 0,
            pauseOnHover:true,
            speed: 4000,
            cssEase: 'linear',
        });





    });
})(jQuery);
