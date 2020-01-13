let init = 0;
let slide_stack = $(".carousel1_slide").length;

function automateSlider() {
    let browserWidth = document.body.clientWidth;
    if (browserWidth < 770) {
        return
    }
    else {
        if (init >= slide_stack - 1) {
            return
        }
        else {
            let active_slide = $(".carousel1 .active");
            let next_slide = active_slide.next();
            active_slide.css("left", "-100%").removeClass("active");
            next_slide.addClass("active");
            init++
        }
    }
}
setInterval(automateSlider, 10000);
//banner slider
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

// Team Carousel
let team_btn = $(".controlT");
let team_stack = $(".team-carousel_slide").length;
let init1 = 0;
team_btn.click(function () {
    let t_active_slide = $(".t-active");
    let t_next_slide = t_active_slide.next();
    let t_prev_slide = t_active_slide.prev();

    //left btn control
    if ($(this).hasClass("control_left")) {
        if (init1 === 0) { console.log("limit") }
        else {
            t_active_slide.css("left", "100%").removeClass("t-active");
            t_prev_slide.addClass("t-active");
            init1--
        }
    }
    //right btn control
    else {
        if (init1 >= team_stack - 1) { console.log("limit") }
        else {
            $(t_active_slide).css("left", "-100%").removeClass("t-active");
            t_next_slide.addClass("t-active");
            init1++

        }
    }
})


setInterval(function () {
    if (init1 >= team_stack - 1) { }
    else {
        let t_active_slide = $(".t-active");
        let t_next_slide = t_active_slide.next();
        $(t_active_slide).css("left", "-100%").removeClass("t-active");
        t_next_slide.addClass("t-active");
        init1++;
    }
}, 10000)
