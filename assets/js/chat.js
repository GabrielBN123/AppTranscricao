$('.btn_chat').on('click', function(target) {
    $('.div_chat').toggle();
    if ($('.div_chat').is(':visible')) {
        $(this).addClass("btn_chat_on");
    } else {
        $(this).removeClass("btn_chat_on");
    }
})