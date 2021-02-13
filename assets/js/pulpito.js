$(function() {


    $('.reload_btn').on('click', function() {
        window.location.reload(true);
        // alert(123)
    })
    $(document).on('click', function(event) {
        $(event.target).closest("p").css("text-decoration", "line-through").css("font-style", "italic");
        // var tag_p = $('this').closest(html);
        // tag_p.hide();
    })

})