$(document).ready(function () {
/* anchor tag scroll */
    $("a.scroll-link").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top - 50 }, 500);
    });
});