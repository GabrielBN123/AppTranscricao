$(function() {

    $('.reload_btn').on('click', function() {
        window.location.reload(true);
    })
    $('.btn_lido').on('click', function(event) {
        var btn_lido = $(event.target);
        var btn_lido_color = btn_lido.closest("p").css("color");

        if (btn_lido_color == "rgb(255, 0, 0)" || btn_lido_color == "red") {
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