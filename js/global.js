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

    // Scroll Effects Java Script

    $(window).ready(function() {
        var $class = $('.section_title, section .column, .section_three .content, section .row figure, section .col-row, .contact-heading, .column-content address p, .column-content .social-menu, .section_about_three .column-content, .section_about_two .column-content ');
        var height = $(window);

        $(window).scroll(function() {
            var web_height = height.height();
            var web_top = height.scrollTop();
            var web_bottom = (web_height + web_top);

            $.each($class, function() {
                var col = $(this);
                var col_height = col.outerHeight();
                var col_top = col.offset().top;
                var col_bottom = (col_height + col_top);

                if ((col_top >= web_top) && (col_bottom <= web_bottom)) {
                    col.addClass('view');
                }
            });
        });
    });
});