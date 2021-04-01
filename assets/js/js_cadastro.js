$(document).ready(function() {
    $("input").blur(function() {
        if ($(this).val() == "") {
            $(this).css({ "border-color": "#F00" });
        } else {
            $(this).css({ "border-color": "green" });
        }
        if ($('#email').val() == "" && $('#email').val() == "") {
            $("#cad_btn").attr('disabled', 'disabled');
        } else {
            $("#cad_btn").removeAttr('disabled');
        }
    });


})

var loadFile = function(event) {
    var image = document.getElementById('show_foto');
    image.src = URL.createObjectURL(event.target.files[0]);
};