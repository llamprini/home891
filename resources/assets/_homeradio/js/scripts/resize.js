
let notDesktopLayout = innerWidth < 991;
let desktopLayout = innerWidth >= 991;
$(window).on("resize", function () {
    if (
        (notDesktopLayout && innerWidth >= 991) ||
        (desktopLayout && innerWidth < 991)
    ) {
        location.reload();
    }
});
