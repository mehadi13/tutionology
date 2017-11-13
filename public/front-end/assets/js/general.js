/* ------------------------------------------------------------------------------------------------------------------- *
 *
 * Template Negative - Responsive multipurpose HTML site template
 * Version  1.0
 * Author   Valery Timofeev
 *
 * ------------------------------------------------------------------------------------------------------------------ */

'use strict';


/* ------------------------------------------------------------------------------------------------------------------ *
 * Main IIFE
 * ------------------------------------------------------------------------------------------------------------------ */

$(function($) {

    'use strict';


    /* -------------------------------------------------------------------------------------------------------------- *
     * Variables and constants
     * -------------------------------------------------------------------------------------------------------------- */

    var NAVIGATION_HEIGHT = 60;

    var $body_html = $('body, html'),
        $html = $('html'),
        $body = $('body');


    /* -------------------------------------------------------------------------------------------------------------- *
     * Is Mobile
     * -------------------------------------------------------------------------------------------------------------- */

    var ua_test = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i,
        is_mobile = ua_test.test(navigator.userAgent);

    $html.addClass(is_mobile ? 'mobile' : 'no-mobile');


    /* -------------------------------------------------------------------------------------------------------------- *
     * Affix
     * -------------------------------------------------------------------------------------------------------------- */

    $('.affix').affix({
        offset: 20
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * ScrollSpy
     * -------------------------------------------------------------------------------------------------------------- */

    $body.scrollspy({
        target: '#nav-top',
        offset: NAVIGATION_HEIGHT
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Smooth scrolling
     * -------------------------------------------------------------------------------------------------------------- */

    $('.smooth-scroll:not([href="#"])').click(function(event) {

        event.preventDefault();

        var $this = $(this),
            target = $this.attr('href');

        if (target === 'undefined') return;

        var $target = $(target);
        if ($target.length === 0) return;

        var offset = $target.offset().top || 0;

        $.scrollWindow(offset - NAVIGATION_HEIGHT);

    });

    $.scrollWindow = function(offset) {
        $body_html.animate({ scrollTop: offset }, 750);
    };


    /* -------------------------------------------------------------------------------------------------------------- *
     * Scroll to top
     * -------------------------------------------------------------------------------------------------------------- */

    var $scroll_to_top = $('.scroll-to-top'),
        last_scroll_top = 0;

    $(window).scroll(function () {

        var scroll_top = $(this).scrollTop();

        if (scroll_top > last_scroll_top) {
            $scroll_to_top.removeClass('in');
        } else {
            if (scroll_top > NAVIGATION_HEIGHT) $scroll_to_top.addClass('in');
            else $scroll_to_top.removeClass('in');
        }

        last_scroll_top = scroll_top;
    });

    $scroll_to_top.click(function() {
        $.scrollWindow(0);
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Prevent empty anchors
     * -------------------------------------------------------------------------------------------------------------- */

    $('a[href="#"]').click(function(event) {
        event.preventDefault();
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Appear
     * -------------------------------------------------------------------------------------------------------------- */

    $('.appear-element').appear();

    $body.on('appear', '.appear-element', function () {
        var $this = $(this);
        if ($this.hasClass('appeared')) return;
        $this.addClass('appeared');
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Stellar
     * -------------------------------------------------------------------------------------------------------------- */

    function initStellar() {

        $.stellar('destroy');

        $.stellar({
            responsive: true,
            horizontalOffset: 0,
            verticalOffset: 0,
            horizontalScrolling: false,
            hideDistantElements: false
        });
    }

    // if (!is_mobile) initStellar();


    /* -------------------------------------------------------------------------------------------------------------- *
     * Mask opacity from data
     * -------------------------------------------------------------------------------------------------------------- */

    $('[data-mask-opacity]').each(function() {
        var $this = $(this),
            opacity = $this.data('mask-opacity');
        $this.css('opacity', opacity);
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * ScrollReveal
     * -------------------------------------------------------------------------------------------------------------- */

    window.sr = ScrollReveal();

    $('.reveal').each(function() {

        var $this = $(this),
            config = {
                easing: 'cubic-bezier(.51, .07, .75, .95)',
                mobile: false,
                scale : 1.01
            };

        var data_container = $this.data('reveal-container'),
            data_origin    = $this.data('reveal-origin'),
            data_distance  = $this.data('reveal-distance'),
            data_duration  = $this.data('reveal-duration'),
            data_delay     = $this.data('reveal-delay'),
            data_easing    = $this.data('reveal-easing'),
            data_scale     = $this.data('reveal-scale'),
            data_opacity   = $this.data('reveal-opacity'),
            data_reset     = $this.data('reveal-reset');

        if (typeof data_container !== 'undefined') config['container'] = data_container;
        if (typeof data_origin    !== 'undefined') config['origin']    = data_origin;
        if (typeof data_distance  !== 'undefined') config['distance']  = data_distance;
        if (typeof data_duration  !== 'undefined') config['duration']  = data_duration;
        if (typeof data_delay     !== 'undefined') config['delay']     = data_delay;
        if (typeof data_easing    !== 'undefined') config['easing']    = data_easing;
        if (typeof data_scale     !== 'undefined') config['scale']     = data_scale;
        if (typeof data_opacity   !== 'undefined') config['opacity']   = data_opacity;
        if (typeof data_reset     !== 'undefined') config['reset']     = !!1;

        sr.reveal($this, config);
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * OWLCarousel2
     * -------------------------------------------------------------------------------------------------------------- */

    function initOwlCarousel($carousel) {

        $carousel.owlCarousel('destroy');

        var owl_parameters = {
            dots: false,
            navText: [
                '<i class="icon fa fa-chevron-left"></i>',
                '<i class="icon fa fa-chevron-right"></i>'
            ]
        };

        var data_items = $carousel.data('owl-items') || 1,
            items_count = parseInt(data_items, 10);

        // Set to config
        owl_parameters['items'] = items_count;

        // Disable mouse drag
        if ($carousel.hasClass('owl-no-mousedrag')) owl_parameters['mouseDrag'] = false;
        // Show prev/next navigation
        if ($carousel.hasClass('owl-navigation')) owl_parameters['nav'] = true;
        // Show dots navigation
        if ($carousel.hasClass('owl-pagination')) owl_parameters['dots'] = true;

        // Enable autoplay
        if ($carousel.hasClass('owl-autoplay')) {
            owl_parameters['loop'] = true;
            owl_parameters['autoplay'] = true;
            owl_parameters['autoplayTimeout'] = $carousel.data('owl-autoplay-timeout') || 3000;
        }

        // Responsive Items Count
        var data_items_responsive = $carousel.data('owl-items-responsive');
        if (typeof data_items_responsive !== 'undefined') {

            var arr = data_items_responsive.split(';'),
                responsive = {};

            responsive[1000] = { items: items_count };
            responsive[0] = { items: 1 };

            for (var i = 0, j = arr.length; i < j; i++) {

                var _arr = arr[i].split(':');
                if (typeof _arr[0] === 'undefined' || typeof _arr[1] === 'undefined') continue;

                var max_w = parseInt((_arr[0]).trim(), 10),
                    items_cnt = parseInt((_arr[1]).trim(), 10);

                responsive[max_w] = { items: items_cnt }
            }

            owl_parameters['responsive'] = responsive;
            owl_parameters['responsiveClass'] = true;
        }

        // Custom Animation
        var animate_in = $carousel.attr('data-owl-animate-in'),
            animate_out = $carousel.attr('data-owl-animate-out');

        if (typeof animate_in !== 'undefined') owl_parameters['animateIn'] = animate_in;
        if (typeof animate_out !== 'undefined') owl_parameters['animateOut'] = animate_out;

        // ScrollReveal
        if ($carousel.hasClass('owl-reveal')) owl_parameters['onTranslated'] = sr.animate;

        // Initialize OWL Carousel
        var $owl = $carousel.owlCarousel(owl_parameters);

        // jQuery Mousewheel
        if ($carousel.hasClass('owl-mousewheel')) {

            $owl.on('mousewheel', '.owl-stage', function(e) {
                if (e.deltaY > 0) $owl.trigger('next.owl');
                else $owl.trigger('prev.owl');
                e.preventDefault();
            });
        }
    }

    $('.owl-carousel').each(function() {
        initOwlCarousel($(this));
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Magnific popup
     * -------------------------------------------------------------------------------------------------------------- */

    $('.popup-image').magnificPopup({
        closeBtnInside: true,
        type          : 'image',
        mainClass     : 'mfp-fade',
        gallery       : {
            enabled: true
        }
    });

    $('.popup-iframe').magnificPopup({
        type      : 'iframe',
        mainClass : 'mfp-fade'
    });

    $('.popup-modal').magnificPopup({
        type      : 'inline',
        modal     : true,
        mainClass : 'mfp-fade'
    });

    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Tooltips
     * -------------------------------------------------------------------------------------------------------------- */

    function initTooltips() {
        $('[data-toggle=\'tooltip\']').attr('data-animation', true).tooltip({ container: 'body' });
    }

    // First init
    initTooltips();

    // Makes tooltips work on ajax generated content
    $(document).ajaxStop(initTooltips);


    /* -------------------------------------------------------------------------------------------------------------- *
     * AJAX forms validate
     * -------------------------------------------------------------------------------------------------------------- */

    $('.form-ajax').each(function(){
        $(this).validate({
            submitHandler: function(form) {

                var $submit_button = $(form).find('[type=submit]');
                $submit_button.button('loading');

                $.ajax({

                    type   : 'post',
                    url    : $(form).attr('action') || 'sendmail.php',
                    data   : $(form).serialize(),

                    success: function() {
                        swal('Success!', 'Message sent successfully!', 'success');
                        $submit_button.button('reset');
                    },

                    error: function(){
                        swal('Error!', 'Error sending message!', 'error');
                        $submit_button.button('reset');
                    }
                });

            }
        });
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Blog comment form
     * -------------------------------------------------------------------------------------------------------------- */

    var $widget_blog_leave_a_comment = $('.widget-blog-leave-a-comment');

    $widget_blog_leave_a_comment.on('click', function() {
        $(this).addClass('focus');
    });

    // Close form when clicking outside
    $(document).mouseup(function (e) {
        if ($widget_blog_leave_a_comment.has(e.target).length === 0 &&
            $widget_blog_leave_a_comment.hasClass('focus')) {

            $widget_blog_leave_a_comment.removeClass('focus');
        }
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Finish loading
     * -------------------------------------------------------------------------------------------------------------- */

    $(window).on('load', function() {
        /* Remove preloader */
        $('.preloader').delay(1500).fadeOut('slow');
        setTimeout(function() { $body.addClass('loaded'); }, 1000);
    });


    /* -------------------------------------------------------------------------------------------------------------- *
     * Theme customizer
     * -------------------------------------------------------------------------------------------------------------- */

    /**
     * Animate.CSS classes
     *
     * @site https://daneden.github.io/animate.css/
     * @type object
     */
    var animateCssClasses = {

        'Attention Seekers': [
            { value: 'bounce',     text: 'bounce'     },
            { value: 'flash',      text: 'flash'      },
            { value: 'pulse',      text: 'pulse'      },
            { value: 'rubberBand', text: 'rubberBand' },
            { value: 'shake',      text: 'shake'      },
            { value: 'swing',      text: 'swing'      },
            { value: 'tada',       text: 'tada'       },
            { value: 'wobble',     text: 'wobble'     },
            { value: 'jello',      text: 'jello'      }
        ],

        'Bouncing Entrances': [
            { value: 'bounceIn',      text: 'bounceIn'      },
            { value: 'bounceInDown',  text: 'bounceInDown'  },
            { value: 'bounceInLeft',  text: 'bounceInLeft'  },
            { value: 'bounceInRight', text: 'bounceInRight' },
            { value: 'bounceInUp',    text: 'bounceInUp'    }
        ],

        'Bouncing Exits': [
            { value: 'bounceOut',      text: 'bounceOut'      },
            { value: 'bounceOutDown',  text: 'bounceOutDown'  },
            { value: 'bounceOutLeft',  text: 'bounceOutLeft'  },
            { value: 'bounceOutRight', text: 'bounceOutRight' },
            { value: 'bounceOutUp',    text: 'bounceOutUp'    }
        ],

        'Fading Entrances': [
            { value: 'fadeIn',         text: 'fadeIn'         },
            { value: 'fadeInDown',     text: 'fadeInDown'     },
            { value: 'fadeInDownBig',  text: 'fadeInDownBig'  },
            { value: 'fadeInLeft',     text: 'fadeInLeft'     },
            { value: 'fadeInLeftBig',  text: 'fadeInLeftBig'  },
            { value: 'fadeInRight',    text: 'fadeInRight'    },
            { value: 'fadeInRightBig', text: 'fadeInRightBig' },
            { value: 'fadeInUp',       text: 'fadeInUp'       },
            { value: 'fadeInUpBig',    text: 'fadeInUpBig'    }
        ],

        'Fading Exits': [
            { value: 'fadeOut',         text: 'fadeOut'         },
            { value: 'fadeOutDown',     text: 'fadeOutDown'     },
            { value: 'fadeOutDownBig',  text: 'fadeOutDownBig'  },
            { value: 'fadeOutLeft',     text: 'fadeOutLeft'     },
            { value: 'fadeOutLeftBig',  text: 'fadeOutLeftBig'  },
            { value: 'fadeOutRight',    text: 'fadeOutRight'    },
            { value: 'fadeOutRightBig', text: 'fadeOutRightBig' },
            { value: 'fadeOutUp',       text: 'fadeOutUp'       },
            { value: 'fadeOutUpBig',    text: 'fadeOutUpBig'    }
        ],

        'Flippers': [
            { value: 'flip',     text: 'flip'     },
            { value: 'flipInX',  text: 'flipInX'  },
            { value: 'flipInY',  text: 'flipInY'  },
            { value: 'flipOutX', text: 'flipOutX' },
            { value: 'flipOutY', text: 'flipOutY' }
        ],

        'Lightspeed': [
            { value: 'lightSpeedIn',  text: 'lightSpeedIn'  },
            { value: 'lightSpeedOut', text: 'lightSpeedOut' }
        ],

        'Rotating Entrances': [
            { value: 'rotateIn',          text: 'rotateIn'          },
            { value: 'rotateInDownLeft',  text: 'rotateInDownLeft'  },
            { value: 'rotateInDownRight', text: 'rotateInDownRight' },
            { value: 'rotateInUpLeft',    text: 'rotateInUpLeft'    },
            { value: 'rotateInUpRight',   text: 'rotateInUpRight'   }
        ],

        'Rotating Exits': [
            { value: 'rotateOut',          text: 'rotateOut'          },
            { value: 'rotateOutDownLeft',  text: 'rotateOutDownLeft'  },
            { value: 'rotateOutDownRight', text: 'rotateOutDownRight' },
            { value: 'rotateOutUpLeft',    text: 'rotateOutUpLeft'    },
            { value: 'rotateOutUpRight',   text: 'rotateOutUpRight'   }
        ],

        'Sliding Entrances': [
            { value: 'slideInUp',    text: 'slideInUp'    },
            { value: 'slideInDown',  text: 'slideInDown'  },
            { value: 'slideInLeft',  text: 'slideInLeft'  },
            { value: 'slideInRight', text: 'slideInRight' }
        ],

        'Sliding Exits': [
            { value: 'slideOutUp',   text: 'slideOutUp'    },
            { value: 'slideOutDown', text: 'slideOutDown'  },
            { value: 'slideOutLeft', text: 'slideOutLeft'  },
            { value: 'slideOutRight',text: 'slideOutRight' }
        ],

        'Zoom Entrances': [
            { value: 'zoomIn',      text: 'zoomIn'      },
            { value: 'zoomInDown',  text: 'zoomInDown'  },
            { value: 'zoomInLeft',  text: 'zoomInLeft'  },
            { value: 'zoomInRight', text: 'zoomInRight' },
            { value: 'zoomInUp',    text: 'zoomInUp'    }
        ],

        'Zoom Exits': [
            { value: 'zoomOut',      text: 'zoomOut'      },
            { value: 'zoomOutDown',  text: 'zoomOutDown'  },
            { value: 'zoomOutLeft',  text: 'zoomOutLeft'  },
            { value: 'zoomOutRight', text: 'zoomOutRight' },
            { value: 'zoomOutUp',    text: 'zoomOutUp'    }
        ],

        'Specials': [
            { value: 'hinge',        text: 'hinge'        },
            { value: 'jackInTheBox', text: 'jackInTheBox' },
            { value: 'rollIn',       text: 'rollIn'       },
            { value: 'rollOut',      text: 'rollOut'      }
        ]
    };

    var customizerOptsSelect = {
        type: 'select',
        class: 'form-control'
    };

    var customizerOptsInput = {
        type: 'text',
        class: 'form-control'
    };

    var $customizer = $body.tCustomizer({
        parent: 'body'
    });

    $customizer.createPanel({
        name: 'hero-header',
        title: 'Hero header'
    });

    $customizer.createPanel({
        name: 'parallax',
        title: 'Parallax'
    });

    /*
     * Hero header customization
     * ========================= */

    var gCustomizerHeroHeight = $('.hero').hasClass('hero-80') ? 'hero-80' : 'fullscreen';

    $customizer.addControl('hero-header', $.extend({}, customizerOptsSelect, {

        id: 'customizer-hero-height',
        title: 'Hero height',

        value: gCustomizerHeroHeight,

        data: [
            { value: 'fullscreen', text: 'Fullscreen' },
            { value: 'hero-80',    text: 'Height 80%' }
        ],

        events: {
            change: function() {
                var $hero = $('.hero'),
                    val = $(this).find(':selected').val();
                if (val === 'hero-80') $hero.addClass('hero-80');
                else $hero.removeClass('hero-80');
            }
        }
    }));

    var $hero_carousel = $('.hero-carousel');
    var gCustomizerHeroAnimateIn = $hero_carousel.attr('data-owl-animate-in') || '';

    $customizer.addControl('hero-header', $.extend({}, customizerOptsSelect, {

        id: 'customizer-hero-animate-in',
        title: 'Animate In',

        value: gCustomizerHeroAnimateIn,

        useGroups: true,
        data: animateCssClasses,

        events: {
            change: function() {
                var $hero_carousel = $('.hero-carousel'),
                    val = $(this).find(':selected').val();
                $hero_carousel.attr('data-owl-animate-in', val);
                initOwlCarousel($hero_carousel);
            }
        }
    }));

    var gCustomizerHeroAnimateOut = $hero_carousel.attr('data-owl-animate-out') || '';

    $customizer.addControl('hero-header', $.extend({}, customizerOptsSelect, {

        id: 'customizer-hero-animate-out',
        title: 'Animate Out',

        value: gCustomizerHeroAnimateOut,

        useGroups: true,
        data: animateCssClasses,

        events: {
            change: function() {
                var $hero_carousel = $('.hero-carousel'),
                    val = $(this).find(':selected').val();
                $hero_carousel.attr('data-owl-animate-out', val);
                initOwlCarousel($hero_carousel);
            }
        }
    }));

    /*
     * Parallax customization
     * ======================*/

    var gCustomizerParallaxEnabled = false;

    $customizer.addControl('parallax', $.extend({}, customizerOptsSelect, {

        id: 'customizer-parallax-enable',
        title: 'Parallax',

        value: gCustomizerParallaxEnabled ? 'enabled' : 'disabled',

        data: [
            { value: 'enabled',  text: 'Enabled'  },
            { value: 'disabled', text: 'Disabled' }
        ],

        events: {
            change: function() {

                var val = $(this).val();
                if (val === 'undefined') return;

                if (val === 'disabled') {
                    $.stellar('destroy');
                    gCustomizerParallaxEnabled = false;
                    return;
                }

                gCustomizerParallaxEnabled = true;
                initStellar();
            }
        }
    }));

    $customizer.addControl('parallax', $.extend({}, customizerOptsInput, {

        id: 'customizer-parallax-ratio',
        title: 'Parallax background ratio',

        value: .9,

        events: {
            change: function() {

                var val = $(this).val();
                if (val === 'undefined') return;

                $('.parallax').attr('data-stellar-background-ratio', parseFloat(val));

                if (gCustomizerParallaxEnabled) {
                    initStellar();
                }
            }
        }
    }));

});