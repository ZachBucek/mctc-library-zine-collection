jQuery(document).ready(function($) {

    // DEPRECATED: script is now in slicknav.js file
    // SLICKNAV
    // $(document).ready(function() {
    //     $('.main-nav').slicknav({prependTo:"#mobile-menu"});
    // });

    // SIDEBAR-MOBILE
    $(window).on('load', function mobileSidebar() {
        var viewportWidth = $(window).width();
        if (viewportWidth < 790) {
            $("div.sidebar").removeClass("four columns");
            $("div.static-page").removeClass("eight columns");
            $("div.static-page-search").removeClass("eight columns");
            $("article.archive-posts").removeClass("eight columns");
        }
        else {
            $("div.sidebar").addClass("four columns");
            $("div.static-page").addClass("eight columns");
            $("div.static-page-search").addClass("eight columns");
            $("article.archive-posts").addClass("eight columns");
        }
    });
    $(window).on('resize', function mobileSidebar() {
        var viewportWidth = $(window).width();
        if (viewportWidth < 790) {
            $("div.sidebar").removeClass("four columns");
            $("div.static-page").removeClass("eight columns");
            $("div.static-page-search").removeClass("eight columns");
            $("article.archive-posts").removeClass("eight columns");
        }
        else {
            $("div.sidebar").addClass("four columns");
            $("div.static-page").addClass("eight columns");
            $("div.static-page-search").addClass("eight columns");
            $("article.archive-posts").addClass("eight columns");
        }
    });

    // BACK-TO-TOP
    $(document).ready(function () {
        // SHOW OR HIDE STICKY SCROLL-TO-TOP BUTTON
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('.back-to-top').fadeIn(200);
            }
            else {
                $('.back-to-top').fadeOut(200);
            }
        });
        // ANIMATE SCROLL-TO-TOP
        $('.back-to-top').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 300);
        })
    });

});
// END JQUERY

