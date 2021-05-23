require(['jquery', 'baseowlcarousel', 'accordion'], function () {
    jQuery(document).ready(function () {
        if (jQuery('#home-blogslider').length > 0) {
            jQuery('#home-blogslider').owlCarousel({
                items: 3,
                responsive: {
                    0: {
                        items: 1
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 3
                    },
                    1199: {
                        items: 3
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery('#home-blogslider .item').show();
        }
        if (jQuery('#home-slider').length > 0) {
            jQuery('#home-slider').owlCarousel({
                items: 1,
                responsive: {
                    0: {
                        items: 1
                    },
                    479: {
                        items: 1
                    },
                    639: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1199: {
                        items: 1
                    }
                },
                loop: true,
                autoplay: true,
                autoplayHoverPause: true,
                mouseDrag: true,
                touchDrag: true,
                dots: true,
                nav: false,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery('#home-slider .item').show();
        }

        if (jQuery('.brands-slider').length > 0) {
            jQuery('.brands-slider').owlCarousel({
                items: 5,
                responsive: {
                    0: {
                        items: 2
                    },
                    479: {
                        items: 3
                    },
                    639: {
                        items: 4
                    },
                    767: {
                        items: 4
                    },
                    991: {
                        items: 5
                    },
                    1199: {
                        items: 5
                    }
                },
                autoplay: true,
                dots: false,
                nav: false,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery('.brands-slider .item').show();
        }

        if (jQuery('.catalog-widget-slider').length > 0) {
            jQuery(".catalog-widget-slider").owlCarousel({
                items: 5,
                responsive: {
                    0: {
                        items: 2
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 4
                    },
                    1199: {
                        items: 5
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery(".catalog-widget-slider .slider-li").show();
        }

        if (jQuery('.blog-related-product-slider').length > 0) {
            jQuery(".blog-related-product-slider").owlCarousel({
                items: 4,
                responsive: {
                    0: {
                        items: 2
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 2
                    },
                    767: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },
                    1199: {
                        items: 4
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery(".blog-related-product-slider .slider-li").show();
        }

        if (jQuery('.related-upsell-slider').length > 0) {
            jQuery(".related-upsell-slider").owlCarousel({
                items: 5,
                responsive: {
                    0: {
                        items: 2
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 4
                    },
                    1199: {
                        items: 5
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery(".related-upsell-slider .slider-li").show();
        }

        if (jQuery('.new-products-grid-slider').length > 0) {
            jQuery(".new-products-grid-slider").owlCarousel({
                items: 5,
                responsive: {
                    0: {
                        items: 2
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 4
                    },
                    1199: {
                        items: 5
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery(".new-products-grid-slider .slider-li").show();
        }

        if (jQuery('.new-products-list-slider').length > 0) {
            jQuery(".new-products-list-slider").owlCarousel({
                items: 1,
                responsive: {
                    0: {
                        items: 1
                    },
                    479: {
                        items: 1
                    },
                    639: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1199: {
                        items: 1
                    }
                },
                autoplay: true,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery(".new-products-list-slider .slider-li").show();
        }

        if (jQuery('.home-recent-blog-slider').length > 0) {
            jQuery('.home-recent-blog-slider').owlCarousel({
                items: 3,
                responsive: {
                    0: {
                        items: 1
                    },
                    479: {
                        items: 2
                    },
                    639: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    991: {
                        items: 3
                    },
                    1199: {
                        items: 3
                    }
                },
                autoplay: false,
                dots: false,
                nav: true,
                navText: ['<div class="prev-arrow"></div>', '<div class="next-arrow"></div>']
            });
            jQuery('.home-recent-blog-slider .item').show();
        }

        if (jQuery(".scrollTop").length > 0) {
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('.scrollTop').fadeIn();
                } else {
                    jQuery('.scrollTop').fadeOut();
                }
            });
            jQuery('.scrollTop').click(function () {
                jQuery("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        }

        var windowWidth = jQuery(window).width();
        if (windowWidth < 768) {
            jQuery('.footer-columns .content-main .item .item-inner > .title + .content').hide();
            jQuery(document).on('click', '.footer-columns .content-main .item .item-inner', function () {
                jQuery(this).addClass('active-tab');
                jQuery(this).find('.content').slideDown();
            });
            jQuery(document).on('click', '.footer-columns .content-main .item .item-inner > .content', function (e) {
                e.preventdefault();
                return false;
            });
            jQuery(document).on('click', '.footer-columns .content-main .item .item-inner.active-tab', function () {
                jQuery(this).removeClass('active-tab');
                jQuery(this).find('.content').slideUp();
            });
        }
    });

    if (jQuery('#faqElement').length > 0) {
        jQuery("#faqElement").accordion();
    }
});