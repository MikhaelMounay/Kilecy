$(function () {
    var link = $("nav a");
    //click handler
    link.on("click", function () {
        var $this = $(this);
        var page = $this.data("page");

        $("body").removeClass().addClass(page);
        link.removeClass("active");
        $this.addClass("active");
    })
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50 && $(document).attr('title') == "Survey Page") {
            $('.title_div').css('background', 'rgba(0, 0, 0, 0.7)');
            $('.title_div').css('height', '100');
            $('.title_div').css('font-size', '45px');
            $('.title_div').css('line-height', '100px');
            $('img').css('background', 'rgba(255, 255, 255, 0.7)');
            $('img').css('height', '100');
            $('img').css('width', '100');
        } else if ($(window).scrollTop() > 150 && $(document).attr('title') == "Solution") {
            $('.title_div').css('background', 'rgba(0, 0, 0, 0.7)');
            $('.title_div').css('height', '100');
            $('.title_div').css('font-size', '45px');
            $('.title_div').css('line-height', '100px');
            $('img').css('background', 'rgba(255, 255, 255, 0.7)');
            $('img').css('height', '100');
            $('img').css('width', '100');
        } else if ($(document).attr('title') == "Home Page") {
            
        } else {
            $('.title_div').css('background', 'rgba(0, 0, 0, 0.1)');
            $('.title_div').css('height', '150');
            $('.title_div').css('font-size', '65px');
            $('.title_div').css('line-height', '150px');
            $('img').css('background', 'rgba(255, 255, 255, 0.2)');
            $('img').css('height', '150');
            $('img').css('width', '150');
        }
    });
});