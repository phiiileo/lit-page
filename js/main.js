let browserWidth = document.body.clientWidth;
// Toggle menu
// console.log(window.innerHeight, browserWidth)
if (browserWidth < 770) {
    $(".fa-bars").click(function () {
        $(".nav_link").fadeToggle()
    })
}
//banner slider
// $(".control").click(function () {
//     let active_slide = $(".carousel1 .active");
//     let next_slide = active_slide.next();
//     let prev_slide = active_slide.prev();
//     //left btn control
//     if ($(this).hasClass("control--left")) {
//         console.log(prev_slide)
//         active_slide.removeClass("active")
//         prev_slide.addClass("active").css("left", "0px");

//     }
//     else {
//         // $(active_slide).css("right", browserWidth * 1.5 + "px");
//         next_slide.addClass("active");
//         active_slide.removeClass("active").css("left", -browserWidth+"px")
//         // console.log(next_slide)

//     }
// })