require(['jquery', 'cpowlcarousel'], function ($) {
    $(document).ready(function () {
        $(".hb-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1080, 1],
            itemsDesktopSmall: [860, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: [639, 1],
            itemsMobile: [360, 1],
            pagination: true,
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'>"],
            navigation: false,
        });

        $(".hpb-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1080, 3],
            itemsDesktopSmall: [860, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: [639, 2],
            itemsMobile: [479, 1],
            pagination: false,
            navigationText: ['<div class="lft-btn"><i class="fa fa-angle-left"></i></div>', '<div class="rgt-btn"><i class="fa fa-angle-right"></div>'],
            navigation: true,
        });
        $(".htb-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1080, 1],
            itemsDesktopSmall: [860, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: [639, 1],
            itemsMobile: [479, 1],
            pagination: false,
            navigationText: ['<div class="lft-btn"><i class="fa fa-angle-left"></i></div>', '<div class="rgt-btn"><i class="fa fa-angle-right"></div>'],
            navigation: true,
        });
        $(".hbr-slider").owlCarousel({
            items: 5,
            itemsDesktop: [1080, 4],
            itemsDesktopSmall: [860, 3],
            itemsTablet: [768, 3],
            itemsTabletSmall: [639, 3],
            itemsMobile: [479, 2],
            pagination: false,
            navigationText: ['<div class="lft-btn"><i class="fa fa-angle-left"></i></div>', '<div class="rgt-btn"><i class="fa fa-angle-right"></div>'],
            navigation: true,
        });
    });
});