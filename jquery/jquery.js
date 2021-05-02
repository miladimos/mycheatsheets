// var jq = jQuery.noConflict();
// jq(window).width();

// $(document).ready(function () {
//     $('body').css("background-color", "red");
// });

$(function () {
    // $('body').css("background-color");
    // $('body').css("background-color", "blue");
    // $('body').css({
    //     "backgroundColor": "red",
    //     "color": "blue"
    // });

    // $("p").attr({"title": "p tag"});
    // $("p").removeAttr("title");

    // $('p').append("<mark> Test</mark>");

    // $('p').click(function() {
    //     alert($(this).html());
    // });

    // $(window).height();

    // $("#p1").hide();
    // $("#p1").show();

    // var elements = $("img");
    // var index    = elements.index($("#id1"));

    // $("p").each(function (index, elem) {
    //     alert("This is " + index + " And " + elem.tagName);
    // });


    // $("img").mouseenter(function () {
    //     alert("Src: " + this.getAttribute("src")); 
    // });


    // $("p").add("div"); //$("p", "div");


    // $("label").css("color", "red");
    // $("label:even").css("font-size", "20px");
    // $("label:even, .cell").css("background-color", "cyan");
    // // same
    // $("label").css("color", "red").filter(":even").css("font-size", "20px").add(".cell").css("background-color", "cyan");


    $("tr:even").css("background-color", "#0ff");
    $("tr:odd").css("background-color", "#ddf");
    $("tr:first").css({
        "background-color": "blue",
        "color": "white"
    });
    $("tr:not(first-child)").hover(function () {
        $(this).css("background-color", "red");
    }, function () {
        $("tr:even:not(:first)").css("background-color", "#0ff");
        $("tr:odd").css("background-color", "#ddf");
    });



});


/* 
Selectors:

[class=c3]
input[name*='nam']
p[id^='para]
p[id$='para]
a:first
a:last
div a:first-child
div a:last-child
p:even
p:odd

ul:nth-child(2)
p:only-child
p a:eq(2)
p a:lt(2)
p a:gt(2)

span:empty

div:has(p)

:contains('jq')

input:focus

p:not(:empty)

#form :enabled
#form :disabled

:selected
:checked

p:visible
p:hidden

div:animated

div :header
div :input

:button


*/