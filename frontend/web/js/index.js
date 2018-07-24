$(document).scroll(function () {
    let backTop = $(".back-to-top");
    if ($(document).scrollTop() > 200) {
        if (backTop.hasClass("invalidate")) {
            backTop.removeClass("invalidate");
            }
        }
        else {
            if (!backTop.hasClass("invalidate")) {
                backTop.addClass("invalidate");
            }
        }
})

$(".back-to-top").click(function(){
    $("body").velocity("scroll", {
        duration: 500,
        easing: "easeOutQuart"
    });
})