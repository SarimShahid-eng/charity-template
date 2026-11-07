// js Document



(function($) {
    "use strict";

      //-------------- Click event to scroll to top
      $(window).on('scroll', function (){
        if ($(this).scrollTop() > 200) {
          $('.scroll-top').fadeIn();
        } else {
          $('.scroll-top').fadeOut();
        }
      });
      $('.scroll-top').on('click', function() {
        $('html, body').animate({scrollTop : 0});
        return false;
      });

      // --------------------- Add .active class to current navigation based on URL
      var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
      $(".navbar-nav > li  a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
      $(this).addClass("active");
      // $(this).parent("li").addClass("active");
      })


        // ----------------------------- Counter Function
        var timer = $('.counter');
        if(timer.length) {
          $('.counter').counterUp({
            delay: 10,
            time: 1200,
          });
        }

        // ------------------------ Navigation Scroll
        $(window).on('scroll', function (){   
          var sticky = $('.sticky-menu'),
          scroll = $(window).scrollTop();
          if (scroll >= 300) sticky.addClass('fixed');
          else sticky.removeClass('fixed');

        });


      // -------------------- Remove Placeholder When Focus Or Click
        $("input,textarea").each( function(){
            $(this).data('holder',$(this).attr('placeholder'));
            $(this).on('focusin', function() {
                $(this).attr('placeholder','');
            });
            $(this).on('focusout', function() {
                $(this).attr('placeholder',$(this).data('holder'));
            });     
        });



        // ------------------------ Feedback Slider Two
      if($(".banner-slider").length) {
        $('.banner-slider').slick({
            dots: false,
            arrows: true,
            prevArrow: $('.prev_c'),
            nextArrow: $('.next_c'),
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            fade: true,
            autoplay: true,
            autoplaySpeed: 6000,
            focusOnSelect: true,
            pauseOnHover: false,
          });

          $('.banner-slider').slickAnimation();
      }




      // ------------------------ Causes Slider One
      if($(".causes-slider-one").length) {
        $('.causes-slider-one').slick({
            dots: true,
            arrows: false,
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1
                }
              }
            ]
          });
      }

      // ------------------------ Event Slider One
      if($(".event-slider-one").length) {
        $('.event-slider-one').slick({
            dots: false,
            arrows: false,
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
              {
                breakpoint: 1400,
                settings: {
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1
                }
              }
            ]
          });
      }

      // ------------------------ Event Text Slider One
      if($(".event-text-slider").length) {
        $('.event-text-slider').slick({
            dots: false,
            arrows: false,
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 4
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2
                }
              }
            ]
          });
      }


      // ------------------------ Feedback Slider One
      if($(".feedback-slider-one").length) {
        $('.feedback-slider-one').slick({
            dots: false,
            arrows: true,
            prevArrow: $('.prev_a'),
            nextArrow: $('.next_a'),
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1
                }
              }
            ]
          });
      }

      // ------------------------ Feedback Slider Two
      if($(".feedback-slider-two").length) {
        $('.feedback-slider-two').slick({
            dots: false,
            arrows: true,
            prevArrow: $('.prev_b'),
            nextArrow: $('.next_b'),
            lazyLoad: 'ondemand',
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1
                }
              }
            ]
          });
      }


        // --------------------------------- Contact Form
          // init the validator
          // validator files are included in the download package
          // otherwise download from http://1000hz.github.io/bootstrap-validator

          if($("#contact-form").length) {
            $('#contact-form').validator();
            // when the form is submitted
            $('#contact-form').on('submit', function (e) {

                // if the validator does not prevent form submit
                if (!e.isDefaultPrevented()) {
                    e.preventDefault();
                    var $form = $(this);
                    var $btn  = $form.find('button[type="submit"], button.btn-one').first();
                    var showAlert = function (type, text) {
                        var box = '<div class="alert alert-' + type + '">' + $('<div>').text(text).html() + '</div>';
                        $form.find('.messages').html(box);
                    };

                    $btn.prop('disabled', true);

                    // POST to the Laravel route defined in the form's action attribute
                    $.ajax({
                        type: "POST",
                        url: $form.attr('action'),
                        data: $form.serialize(),
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Accept': 'application/json'
                        },
                        success: function (data) {
                            showAlert(data.type || 'success', data.message || 'Thank you!');
                            if ((data.type || 'success') === 'success') { $form[0].reset(); }
                        },
                        error: function (xhr) {
                            var msg = 'There was an error while submitting the form. Please try again later.';
                            if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                                var first = Object.keys(xhr.responseJSON.errors)[0];
                                msg = xhr.responseJSON.errors[first][0];
                            } else if (xhr.status === 429) {
                                msg = 'Too many attempts. Please wait a minute and try again.';
                            } else if (xhr.status === 419) {
                                msg = 'Your session has expired. Please refresh the page and try again.';
                            }
                            showAlert('danger', msg);
                        },
                        complete: function () { $btn.prop('disabled', false); }
                    });
                    return false;
                }
            });
          }


          // ------------------------------- Scroll Animation
          var sall = $ ("[data-sal]");
          if(sall.length) {
            sal({
              threshold: 0.01,
            });
          }

$(window).on ('load', function (){ // makes sure the whole site is loaded

// -------------------- Site Preloader
        $('#ctn-preloader').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});




        
// ------------------------------------- Fancybox
        var fancy = $ ("[data-fancybox]");
        if(fancy.length) {
          Fancybox.bind("[data-fancybox]", {
            // Your custom options
          });
        }


    });  //End On Load Function


})(jQuery);