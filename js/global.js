jQuery(document).ready(function($) {
    // adding class fixed in navigation bar

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('.main-navigation').addClass('fixed');
        } else {
            $('.main-navigation').removeClass('fixed');
        }
    });

    // added class on dropdown menu span

    if ($(document).width() < 1200) {
        var $menu_item = $('.menu-item-has-children');

        $menu_item.append('<span class="caret"></span>');

        $('.caret').click(function() {
            $(this).parent().toggleClass('menu-open').siblings().removeClass('menu-open');
        });
    }

    // To top Java Script

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 300) {
            $('#up-btn').addClass('show');
        } else {
            $('#up-btn').removeClass('show');
        }
    });

    $('#up-btn').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });

    $(window).ready(function() {
        $('li .sub_heading').click(function() {
            $(this).parent().toggleClass('active').siblings().removeClass('active');
        });
    });
});