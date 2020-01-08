let browserWidth = document.body.clientWidth;
// Toggle menu
// console.log(window.innerHeight, browserWidth)
if (browserWidth < 770) {
    $(".fa-bars").click(function () {
        $(".nav_link").fadeToggle()
    })
}

//banner slider
let init = 0;
let slide_stack = $(".carousel1_slide").length;
$(".control").click(function () {
    let active_slide = $(".carousel1 .active");
    let next_slide = active_slide.next();
    let prev_slide = active_slide.prev();

    //left btn control
    if ($(this).hasClass("control--left")) {
        if (init === 0) { }
        else {
            active_slide.css("left", "100%").removeClass("active")
            prev_slide.addClass("active");
            init--
        }
    }
    //right btn control
    else {
        if (init >= slide_stack - 1) { }
        else {
            active_slide.css("left", "-100%").removeClass("active");
            next_slide.addClass("active");
            init++
        }

    }
})