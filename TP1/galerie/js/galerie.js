$(document).ready(init);

function init() {
    $('#galerie_mini a').mouseover(modifierSource)
}

function modifierSource() {

      $('#big_pict').attr('src',$(this).attr('href'));

      $('#big_pict').attr('alt'),$(this).attr('title');

      $('#photo h2').empty().append($(this).attr('title'))


}
