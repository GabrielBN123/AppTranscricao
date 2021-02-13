$(document).ready(function() {

    $('.toggle_view_pass').on('click', function() {

        // var senha = $('.senha_class').attr('type');

        // console.log(senha);

        var senha = $('.senha_class');

        if (senha.attr('type') == 'password') {
            senha.attr('type', 'text')
            $('.pass_view_on').show()
            $('.pass_view_off').hide()
        } else if (senha.attr('type') == 'text') {
            senha.attr('type', 'password')
            $('.pass_view_on').hide()
            $('.pass_view_off').show()
        } else {
            alert('Erro: input Senha');
        }

    })

    $("input").blur(function() {
        if ($(this).val() == "") {
            $(this).css({ "border-color": "#F00" });
        } else {
            $(this).css({ "border-color": "green" });
        }
    });
})


// $('.hide_pass').on('click', function() {

//     // var senha = $('.senha_class').attr('type');

//     // console.log(senha);


//     $('.senha_class').attr('type', 'password');


// })