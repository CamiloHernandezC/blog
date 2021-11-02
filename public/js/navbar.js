const mediaQuery = window.matchMedia('(min-width: 992px)')
$(window).on("scroll", function () {
    $("#linksNavBar").css("opacity", 1 - (0.01 * $(window).scrollTop()));
    if (mediaQuery.matches) {
        $("#logoNavBar").css("opacity", -0.5 + (0.01 * $(window).scrollTop()));
    }
    if (1 - (0.01 * $(window).scrollTop()) < 0.1) {
        $("#linksNavBar").css("display", 'none');
    } else {
        $("#linksNavBar").css("display", 'block');
    }
});
