$('.btn_chat_func').on('click', function(target) {
    $('.div_chat').toggle();
    if ($('.div_chat').is(':visible')) {
        $(this).addClass("btn_chat_on");
    } else {
        $(this).removeClass("btn_chat_on");
    }
})

$('.btn_chat_func_mobile').on('click', function(target) {
    $('.div_chat').toggle();
    if ($('.div_chat').is(':visible')) {
        $(this).toggle();
    }
})

$('.close_mobile_chat').on('click', function(target) {
    $('.div_chat').toggle();
    if ($('.div_chat').is(':hidden')) {
        $('.btn_chat_func_mobile').toggle();
    }

})