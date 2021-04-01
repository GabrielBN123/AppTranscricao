$(document).ready(function() {
    $("input").blur(function() {
        if ($(this).val() == "") {
            $(this).css({ "border-color": "#F00" });
        } else {
            $(this).css({ "border-color": "green" });
        }
        if ($('#email').val() == "" && $('#email').val() == "") {
            $("#cad_btn").attr('disabled', 'disabled');
            $("#cad_btn").attr('title', 'Preencha os campos obrigatórios');
        } else {
            $("#cad_btn").removeAttr('disabled');
            $("#cad_btn").removeAttr('title');
        }
    });


})

var loadFile = function(event) {
    var image = document.getElementById('show_foto');
    image.src = URL.createObjectURL(event.target.files[0]);
};