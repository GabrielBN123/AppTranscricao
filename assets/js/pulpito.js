$(function() {

    $('.reload_btn').on('click', function() {
        window.location.reload(true);
    })
    $(document).on('click', function(event) {
        var btn_lido = $(event.target);
        if (btn_lido.closest("p").css("color", "red") == true) {
            btn_lido.closest("p").css("color", "black");
        } else {
            btn_lido.closest("p").css("color", "red");
        }

    })
    $('.dropdown_btn').on('click', function(span) {
        var btn = $(span.target);
        btn.closest($('h5')).next('hr').next('.dropdown_pulpito').toggle();
    })

})