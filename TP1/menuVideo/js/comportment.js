$(document).ready(init);

function init() {
    Ex1();
}

function Ex1() {
    $(".over-video ").mouseenter(function () {
        $(this).addClass("affiche");
        $(".info",this).animate({
            left : "+500px"}, 400
        );
        $("img", this).hide();
    });

    $(" .over-video ").mouseleave(function () {
        $(this).removeClass("affiche");
        $(".info",this).animate({
            left : "-500px"}, 400
        );
        $("img",this).show();
    });


}