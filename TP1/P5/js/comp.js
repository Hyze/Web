$(document).ready(init);

function init() {
    var i= 10;

        $('.add').click(function () {
            console.log(i);
            i--;
            if(i>0) {
                $('.form').append('<li><input type="file" name="file[]" multiple></li>');
            }
            else
            {
                alert("Vous ne pouvez créer plus d'input")
            }
        });

}