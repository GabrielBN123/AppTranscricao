$(function() {

    $('.reload_btn').on('click', function() {
        window.location.reload(true);
    })
    $(document).on('click', function(event) {
        $(event.target).closest("p").css("color", "red");
    })
    $('.dropdown_btn').on('click', function(span) {
        var btn = $(span.target);
        btn.closest($('h5')).next('hr').next('.dropdown_pulpito').toggle();
    })

})