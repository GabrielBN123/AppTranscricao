$(document).ready(function() {
    $("input").blur(function() {
        if ($(this).val() == "") {
            $(this).css({ "border-color": "#F00", "padding": "2px" });
        }
    });
})