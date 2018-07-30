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
let bg = $(".select-number");
$(".select-option").mouseenter(function (event) {
    bg.addClass(event.currentTarget.innerText == "小组赛" ? "op1-temp" : "op2-temp");
});
$(".select-option").mouseleave(function (event) {
    bg.removeClass(event.currentTarget.innerText == "小组赛" ? "op1-temp" : "op2-temp");
});