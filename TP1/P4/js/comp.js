$(document).ready(init);

function init() {
    fishEye();
}

function fishEye() {
    $('.all li').mouseenter(function () {
        $(this).prev('li').attr({class:'intermediaire'});
        $(this).attr({class:'voyante'});
        $(this).next('li').attr({class:'intermediaire'});
    });
    $('.all li ').mouseleave(function () {
        $(this).attr({class:'discrete'});
        $(this).prev('li').attr({class:'discrete'});
        $(this).next('li').attr({class:'discrete'});
    });
}