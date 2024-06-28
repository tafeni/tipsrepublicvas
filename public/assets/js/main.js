/* ==============
 ========= js documentation ==========================

 * template name: Nftlotty 
 * version: 1.0
 * description: Nftlotty - NFT lottery Landing pages HTML Template
 * author: softivus
 * author url: https://www.templatemonster.com/authors/softivus/

    ==================================================

     01. preloader
     -------------------------------------------------
     02. on scroll actions
     -------------------------------------------------
     03. scroll top
     -------------------------------------------------
     04. magnificPopup
     -------------------------------------------------
     05. data background
     -------------------------------------------------
     06. reply
     -------------------------------------------------
     07. contact ajax
     -------------------------------------------------
     08. copyright year
     -------------------------------------------------
     
    ==================================================
============== */


    jQuery(document).ready(function () {

        // pre_loader
        $("#pre_loader").delay(300).animate({
            "opacity": "0"
        }, 500, function () {
            $("#pre_loader").css("display", "none");
        });

        // on scroll actions
        var scroll_offset = 120;
        $(window).scroll(function () {
            var $this = $(window);
            if ($('.header-section').length) {
                if ($this.scrollTop() > scroll_offset) {
                    $('.header-section').addClass('header-active');
                } else {
                    $('.header-section').removeClass('header-active');
                }
            }
        });

        
        // active section menu
        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('nav ul li a');

        window.addEventListener("scroll", ()=> {

            let current = "";
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight; 
                if(pageYOffset >= sectionTop - (sectionHeight)/3) {
                    current = section.getAttribute('id');                 
                }
            })
            navLi.forEach(li => {

                li.classList.remove('active'); 
                if (li.classList.contains(current)) {
                    li.classList.add('active');
                }
            })
        });

        // navbar-collapse
            jQuery("#offcanvasRight .custom-nevbar__nav>li>").click(function(){
                jQuery('#offcanvasRight').offcanvas('hide');
            });

        // scroll top
        $(window).scroll(function () {
            if ($(window).scrollTop() > 500) {
                $('.scrollToTop').addClass('topActive');
            }
            else {
                $('.scrollToTop').removeClass('topActive');
            }
        });

        // magnificPopup
        $('.popup_img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        // data background
        $("[data-background]").each(function () {
            $(this).css(
                "background-image",
                "url(" + $(this).attr("data-background") + ")"
            );
        });

        // reply
        $(".reply").on("click", function () {
            $(this).toggleClass("reply-active");
            $(this).parent().next(".blog-comment-reply").slideToggle();
        });

        // nav-right__search
        $(".nav-right__search-icon").on("click", function () {
            $(this).toggleClass("active");
            $(this).parent().next(".nav-right__search-inner").slideToggle();
        });


        // contact form
        // ajax
        jQuery('#frmContactus').on('submit', function (e) {
            jQuery('#msg').html('');
            jQuery('#submit').html('Please wait....');
            jQuery('#submit').attr('disabled', true);
            jQuery.ajax({
                url: 'mail.php',
                type: 'POST',
                data: jQuery('#frmContactus').serialize(),
                success: function (result) {
                    jQuery('#msg').html(result);
                    jQuery('#submit').html('Send Message');
                    jQuery('#submit').attr('disabled', false);
                    jQuery('#frmContactus')[0].reset();

                    setTimeout(function () {
                        $('.alert-dismissible').fadeOut('slow', function () {
                            $(this).remove();
                        });
                    }, 3000);
                }
            });
            e.preventDefault();
        });

        // Email Subscribe
        jQuery('#frmSubscribe').on('submit', function (e) {
            var emailSubscribe = jQuery("input[name='sMail']").val();
            jQuery('#subscribeMsg').html('');
            jQuery('#emailSubscribe').html('Please wait....');
            jQuery('#emailSubscribe').attr('disabled', true);
            jQuery.ajax({
                url: 'mail.php',
                type: 'POST',
                data: {
                    'subscribes': '',
                    'emailSubscribe': emailSubscribe
                },
                success: function (result) {
                    jQuery('#subscribeMsg').html(result);
                    jQuery('#emailSubscribe').html('Subscribe');
                    jQuery('#emailSubscribe').attr('disabled', false);
                    jQuery('#frmSubscribe')[0].reset();

                    setTimeout(function () {
                        $('.alert-dismissible').fadeOut('slow', function () {
                            $(this).remove();
                        });
                    }, 3000);
                }
            });
            e.preventDefault();
        });

        // dropFiles
        $("#dropFiles").on('dragenter', function (ev) {
            // Entering drop area. Highlight area
            $("#dropFiles").addClass("highlightDropArea");
        });

        $("#dropFiles").on('dragleave', function (ev) {
            // Going out of drop area. Remove Highlight
            $("#dropFiles").removeClass("highlightDropArea");
        });

        $("#dropFiles").on('drop', function (ev) {
            // Dropping files
            ev.preventDefault();
            ev.stopPropagation();
            // Clear previous messages
            $("#messages").empty();
            if (ev.originalEvent.dataTransfer) {
                if (ev.originalEvent.dataTransfer.files.length) {
                    var droppedFiles = ev.originalEvent.dataTransfer.files;
                    for (var i = 0; i < droppedFiles.length; i++) {
                        console.log(droppedFiles[i]);
                        $("#messages").append("<br /> <b>Dropped File </b>" + droppedFiles[i].name);
                        // Upload droppedFiles[i] to server
                    }
                }
            }

            $("#dropFiles").removeClass("highlightDropArea");
            return false;
        });

        $("#dropFiles").on('dragover', function (ev) {
            ev.preventDefault();
        });

        // copyright year
        $("#copyYear").text(new Date().getFullYear());

    });



