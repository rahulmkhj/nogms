"use strict";
var flg = "0";
$(document).ready(function() {
    // feather icon start
    feather.replace();
    // feather icon end
    // remove pre-loader start
    setTimeout(function() {
        $('.loader-bg').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 400);
    // remove pre-loader end
    if (!$('body').hasClass('pc-horizontal')) {
        addscroller();
    }
    if ($('.pc-horizontal').hasClass('navbar-overlay')) {
        addscroller();
    }
    $('.hamburger:not(.is-active)').on('click', function() {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
        } else {
            $(this).addClass('is-active');
        }
    });
    // Menu overlay layout start
    $("#overlay-menu").on('click', function() {
        menuclick();
        if ($(".pc-sidebar").hasClass('pc-over-menu-active')) {
            rmovermenu();
        } else {
            $(".pc-sidebar").addClass('pc-over-menu-active');
            $(".pc-sidebar").append('<div class="pc-menu-overlay"></div>');
            $(".pc-menu-overlay").on('click', function() {
                rmovermenu();
                $('.hamburger').removeClass('is-active');
            });
        }
    });
    // Menu overlay layout end
    // vertical-nav-toggle start
    $("#vertical-nav-toggle").on('click', function() {
        console.log("123");
        // menuclick();
        if ($("body").hasClass('minimenu')) {
            $("body").removeClass('minimenu');
            menuclick();
        } else {
            $("body").addClass('minimenu');
            $('.pc-navbar li:not(.pc-trigger) .pc-submenu').removeAttr('style');
            collapseedge();
        }
    });
    // vertical-nav-toggle end
    // Menu collapse click start
    $("#mobile-collapse").on('click', function() {
        if (!$('body').hasClass('pc-horizontal')) {
            menuclick();
        }
        if ($(".pc-sidebar").hasClass('mob-sidebar-active')) {
            rmmenu();
        } else {
            $(".pc-sidebar").addClass('mob-sidebar-active');
            $(".pc-sidebar").append('<div class="pc-menu-overlay"></div>');
            $(".pc-menu-overlay").on('click', function() {
                rmmenu();
                $('.hamburger').removeClass('is-active');
            });
        }
    });
    // Menu collapse click end

    // Menu collapse click start
    $(".pc-horizontal #mobile-collapse").on('click', function() {
        if ($(".topbar").hasClass('mob-sidebar-active')) {
            rmmenu();
        } else {
            $(".topbar").addClass('mob-sidebar-active');
            $(".topbar").append('<div class="pc-menu-overlay"></div>');
            $(".pc-menu-overlay").on('click', function() {
                rmmenu();
                $('.hamburger').removeClass('is-active');
            });
        }
    });
    // Menu collapse click end
    // mobile header click start
    $("#header-collapse").on('click', function() {
        if ($(".pc-header:not(.pc-mob-header)").hasClass('mob-header-active')) {
            rmthead();
        } else {
            $(".pc-header:not(.pc-mob-header)").addClass('mob-header-active');
            $(".pc-header:not(.pc-mob-header)").append('<div class="pc-md-overlay"></div>');
            $(".pc-md-overlay").on('click', function() {
                rmthead();
            });
        }
    });
    $("#headerdrp-collapse").on('click', function() {
        if ($(".pc-header:not(.pc-mob-header) .pc-mob-drp").hasClass('mob-drp-active')) {
            rmdrp();
        } else {
            $(".pc-header:not(.pc-mob-header) .pc-mob-drp").addClass('mob-drp-active');
            $(".pc-header:not(.pc-mob-header)").append('<div class="pc-md-overlay"></div>');
            $(".pc-md-overlay").on('click', function() {
                rmdrp();
            });
        }
    });
    // mobile header click end
    // Horizontal menu click js start
    $('.pc-horizontal .topbar .pc-navbar>li>a').on('click', function(e) {
        setTimeout(function() {
            $(this).parents('.dropdown').children('.dropdown-menu').removeAttr("style");
        }, 1000);
    });
    // Horizontal menu click js end
    // Material form start
    $(".form-v2 .form-control").each(function() {
        formmat($(this));
    });
    $('.form-v2 .form-control').on('blur', function() {
        formmat($(this));
    });
    $('.form-v2 .form-control').on('focus', function() {
        $(this).parent('.form-group').addClass("fill");
    });

    function formmat(e) {
        var $temp = 0;
        try {
            $temp = e.attr('placeholder').length;
        } catch (err) {
            $temp = 0;
        }
        if (e.val().length > 0) {
            e.parent('.form-group').addClass("fill");
        } else {
            e.parent('.form-group').removeClass("fill");
        }
    }
    // Material form end
    if ($('body').hasClass('pc-horizontal')) {
        horizontalmobilemenuclick();
    }
    if ($('body').hasClass('minimenu')) {
        collapseedge();
    }
});

function horizontalmobilemenuclick() {
    var vw = $(window)[0].innerWidth;
    $(".pc-navbar li").off("click");
    $(".pc-navbar > li:not(.pc-caption)").on('click', function() {
        $(this).children('.pc-submenu').removeAttr("style");
        if ($(this).hasClass('pc-trigger')) {
            $(this).removeClass('pc-trigger');
        } else {
            $('li.pc-trigger').removeClass('pc-trigger');
            $(this).addClass('pc-trigger');
        }
    });
    $(".pc-navbar > li:not(.pc-caption) li").on('click', function(e) {
        e.stopPropagation();
        if ($(this).hasClass('pc-trigger')) {
            $(this).removeClass('pc-trigger');
        } else {
            $(this).parent('.pc-submenu').find('li.pc-trigger').removeClass('pc-trigger');
            $(this).addClass('pc-trigger');
        }
    });
}

// Menu click start
function addscroller() {
    rmmini();
    menuclick();
    // Menu scrollbar start
    if ($('.navbar-content')[0]) {
        var px = new PerfectScrollbar('.navbar-content', {
            wheelSpeed: .5,
            swipeEasing: 0,
            suppressScrollX: !0,
            wheelPropagation: 1,
            minScrollbarLength: 40,
        });
    }
    // Menu scrollbar end
}
// Menu click start
function menuclick() {
    var vw = $(window)[0].innerWidth;
    $(".pc-navbar li").off("click");
    if (!$('body').hasClass('minimenu')) {
        $('.pc-navbar li:not(.pc-trigger) .pc-submenu').slideUp();
        $(".pc-navbar > li:not(.pc-caption)").on('click', function() {
            // $(this).children('.pc-submenu').removeAttr("style");
            if ($(this).hasClass('pc-trigger')) {
                $(this).removeClass('pc-trigger');
                $(this).children('.pc-submenu').slideUp('fast');
            } else {
                $('li.pc-trigger').children('.pc-submenu').slideUp('fast');
                $('li.pc-trigger').removeClass('pc-trigger');
                $(this).addClass('pc-trigger');
                $(this).children('.pc-submenu').slideDown('fast');
            }
        });
        $(".pc-navbar > li:not(.pc-caption) li").on('click', function(e) {
            e.stopPropagation();
            if ($(this).hasClass('pc-trigger')) {
                $(this).removeClass('pc-trigger');
                $(this).children('.pc-submenu').slideUp('fast');
            } else {
                $(this).parent('.pc-submenu').find('li.pc-trigger').children('.pc-submenu').slideUp('fast');
                $(this).parent('.pc-submenu').find('li.pc-trigger').removeClass('pc-trigger');
                $(this).addClass('pc-trigger');
                $(this).children('.pc-submenu').slideDown('fast');
            }
        });
    }
}

function rmdrp() {
    $(".pc-header:not(.pc-mob-header) .pc-mob-drp").removeClass('mob-drp-active');
    $(".pc-header:not(.pc-mob-header) .pc-md-overlay").remove();
}

function rmthead() {
    $(".pc-header:not(.pc-mob-header)").removeClass('mob-header-active');
    $(".pc-header:not(.pc-mob-header) .pc-md-overlay").remove();
}

function rmmenu() {
    $(".pc-sidebar").removeClass('mob-sidebar-active');
    $(".topbar").removeClass('mob-sidebar-active');
    $(".pc-sidebar .pc-menu-overlay").remove();
    $(".topbar .pc-menu-overlay").remove();
}

function rmovermenu() {
    $(".pc-sidebar").removeClass('pc-over-menu-active');
    $(".topbar").removeClass('mob-sidebar-active');
    $(".pc-sidebar .pc-menu-overlay").remove();
    $(".topbar .pc-menu-overlay").remove();
}

function rmactive() {
    $(".pc-sidebar .pc-navbar li").removeClass("active");
    $(".pc-sidebar .pc-navbar li").removeClass("pc-trigger");
    $(".topbar .dropdown").removeClass("show");
    $(".topbar .dropdown-menu").removeClass("show");
    $(".pc-sidebar .pc-menu-overlay").remove();
    $(".topbar .pc-menu-overlay").remove();
}

function rmmini() {
    var vw = $(window)[0].innerWidth;
    if (vw <= 1024) {
        if ($('body').hasClass('minimenu')) {
            $('body').removeClass('minimenu');
            flg = "1";
            2
        }
    } else {
        if (vw > 1024) {
            if (flg == "1") {
                $('body').addClass('minimenu');
                flg = "0";
            }
        }
    }
}
$(".email-more-link").on('click', function(e) {
    $(this).children('span').slideToggle(1);
});

// Menu click end
$(window).resize(function() {
    if (!$('body').hasClass('pc-horizontal')) {
        rmmini();
        menuclick();
    }
    if ($('body').hasClass('pc-horizontal')) {
        rmactive();
    }
});
$(window).scroll(function() {});
$(window).on('load', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
});
// active menu item list start
$(".pc-sidebar .pc-navbar a").each(function() {
    var pageUrl = window.location.href.split(/[?#]/)[0];
    if (this.href == pageUrl && $(this).attr('href') != "") {
        $(this).parent('li').addClass("active");
        $(this).parent('li').parent().parent('.pc-hasmenu').addClass("active").addClass("pc-trigger");
        $(this).parent('li').parent().parent('.pc-hasmenu').parent().parent('.pc-hasmenu').addClass("active").addClass("pc-trigger");

        $(this).parent('li').parent().parent('.sidelink').addClass("active");
        $(this).parents('.pc-tabcontent').addClass('active');
        if ($("body").hasClass('tab-layout')) {
            var temp = $('.pc-tabcontent.active').attr('data-value');
            $('.tab-sidemenu > li').removeClass('active');
            $('.tab-sidemenu > li > a[data-cont="' + temp + '"]').parent("li").addClass('active');
        }
    }
});

// Menu click for tab Layout start
$('.tab-sidemenu > ul >li').on('click', function() {
    var tempcont = $(this).children('a').attr('data-cont');
    $('.navbar-content .pc-tabcontent').removeClass('active');
    $('.tab-sidemenu > ul > li').removeClass('active');
    $(this).addClass('active');
    $('.navbar-content .pc-tabcontent[data-value="' + tempcont + '"]').addClass('active');
});
// Menu click for tab Layout end
// nested Layout start
$(".pc-toggle-sidemenu").click(function() {
    if (!$(".pc-toggle-sidemenu").hasClass('active')) {
        $(".pc-sideoverlay,.page-sidebar,.pc-toggle-sidemenu").addClass("active");
    } else {
        $(".pc-sideoverlay,.page-sidebar,.pc-toggle-sidemenu").removeClass("active");
    }
});
$(".pc-sideoverlay, .pc-toggle-sidemenu.active").click(function() {
    $(".pc-sideoverlay,.page-sidebar,.pc-toggle-sidemenu").removeClass("active");
});
// nested Layout end
// topbar Layout start
if ($('body').hasClass('layout-topbar')) {
    $(".pc-header .list-unstyled > .dropdown").hover(function() {
        $(this).children(".dropdown-menu").addClass("show");
    }, function() {
        $(this).children(".dropdown-menu").removeClass("show");
    });
}
// topbar Layout end
// horizontal submenu edge start
if ($('body').hasClass('pc-horizontal')) {
    var hpx;
    var docH = $(window).height();
    var docW = $(window).width();

    if (docW > 1024) {
        $('.pc-horizontal .topbar .pc-submenu .pc-hasmenu').hover(function() {
            var elm = $(this).children(".pc-submenu");
            var off = elm.offset();
            var l = off.left;
            var t = off.top;
            var w = elm.width();
            var h = elm.height();
            var scrw = $(window).scrollTop();

            var edgepos = (l + w <= docW);
            if (!edgepos) {
                elm.addClass("edge");
            }
            var isEntirelyVisible = (t + h <= docH);
            if (!isEntirelyVisible) {
                var th = t - scrw;
                elm.addClass("scroll-menu");
                elm.css('max-height', 'calc(100vh - ' + th + 'px)');
                hpx = new PerfectScrollbar('.scroll-menu', {
                    wheelSpeed: .5,
                    swipeEasing: 0,
                    suppressScrollX: !0,
                    wheelPropagation: 1,
                    minScrollbarLength: 40,
                });
            }
        }, function() {
            hpx.destroy();
            $('.scroll-menu').removeAttr('style');
            $('.scroll-menu').removeClass('scroll-menu');
        });
    }
}
// horizontal submenu edge end
// Collapse meni edge start
function collapseedge() {
        var hpx;
        var docH = $(window).height();
        var docW = $(window).width();
        if (docW > 1024) {
            $('.minimenu .pc-sidebar .pc-submenu .pc-hasmenu').hover(function() {
                var elm = $(this).children(".pc-submenu");
                var off = elm.offset();
                var l = off.left;
                var t = off.top;
                var w = elm.width();
                var h = elm.height();
                var scrw = $(window).scrollTop();

                var isEntirelyVisible = (t + h <= docH);
                if (!isEntirelyVisible) {
                    var th = t - scrw;
                    elm.addClass("scroll-menu");
                    elm.css('max-height', 'calc(100vh - ' + th + 'px)');
                    hpx = new PerfectScrollbar('.scroll-menu', {
                        wheelSpeed: .5,
                        swipeEasing: 0,
                        suppressScrollX: !0,
                        wheelPropagation: 1,
                        minScrollbarLength: 40,
                    });
                }
            }, function() {
                hpx.destroy();
                $('.scroll-menu').removeAttr('style');
                $('.scroll-menu').removeClass('scroll-menu');
            });
        }
}
// Collapse meni edge end
$(".prod-likes .form-check-input").change(function() {
    if ($(this).is(":checked")) {
        $(this).parent('.prod-likes').append('<div class="pc-like"><div class="like-wrapper"><span><span class="pc-group"><span class="pc-dots"></span><span class="pc-dots"></span><span class="pc-dots"></span><span class="pc-dots"></span></span></span></div></div>');
        $(this).parent('.prod-likes').find('.pc-like').addClass('pc-like-animate');
        setTimeout(function(){
            $(this).parent('.prod-likes').find('.pc-like').remove();
        }, 3000);
    } else {
        $(this).parent('.prod-likes').find('.pc-like').remove();
    }
});
