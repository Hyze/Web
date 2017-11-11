    $(document).ready(init);

    function init() {
     partie1();
     fishEye();
    }

function partie1() {
    //alert($("html").html());
    //$("body").html('<p> BONJOUR </p>');
    $('li ul ').hide();

    $('#cache ').mouseenter(function () {
        $(this).next('.slide').slideDown(700)


    });

    $('#cache ').mouseleave(function () {
        $(this).next('.slide').slideUp(700)
    });
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