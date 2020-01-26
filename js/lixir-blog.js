let read_btn = $(".read_more");
let article_content = $(".article-content");

article_content.map(value => {
    $(read_btn[value]).on("click", () => {
        let active_post = $(article_content[value]);

        if (parseInt(active_post.css("height")) > 300) {
            $(article_content).css("height", "300px")
            active_post.css("height", "300px")
        }
        else {
            $(article_content).css("height", "300px")
            active_post.css("height", "auto");

        }
    })
})