(function($) {
    "use strict";

    var $window = $(window);
    var $body = $('body');


    var styleElems = $('.custom-styles'),
        count = styleElems.length;
    var customStyles = '';
    styleElems.each(function(i) {
        customStyles += $(this).data('styles');
        if (!--count) injectStyles(customStyles);
    });

    function injectStyles(styles) {
        $('head').append('<style type="text/css">' + styles + '</style>');
    }


    function validateCommentForms() {
        $('.comment-form .input-required').each(function() {
            var $that = $(this);
            $that.on('change keyup', function() {
                if ($that.val().length > 0) {
                    $that.parent().removeClass('message-error');
                } else {
                    $that.parent().addClass('message-error');
                }
            });
        });
    }

    function validateContactForms() {
        $('.contact-form .input-required').each(function() {
            var $that = $(this);
            $that.on('keyup change', function() {
                if ($that.val().length > 0) {
                    $that.parent().removeClass('message-error');
                    if (!$that.parents('.c-form').hasClass('active')) {
                        $that.parents('.c-form').addClass('active');
                        $that.parents('.c-form').find('.btn-contact').parent().removeClass('btn-no-active');
                    }
                } else {
                    $that.parent().addClass('message-error');
                }
            });
        });
    }

    function gallerySwipebox() {
        $('.gallery').on('click', '.swipebox', function(e) {
            e.preventDefault();
            var images = [];
            $(this).parent().find('a').each(function() {
                images.push({
                    href: this.href,
                    title: this.title
                });
            });
            if (images.length > 0) {
                $.swipebox(images);
            }
        });
    }

    function initSingleGallerySlider() {
        var sliderSingleGallery = new Swiper('.single-gallery-slider', {
            speed: 750,
            slidesPerView: 1,
            autoplay: false,
            centeredSlides: true,
            loop: true,
            autoHeight: true,
            effect: 'fade',
            fade: {
                crossFade: true
            },
            direction: 'horizontal',
            mousewheelControl: false,
            grabCursor: false,
            slideClass: 'swiper-slide',
            keyboardControl: true,
            nextButton: '.single-gallery-arrows .arrow-next',
            prevButton: '.single-gallery-arrows .arrow-prev',
            onInit: function(swiper) {
                $('.single-gallery-slider .video-slide').each(function(i) {
                    $(this).attr('data-rel', 'video_' + i);
                });
                $('.single-gallery-slider .video-slide').swipebox({
                    autoplayVideos: true
                });

            }
        });
    }

    function initHomeSlider() {
        var transition = $('.homepage-slider1 .home-bg-slider').data('transition');
        var delay = $('.homepage-slider1').data('duration');
        var auto = $('.homepage-slider1').data('auto');
        var slidesCount = $('.homepage-slider1 .single-slide').length;
        var slides = [];
        $('.homepage-slider1 .single-slide').each(function(i, el) {
            var slide = $(this).data('slide');
            slides.push({
                'src': slide
            });
            var text = '';
            i = i + 1;
            text = '<span class="slide-number">' + i + ' <span>of</span> ' + slidesCount + '</span>';
            $('.homepage-slider1 .home-slider-pagination').append(text);

        });
        var timer1;
        var timer2;

        $('.homepage-slider1 .home-slider-container').vegas({
            delay: delay,
            firstTransition: 'zoomOut',
            firstTransitionDuration: 3000,
            transition: transition,
            autoplay: auto,
            slides: slides,
            walk: function(index, slideSettings) {
                if ($('.slider-text').length > 1) {
                    $('.vegas-slide').each(function() {
                        $(this)[0].style['transition-delay'] = '.5s';
                    });

                    $('.slider-text.slide-active').removeClass('slide-active');

                    clearTimeout(timer1);
                    timer1 = setTimeout(function() {
                        $('.slider-text:eq(' + index + ')').addClass('slide-active');
                    }, 300);

                }
                if ($('.slider-text').length == 1) {
                    $('.slider-text').addClass('slide-active');
                }

                $('.homepage-slider1 .home-bg-slider .slide-number').removeClass('slide-active');
                $('.homepage-slider1 .home-bg-slider .slide-number:eq(' + index + ')').addClass('slide-active');
            }
        });

        $('.vegas-timer').appendTo('.home-slider-pagination .progress-slide');

        $('.homepage-slider1 .home-bg-slider').on('click', '.arrow-prev', function() {
            $('.homepage-slider1 .home-slider-container').vegas('previous');
            if ($('.homepage-slider1 .slider-text').length > 1 && $('.homepage-slider1 .home-slider-container').length > 0) {
                $('.homepage-slider1 .slider-text.slide-active').removeClass('slide-active');
            }
        });
        $('.homepage-slider1 .home-bg-slider').on('click', '.arrow-next', function() {
            $('.homepage-slider1 .home-slider-container').vegas('next');
            if ($('.homepage-slider1 .slider-text').length > 1 && $('.homepage-slider1 .home-slider-container').length > 0) {
                $('.homepage-slider1 .slider-text.slide-active').removeClass('slide-active');
            }
        });
    }

    function initHomeSlider2() {
        var slidesCount = $('.homepage-slider2 .swiper-slide').length;
        $('.homepage-slider2 .swiper-slide').each(function(i, el) {
            var text = '';
            i = i + 1;
            text = '<span class="slide-number">' + i + ' <span>of</span> ' + slidesCount + '</span>';
            $('.home-slider-pagination').append(text);
            var progressSlide = 100 / slidesCount;
            $('.home-slider-pagination .progress-slide').css('width', progressSlide + 'px');
        });
        var slidesPerView = '';
        var loop = '';
        var autoplay = '';

        if ($('.slider-centered .swiper-slide').length == 1) {
            loop = false;
            slidesPerView = 1;
        } else {
            loop = true;
            slidesPerView = 'auto';
        }

        if ($('.slider-centered').hasClass('autoplay')) {
            autoplay = $('.homepage-slider2').data('delay');
        } else {
            autoplay = "";
        }

        var timer1;

        var sliderCentered = new Swiper('.slider-centered', {
            speed: 1500,
            slidesPerView: slidesPerView,
            centeredSlides: true,
            simulateTouch: false,
            autoplay: autoplay,
            autoplayDisableOnInteraction: false,
            freeMode: false,
            loop: loop,
            direction: 'horizontal',
            mousewheelControl: false,
            grabCursor: false,
            slideClass: 'swiper-slide',
            keyboardControl: true,
            nextButton: '.home-slider-arrows .arrow-next',
            prevButton: '.home-slider-arrows .arrow-prev',
            onTransitionStart: function(swiper) {
                var active = $('.swiper-slide-active').data('swiper-slide-index');

                $('.active').removeClass('active');
                $('.swiper-slide[data-swiper-slide-index="' + active + '"]').addClass('active');
                var progressSlide = 100 / slidesCount;
                var moveProgress = active * progressSlide;
                $('.home-slider-pagination .progress-slide').css('left', moveProgress + 'px');
                $('.home-bg-slider .slide-number').removeClass('slide-active');
                $('.home-bg-slider .slide-number:eq(' + active + ')').addClass('slide-active');
                if ($('.slider-text').length == slidesCount) {
                    $('.slider-text.slide-active').removeClass('slide-active');
                    clearTimeout(timer1);
                    timer1 = setTimeout(function() {
                        $('.slider-text:eq(' + active + ')').addClass('slide-active');
                    }, 500);
                }
            },
        });
    }

    function hideInfoSlider() {
        if ($('.btn-show-picture').length > 0) {
            $('.btn-show-picture').insertAfter($('.home-content .content'));
        }
        if ($('.btn-show-content').length > 0) {
            $('.btn-show-content').insertAfter($('.home-content .content'));
        }
        $('.home-bg-slider .btn-slider-1').on('click', 'a', function(e) {
            e.preventDefault();
            if ($('.btn-show-picture').hasClass('btn-slider-active')) {
                $('.home-overlay').removeClass('active-overlay');
                $('.btn-show-picture').removeClass('btn-slider-active');
                $('.btn-show-content').addClass('btn-slider-active');
                $('.home-content .content').removeClass('show-content');
            } else {
                $('.home-overlay').addClass('active-overlay');
                $('.btn-show-content').removeClass('btn-slider-active');
                $('.btn-show-picture').addClass('btn-slider-active');
                $('.home-content .content').addClass('show-content');
            }

        });
    }

    function showCornersMobile() {
        $('.btn-info-overlay').on('click', function(e) {
            e.preventDefault();
            $body.toggleClass('no-scroll');
            $('.info-mobile-overlay').toggleClass('open-overlay');
        });
    }

    function initVideo() {
        if ($('.video-wrapper').length > 0) {
            $('.video-wrapper').YTPlayer();

            if ($('.video-toggle').length > 0) {
                $('.video-toggle').on('click', function(e) {
                    e.preventDefault();
                    var $el = $(this);
                    if ($el.data('pause') == $el.text()) {
                        $el.text($el.data('play'));
                        $('.video-wrapper').YTPPause();
                    } else {
                        $('.video-wrapper').YTPPlay();
                        $el.text($el.data('pause'));
                    }
                });
            }
            if ($('.video-mute-toggle').length > 0) {
                $('.video-mute-toggle').on('click', function(e) {
                    e.preventDefault();
                    var $el = $(this);
                    if ($el.data('mute') == $el.text()) {
                        $el.text($el.data('unmute'));
                        $('.video-wrapper').YTPMute();
                    } else {
                        $('.video-wrapper').YTPUnmute();
                        $el.text($el.data('mute'));
                    }
                });
            }
        }
    }
    var windowStartHeight = $window.height();
    var windowStartWidth = $window.width();

    function resizeBackground(height) {
        var bg = $('.home-bg-slider, .home-overlay'),
            navHeight = '';
        bg.height(height - navHeight);
    }
    if (isMobile.any == true) {
        $window.resize(function() {
            var height = '';
            if ($window.width() == windowStartWidth) {
                height = windowStartHeight;
            } else {
                height = $window.height();
            }

            resizeBackground(height);
        });
    }




    function setHeightMosaic() {
        $('.mosaic-item').each(function() {
            var $that = $(this);
            var heightSmall = $that.data('smHeight');
            var heightLarge = $that.data('lgHeight');
            if ($window.width() < 1024) {
                $that.height(heightSmall);
            } else {
                $that.height(heightLarge);
            }
        });
    }


    function openSubnav() {
        var $el = $(this);
        if ($el.data('nav-showed') == '1') {
            return false;
        }
        var $dropdown = $el.find('ul').first();
        $dropdown.velocity('stop').velocity({
            opacity: 1
        }, {
            duration: 200,
            display: 'block',
            complete: function() {
                $el.data('nav-showed', '1');
            }
        });
        var moveLeft = '',
            position = $dropdown.parent().offset(),
            dropdownPosition = position.left;
        dropdownPosition = dropdownPosition - ($dropdown.width() / 2);

        $dropdown.css('margin-left', 0);

        if ((position.left + $dropdown.width()) > $window.width()) {
            moveLeft = (position.left + $dropdown.width()) - $window.width();
        } else {
            moveLeft = '';
        }

        if ($dropdown.length > 0) {
            if ($dropdown.parent().hasClass('first-level')) {
                $dropdown.css('margin-left', ($dropdown.width() / -2) - moveLeft);
            } else {
                if ($dropdown.parent().outerWidth() * 2 + $dropdown.parent().offset().left > $window.width()) {
                    $dropdown.addClass('dropdown-left');
                } else {
                    $dropdown.removeClass('dropdown-left');
                }
            }
        }
    }

    function hideSubnav() {
        var $el = $(this);
        var $dropdown = $el.find('ul').first();
        $dropdown.velocity('stop').velocity({
            opacity: 0
        }, {
            duration: 300,
            display: 'none',
            complete: function() {
                $el.data('nav-showed', '0');
            }
        });
    }

    function initNavCenter() {
        if ($('.nav-classes:not(.nav-right) .nav-icons').length > 0) {
            $('.main-navigation .nav-items').css('padding-right', '50px');
        }
        if ($('.nav-right .nav-icons, .nav-right-all .nav-icons').length > 0) {
            $('.main-navigation .nav-items').css('padding-left', '50px');
        }
        if ($('.main-navigation').hasClass('center-navigation')) {
            var navWidth = $('.nav-center .nav-wrapper').width();
            var logoWidth = $('.nav-center .nav-items .nav-logo').width();
            var sideWidth = (navWidth - logoWidth) / 2;
            sideWidth = sideWidth - 1;
            var logoPosition = $('.nav-center .nav-logo').offset().left;
            $('.nav-center .main-nav-left, .nav-center .main-nav-right').width(sideWidth);
        }
    }

    function openMobileNavigation() {
        $('.btn-mobile-overlay').on('click', function() {
            var $that = $(this);
            if ($('.swiper-container').length > 0) {
                var swiper = $('.swiper-container')[0].swiper;
                if ($that.hasClass('open')) {
                    swiper.stopAutoplay();
                } else {
                    swiper.startAutoplay();
                }
            }
            $body.toggleClass('no-scroll');
            $('.mobile-navbar-helper').toggleClass('open-overlay');
            $('.mobile-navbar-overlay').toggleClass('show-mobile-nav');
        });
    }

    function initFixedNavigation() {
        var navHeight = $('.nav-classes').data('heightFixedNav');
        $('#fixed-nav').height(navHeight);

        if ($body.hasClass('nav-top') && $body.hasClass('nav-home')) {
            var navbarWaypoint = new Waypoint({
                element: $('.page-wrapper > .classic')[0],
                handler: function(direction) {
                    if (direction == 'down') {
                        $('#fixed-nav').addClass('show-fixed-nav');
                    } else {
                        $('#fixed-nav').removeClass('show-fixed-nav');
                    }
                },
                offset: 50,
            });
        } else {
            var navbarWaypoint = new Waypoint({
                element: document.getElementById('nav-helper'),
                handler: function(direction) {
                    if (direction == 'down') {
                        $('#fixed-nav').addClass('show-fixed-nav');
                    } else {
                        $('#fixed-nav').removeClass('show-fixed-nav');
                    }
                },
                offset: -navHeight + 'px',
            });

        }

    }

    function navScrollToAnchor() {
        $('.navigation-top .menu a, .mobile-navbar-overlay .menu-item a, .fixed-nav .menu-item a, a.btn').on('click', function(e) {
            var that_link = $(this),
                link_url = that_link.attr('href'),
                link_anchor = '#' + link_url.replace(/^.*?(#|$)/, '');


            if (link_anchor !== '#' && link_anchor) {
                e.preventDefault();
                var current_url = window.location.href,
                    current_url_hash = window.location.hash,
                    new_url = link_url.replace(/#[^#]*$/, ''),
                    old_url = current_url.replace(/#[^#]*$/, '');
                // case when url+hash 
                if (current_url_hash !== '') {
                    if (new_url == old_url) {
                        window.history.pushState('', '', link_url);
                        toAnchor(link_anchor);
                    } else {
                        window.location.href = link_url;
                    }

                } else {
                    //case when url has no hash
                    if (current_url === link_url) {
                        //scroll
                        toAnchor(link_anchor);
                    } else {
                        var new_url = link_url.replace(/#[^#]*$/, ''),
                            old_url = current_url.replace(/#[^#]*$/, '');
                        if (new_url == old_url) {
                            window.history.pushState('', '', current_url + link_anchor);
                            toAnchor(link_anchor);
                        } else {
                            toAnchor(link_anchor);
                            window.location.href = link_url;
                        }
                    }
                }
            }
        });
    }

    function scrollToAnchor() {
        var anchor = window.location.hash;

        if (anchor !== '') {
            toAnchor(anchor);
        }
    }

    function toAnchor(anchor) {
        if (anchor === '#') {
            return false;
        }
        var fixedNavHeight = '';
        if ($('.fixed-nav').length > 0) {
            fixedNavHeight = $('.fixed-nav').height();
        } else {
            fixedNavHeight = '0';
        }

        if ($('.row-wrapper ' + anchor).length > 0) {

            $('.mobile-navbar-helper').removeClass('open-overlay');
            $('.mobile-navbar-overlay').removeClass('show-mobile-nav');
            $body.removeClass('no-scroll');
            var scrollOffset = $('.row-wrapper ' + anchor).offset().top - fixedNavHeight;
            $("body").velocity("scroll", {
                offset: scrollOffset,
                mobileHA: false,
                easing: [0.645, 0.045, 0.355, 1],
                duration: 1000
            });
        }
    }

    function validateForms() {
        $('.reservation-form .input-required').each(function() {
            var $that = $(this);
            $that.on('keyup change', function() {
                if ($that.val().length > 0) {
                    $that.parent().removeClass('message-error');
                    if (!$that.parents('.bf-form').hasClass('active')) {
                        $that.parents('.bf-form').addClass('active');
                        $that.parents('.bf-form').find('.btn-reservation').parent().removeClass('btn-no-active');
                    }
                } else {
                    $that.parent().addClass('message-error');
                }
            });
        });
    }

    function setRestaurantReservation() {
        var $form = $('.rtb-booking-form');
        $form.find('button').addClass('btn btn-lg btn-dark btn-border-animate');
        $form.find('button').append('<span class="top button-border"></span><span class="left left-bottom button-border"></span><span class="left left-top button-border"></span><span class="bottom bottom-right button-border"></span><span class="bottom bottom-left button-border"></span><span class="right button-border"></span>');
        $form.find('.rtb-textarea.message').append('<div class="border-label"></div>');
        $form.find('fieldset.contact').after($form.find('.rtb-textarea.message'));
        $form.find('.rtb-textarea.message').wrap('<fieldset class="message"></fieldset>');

        $form.find('fieldset').each(function() {
            var $that = $(this);
            var count = $that.find('.rtb-text, .rtb-textarea, .rtb-select, .rtb-checkbox, .rtb-radio, .rtb-confirm').length;
            count = 100 / count;
            $that.find('>div').width(count + '%');
        });
        if ($form.find('.date input[type="hidden"]').val() !== '') {
            $form.find('.date').addClass('active-input');
        } else {
            $form.find('.date').removeClass('active-input');
        }
        $form.find('.rtb-select, .rtb-checkbox, .rtb-radio').each(function() {
            var $that = $(this);
            $that.on('focus', 'select, input', function() {
                $that.addClass('active-border');
            });
            $that.on('blur', 'select, input', function() {
                $that.removeClass('active-border');
            });
        });
        if ($form.find('.add-message').length > 0) {
            $form.find('fieldset.contact').after($form.find('.add-message'));
        } else {
            var styles = {
                position: "relative",
                top: "auto",
                left: "auto"
            };
            $(this).css(styles);
            $form.find('fieldset.message').css(styles);
        }
        $form.find('.rtb-confirm').on('focus', 'label', function() {
            $(this).parent().addClass('active-input');
        });

        $form.find('.rtb-confirm').on('blur', 'label', function() {
            $(this).parent().removeClass('active-input');
        });
        $form.find('fieldset >div').each(function() {
            var $input = $(this);
            if ($input.find('>div').hasClass('rtb-error')) {
                $input.addClass('message-error');
            } else {
                $input.removeClass('message-error');
            }
        });
        $form.find('form').attr({
            novalidate: true
        });
        $form.find('input, select, textarea').each(function() {
            var $input = $(this);
            if ($input.attr('aria-required') === 'true') {
                $input.on('keyup change', function() {
                    if ($input.val().length > 0) {
                        $input.parent().removeClass('message-error');
                        $input.parent().addClass('active-input');
                    } else {
                        $input.parent().addClass('message-error');
                    }
                });
            }
        });
    }



    function changeTeamMember() {
        $('.team-members').each(function() {
            var $memebers = $(this);
            $memebers.find('.team-header').on('click', function() {
                var $that = $(this);
                if ($that.hasClass('active')) {
                    return;
                } else {
                    $that.parents('.team-select').find('.img-wrapper-before').addClass('img-wrapper');
                    $that.parents('.team-select').find('.team-member').removeClass('team-member-active');
                    $that.parents('.team-select').find('.team-members .team-header').removeClass('active');
                    $that.addClass('active');
                    $that.parents('.team-select').find('.team-member:eq(' + $that.index() + ')').addClass('team-member-active');
                    $that.parents('.team-select').find('.team-member .img-wrapper.loaded-img').removeClass('loaded-img').removeClass('img-wrapper');
                    setTimeout(function() {
                        $that.parents('.team-select').find('.team-member:eq(' + $that.index() + ') .img-wrapper').addClass('loaded-img');
                    }, 400);
                    if (window.innerWidth < 1025) {
                        $that.parents('.team-select').velocity('scroll', {
                            'offset': -20
                        });
                    }
                }
            });
        });
    }

    var prefix = (function() {
        var styles = window.getComputedStyle(document.documentElement, ''),
            pre = (Array.prototype.slice
                .call(styles)
                .join('')
                .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
            )[1],
            dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
        return {
            dom: dom,
            lowercase: pre,
            css: '-' + pre + '-',
            js: pre[0].toUpperCase() + pre.substr(1)
        };
    })();

    var $transform = prefix['js'] + 'Transform';
    var parallaxImages = [];
    var parallaxElements = [];

    /**
     *
     * menu images animations
     *
     */


    function showFoodImages() {
        if ($('.food-menu-category').length > 0) {
            $('.food-menu-cat-img').each(function() {
                var parallaxImage = {};
                parallaxImage.element = $(this);
                parallaxImage.parent = $(this).parent('.food-menu-category');
                parallaxImages.push(parallaxImage);

            });
            menuScrollHandler();
            $window.on('scroll', function() {
                requestAnimationFrame(menuScrollHandler);
            });
        }
    }


    var menuScrollHandler = function() {
        $.each(parallaxImages, function(index, parallaxImage) {
            var val = $window.scrollTop() + 150;
            var el = parallaxImage.element;
            var parent = parallaxImage.parent;
            var newVal = val - parent.offset().top;

            if (parent.offset().top <= val && el.height() + newVal <= parent.height()) {
                el[0].style[$transform] = 'translate3d(0, ' + newVal + 'px, 0)';
            } else {
                if (parent.offset().top <= val) {
                    el[0].style[$transform] = 'translate3d(0, ' + (parent.height() - el.height()) + 'px, 0)';
                } else {
                    el[0].style[$transform] = 'translate3d(0, 0, 0)';
                }
            }
        });
    };

    /**
     *
     * images animations
     *
     */


    var animateImages = function() {
        $('.img-wrapper:not(.loaded-img):not(.in-animation)').each(function() {
            var el = this;
            if ($(el).offset().top < $window.scrollTop() + ($window.height() / 10) * 8) {
                $(el).addClass('loaded-img');
            }
        });
    };

    function bindImageAnimations() {
        requestAnimationFrame(animateImages);
        $window.on('scroll', function() {
            requestAnimationFrame(animateImages);
        });
        $window.on('refreshAnimation', function() {
            requestAnimationFrame(animateImages);
        });
    }

    /**
     *
     * text animations
     *
     */


    var animateText = function() {
        $('.animate-text:not(.loaded-text):not(.in-animation)').each(function() {
            var el = this;
            if ($(el).offset().top < $window.scrollTop() + ($window.height() / 10) * 8) {
                $(el).addClass('loaded-text');
            }
        });
    };

    function bindTextAnimations() {
        requestAnimationFrame(animateText);
        $window.on('scroll', function() {
            requestAnimationFrame(animateText);
        });
        $window.on('refreshAnimation', function() {
            requestAnimationFrame(animateText);
        });
    }

    /**
     *
     * mosaic animations
     *
     */

    function arrayShuffle(a) {
        var j, x, i;
        for (i = a.length; i; i--) {
            j = Math.floor(Math.random() * i);
            x = a[i - 1];
            a[i - 1] = a[j];
            a[j] = x;
        }
    }

    function animateMosaic() {
        if ($('.mosaic-item').length > 0) {
            var items = [];
            $('.mosaic-item').each(function() {
                items.push($(this));
            });

            arrayShuffle(items);
            $(items).each(function(i, el) {
                if ($(el).offset().top < $window.scrollTop() + ($window.height() / 10) * 8) {
                    $(el).addClass('mosaic-loaded');
                }
            });
        }
    }

    function bindMosaicAnimations() {
        requestAnimationFrame(animateMosaic);
        $window.on('scroll', function() {
            requestAnimationFrame(animateMosaic);
        });
        $window.on('refreshAnimation', function() {
            requestAnimationFrame(animateMosaic);
        });
    }


    /**
     *
     * Animate header
     *
     */

    function animateHeader() {
        if ($('.home-video-text .slider-text').length > 0) {
            $('.home-video-text .slider-text').addClass('slide-active');
        }
    }


    /**
     *
     * loader animation
     *
     */


    $('.loading-progress').css('width', '50%');

    function showScrollToTop() {
        $('#scroll-up').off('click.scrollTop');
        $('#scroll-up').on('click.scrollTop', function(e) {
            e.preventDefault();
            $body.velocity('scroll', {
                'offset': 0
            });
        });
    }

    function focusedInput() {
        $('.forms-style .mf-input, .rtb-booking-form fieldset .rtb-text:not(.date), .rtb-booking-form fieldset .rtb-textarea, .rtb-booking-form fieldset .rtb-select').each(function() {
            var $that = $(this);

            $that.find('label').append('<span><svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" viewBox="0 0 60 60" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable" ><line id="line_1" x1="0" y1="0" x2="60" y2="60" stroke="#171717" style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;"/><line x1="60" y1="0" x2="0" y2="60" stroke="#171717" style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;"/></svg></span>');

            if ($that.find('input, textarea, select').val() !== "") {
                $that.addClass('active-input');
                if ($that.find('input, textarea, select').val() === "") {
                    $that.find('label span').addClass('clear-input');
                }
            }
            $that.on('focus', 'input, textarea, select', function() {
                $that.addClass('active-input');
                if ($that.find('input, textarea').val() === "") {
                    if ($that.find('label span').hasClass('clear-input')) {
                        $that.find('label span').removeClass('clear-input');
                    }
                }
            });

            $that.on('blur', 'input, textarea, select', function() {
                if ($that.find('input, textarea').val() === "") {
                    $that.removeClass('active-input');
                    if ($that.find('label span').hasClass('clear-input')) {
                        $that.find('label span').removeClass('clear-input');
                    }
                } else {
                    $that.find('label span').addClass('clear-input');
                }
            });

            $that.on('click', '.clear-input', function() {
                $that.find('input, textarea, select').val('');
                var ta = $that.find('input, textarea, select')[0];
                var evt = document.createEvent('Event');
                evt.initEvent('autosize:update', true, false);
                ta.dispatchEvent(evt);
                $that.find('label span').removeClass('clear-input');
            });
        });
    }

    var sharer = {
        socials: {
            'facebook': 'https://www.facebook.com/sharer/sharer.php?u={url}',
            'twitter': 'https://www.twitter.com/share?text={title}',
            'google+': 'https://plus.google.com/share?url={url}',
            'tumblr': 'http://www.tumblr.com/share/link?url={url}&name={title}&description={desc}',
            'pinterest': 'https://pinterest.com/pin/create/bookmarklet/?media={img}&url={url}&is_video=0&description={title}',
        },
        init: function() {
            var that = this;
            $body.on('click', 'a.social-share', function(e) {
                e.preventDefault();
                var winHeight = 300;
                var winWidth = 500;
                var winTop = (screen.height / 2) - (winHeight / 2);
                var winLeft = (screen.width / 2) - (winWidth / 2);
                window.open(this.href, this.title, 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
            });

            $body.on('click', 'a.social-share-self', function(e) {
                e.preventDefault();
                var winHeight = 300;
                var winWidth = 500;
                var winTop = (screen.height / 2) - (winHeight / 2);
                var winLeft = (screen.width / 2) - (winWidth / 2);
                var url = window.location.href;
                var title = document.title;
                var desc = '';
                if ($('meta[property="og:description"]').length > 0) {
                    desc = $('meta[property="og:description"]').attr('content');
                }
                var img = '';
                if ($('meta[property="og:image"]').length > 0) {
                    img = $('meta[property="og:image"]').attr('content');
                }
                var social = $(this).data('social');

                social = that.socials[social].replace("{url}", encodeURI(url))
                    .replace('{title}', title)
                    .replace('{desc}', desc)
                    .replace('{img}', img);
                window.open(social, this.title, 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
            });
        },
    };

    /**
     *
     * Woocommerce
     *
     */
    function appendButton(el, classes, border) {
        $(el).each(function() {
            var $that = $(this),
                btnText = $that.text(),
                borderBtn = '<span class="top button-border"></span><span class="left left-bottom button-border"></span><span class="left left-top button-border"></span><span class="bottom bottom-right button-border"></span><span class="bottom bottom-left button-border"></span><span class="right button-border"></span>';

            if (border !== true) {
                borderBtn = '';
            }
            $that.addClass(classes);
            $that.html('<div class="btn-text">' + btnText + '<div>' + borderBtn);
        });
    }

    function changeButtonClass() {
        appendButton('.marco-single-product .add_to_cart_button', 'btn btn-sm btn-light btn-border-animate', true);
        appendButton('.single_add_to_cart_button', 'btn btn-md btn-dark btn-border-animate', true);
        appendButton('.woocommerce-message .button, .woocommerce-Message .button, .woocommerce-MyAccount-content .edit, .return-to-shop .button, .woocommerce .wc-backward.button', 'btn btn-xs btn-dark btn-border-animate', true);
        appendButton('.woocommerce-MyAccount-content .order-actions .button', 'btn btn-xs btn-dark btn-solid', false);
        $('.lost_reset_password .button').wrap('<div class="btn btn-sm btn-dark btn-border-animate"></div>').after('<span class="top button-border"></span><span class="left left-bottom button-border"></span><span class="left left-top button-border"></span><span class="bottom bottom-right button-border"></span><span class="bottom bottom-left button-border"></span><span class="right button-border"></span>');
        $('.woocommerce-product-search').each(function() {
            var $that = $(this);
            $that.find('input[type="submit"]').replaceWith('<button type="submit">');
            $that.find('button').append('<svg class="icon icon-search" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" x="0px" y="0px" viewBox="0 0 483.083 483.083" xml:space="preserve"><path d="M332.74,315.35c30.883-33.433,50.15-78.2,50.15-127.5C382.89,84.433,298.74,0,195.04,0S7.19,84.433,7.19,187.85S91.34,375.7,195.04,375.7c42.217,0,81.033-13.883,112.483-37.4l139.683,139.683c3.4,3.4,7.65,5.1,11.9,5.1s8.783-1.7,11.9-5.1c6.517-6.517,6.517-17.283,0-24.083L332.74,315.35z M41.19,187.85C41.19,103.133,110.04,34,195.04,34c84.717,0,153.85,68.85,153.85,153.85S280.04,341.7,195.04,341.7S41.19,272.567,41.19,187.85z"></path></svg>')
        });
    }

    function addMobileHeaderToCart() {
        $('.woocommerce-cart .shop_table.cart tbody td, .woocommerce-account .shop_table.my_account_orders tbody td').each(function() {
            var $that = $(this),
                headerText = $that.data('title');
            if (typeof headerText != 'undefined') {
                $that.prepend('<div class="mobile-header hide-for-medium">' + headerText + '</div>');
            }
        });
    }

    function addSmallCart() {
        $('body').on('added_to_cart', function(e) {
            $('.add-to-cart-button').each(function() {
                var that = $(this);
                var text = that.text();
                var addedText = that.data('added');
                if (that.hasClass('added')) {
                    that.text(addedText);
                    setTimeout(function() {
                        that.removeClass('added');
                        that.text(text);
                    }, 3000);
                }
            });

            $('.cart-icon').velocity({
                opacity: 0,
                translateY: -10
            }, {
                easing: [0.23, 1, 0.32, 1]
            }).velocity({
                opacity: 1,
                translateY: 0
            });
            // if(mobile || ipad || $(window).width() < 991) {
            // 	$('#mobile-added-to-cart').show(0).velocity({opacity: 1}).delay(2000).velocity({opacity:0});
            // }
        });
        $('.cart-icon').click(function() {
            $('.cart-offcanvas').addClass('show-cart-offcanvas');
            $('.cart-overlay').addClass('show-cart-overlay');
        });
        $('.cart-offcanvas-close').click(function() {
            $('.cart-offcanvas').removeClass('show-cart-offcanvas');
            $('.cart-overlay').removeClass('show-cart-overlay');
        });
    }

    $(document).ready(function() {


        $(document.body).on('updated_wc_div', function() {
            changeButtonClass();
        });


        $('.wpb_text_column').addClass('animate-text');
        $('.blog-search').on('click', '.search-icon', function(e) {
            e.preventDefault();
            $('.blog-search').toggleClass('active-search');
        });
        validateCommentForms();
        validateContactForms();
        gallerySwipebox();
        initSingleGallerySlider();
        $('.gallery-filters-list').on('click', 'a', function(e) {
            e.preventDefault();
            var $that = $(this);
            if (!$that.parent().hasClass('active-filter')) {
                $('.gallery-filters-list li').removeClass('active-filter');
                $that.parent().addClass('active-filter');
            }
        });
        var gutter = $('.gallery .gallery-container').data('gutter');
        $('.gallery-grid .marco-gallery-item').css('padding', gutter);
        $('.gallery-grid .gallery-container').css('margin-top', -gutter);
        $('.gallery-grid .gallery-container').css('margin-bottom', -gutter);
        $('.gallery-grid .gallery-container').css('padding', '0 ' + gutter + 'px');

        $('.gallery-container .gallery-load-more a').click(function(e) {
            e.preventDefault();
            $('.gallery-container .gallery-load-more-content .loaded-img').removeClass('loaded-img');
            setTimeout(function() {
                $('.gallery-container .gallery-load-more').before($('.gallery-load-more-content').html());
                $window.trigger('scroll');
            }, 100);
        });

        changeTeamMember();
        $('.team-select').each(function() {
            var $that = $(this);
            $that.find('.team-member').first().addClass('team-member-active');
            $that.find('.team-members .team-header').first().addClass('active');
            var count = $that.find('.team-members .team-header').length;
            if (count > 1 && count < 4) {
                var width = 100 / count;
                width = width + '%';
                $that.find('.team-members .team-header').css('width', width);
                $that.find('.team-members .team-header').css('text-align', 'center');
            }
            if (count == 1) {
                $that.find('.team-members').remove();
            }
            if (count >= 4) {
                $that.find('.team-members .team-header').css('width', '25%');
            }
        });

        initHomeSlider();
        initHomeSlider2();
        hideInfoSlider();
        initVideo();
        showCornersMobile();
        if (isMobile.any == true) {
            resizeBackground(windowStartHeight);
        }
        $('.home-slider-languages li').on('click', 'a', function() {
            $('.home-slider-languages li a').removeClass('active');
            $(this).addClass('active');
        });
        $('.food-menu-standard .food-menu-container').masonry({
            columntWidth: '.grid-sizer',
            itemSelector: '.food-menu-category',
            transitionDuration: 0,
            hiddenStyle: {},
            visibleStyle: {}
        });
        setHeightMosaic();
        openMobileNavigation();
        initFixedNavigation();
        navScrollToAnchor();
        $('.woocommerce-product-gallery .woocommerce-product-gallery__image a').swipebox();

        $('.desktop-menu .menu-item-has-children').hover(openSubnav, hideSubnav);
        $('.desktop-menu > .menu-item-has-children').addClass('first-level');

        if ($body.hasClass('nav-light-text')) {
            $('.nav-logo-dark').hide();
            $('.nav-logo-light').css('opacity', 1);
        }
        if ($body.hasClass('nav-dark-text')) {
            $('.nav-logo-light').hide();
            $('.nav-logo-dark').css('opacity', 1);
        }

        validateForms();
        setRestaurantReservation();
        focusedInput();
        showScrollToTop();
        $('.gallery-content-lightbox').swipebox();
        $('.img-content-lightbox').swipebox();
        sharer.init();
        if ($('.page-wrapper .page-wrapper').length > 0) {
            if ($('.page-wrapper .page-wrapper').height() == 0 && $('body > .footer').length == 0) {
                $body.css('overflow', 'hidden');
            }
        }
        autosize(document.querySelector('textarea'));
        $('.no-animation .img-wrapper').removeClass('img-wrapper');

        changeButtonClass();
        addMobileHeaderToCart();
        addSmallCart();

        $('.marco-parallax').each(function() {
            var $that = $(this);
            var speed = $that.data('marcoParallax');
            var video = null;
            if (speed > 1) {
                speed = speed / 10;
            }
            if ($that.data('video')) {
                video = $that.data('video');
            }
            if (speed != 1 || video) {
                $that.jarallax({
                    speed: speed,
                    videoSrc: video,
                });
            }

        })
        // console.log(document.body.scrollHeight);
    });

    $window.on('resize', function() {
        if ($('html').hasClass('map-ready')) {
            initMap();
        }
        if ($('.swiper-container').length > 0) {
            var swiper = $('.swiper-container')[0].swiper;
            swiper.stopAutoplay();
            swiper.startAutoplay();
        }
        setHeightMosaic();
        initNavCenter();
    });

    $window.load(function() {
        initNavCenter();
        setTimeout(function() {
            scrollToAnchor();
        }, 500);
        $('.loading-progress').css('width', '100%');
        showFoodImages();

        $('.loading-progress').css('width', '100%');
        $('.loading-wrapper').velocity({
            opacity: 0
        }, {
            delay: 200,
            duration: 600,
            complete: function() {
                $body.addClass('content-loaded');
                $(this).remove();
                bindMosaicAnimations();
                bindImageAnimations();
                bindTextAnimations();
                animateHeader();
                $window.trigger('content-loaded');
            }
        });

    });
    $(window).on('refreshAnimation', function() {
        showFoodImages();
    });

})(jQuery);



document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelectorAll('#map').length > 0) {
        if (document.querySelector('html').lang)
            lang = document.querySelector('html').lang;
        else
            lang = 'pl';

        var js_file = document.createElement('script');
        js_file.type = 'text/javascript';
        js_file.src = 'https://maps.googleapis.com/maps/api/js?callback=initMap&language=' + lang;
        document.getElementsByTagName('body')[0].appendChild(js_file);
        document.getElementsByTagName('html')[0].classList += ' map-ready ';
    }
});

var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 51.104411,
            lng: 17.01300
        },
        zoom: 15
    });
}

//Request animation frame polyfill
! function() {
    for (var a = 0, b = ["ms", "moz", "webkit", "o"], c = 0; c < b.length && !window.requestAnimationFrame; ++c) window.requestAnimationFrame = window[b[c] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[b[c] + "CancelAnimationFrame"] || window[b[c] + "CancelRequestAnimationFrame"];
    window.requestAnimationFrame || (window.requestAnimationFrame = function(b) {
        var d = (new Date).getTime(),
            e = Math.max(0, 16 - (d - a)),
            f = window.setTimeout(function() {
                b(d + e)
            }, e);
        return a = d + e, f
    }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(a) {
        clearTimeout(a)
    })
}();