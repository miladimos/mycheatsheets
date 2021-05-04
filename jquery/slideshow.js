$(function () {
    var canClick = true;
    var ul = $("#slider ul");
    var first = ul.children().first().clone();
    var last = ul.children().last().clone();
    ul.prepend(last);
    ul.append(first);
    ul.css("left", "-600px");

    $("#next").click(function (event) {
        event.preventDefault();
        if (!canClick)
            return;
        else
            canClick = false;

        ul.css("transition", "2s");
        ul.css("left", "-=600px");
        setTimeout(function () {
            if(ul.position().left <-1800){
                ul.css("transition", "0s").css("left", "-600px");
            }
            canClick = true;
            clearInterval(interval);
            interval = setInterval(function() {
                $("#next").click();
            }, 5000);
        }, 2000);
    });
});