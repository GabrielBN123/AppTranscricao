<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'chat/constants.inc.php';
require 'chat/DbConnPDO.class.php';
?>
<div class="div_chat">
    <div id="primary">
        <h1 class="titulo_chat">Chat Público</h1>
        <div id="log">
            <span class="long-content">&nbsp;</span>
        </div>
        <div id="composer">
            <form name="form_message" id="form_message" method="post" action="chat/set_message.ajax.php">
                <input name="nickname" type="hidden" id="nickname" value="<?php echo $_SESSION['nome_usuario']; ?>">
                <input name="message" type="text" autofocus required class="textbox_message" id="message">
                <button id="btn_send">Enviar</button>
            </form>
        </div>
    </div>
</div>
<script>
    'use strict';
    $(document).ready(function() {
        // function setTopo() {
        //     $(window).scrollTop(0);
        // }
        // $(window).bind('scroll', setTopo);
        
        getMessages();

        function getMessages() {
            $('.long-content').empty();
            var msg_error = 'Ocorreu um erro...';
            var msg_timeout = 'O servidor não está a responder';
            var message = '';
            $.ajax({
                url: 'chat/get_messages.ajax.php',
                dataType: "json",
                error: function(xhr, status, error) {
                    if (status === "timeout") {
                        message = msg_timeout;
                        alert(message);
                    } else {
                        message = msg_error;
                        alert(message + ': ' + error);
                    }
                },
                success: function(response) {
                    $.each(response, function(i, item) {
                        if (item.FromNickname == $('#nickname').val()) {
                            $('.long-content').prepend('<p style="width: 100%;text-align: end;"><span class="mensagem_usuario_atual">' + item.Message + '</span></p>');
                        } else {
                            $('.long-content').prepend('<p style="width: 100%;text-align: left;"><span class="nome_usuario"><b>' + item.FromNickname + '</b>: ' + item.Message + '</span></p>');
                        }
                    });
                    setTimeout(getMessages, 1000);
                },
                timeout: 1000
            });
        }



        // submeter formulário pela função sendForm()
        $('#form_message').on('submit', function(e) {
            e.preventDefault();
            sendForm();
        });

        function sendForm() {
            var msg_error = 'Ocorreu um erro..';
            var msg_timeout = 'O servidor não está a responder';
            var message = '';
            var form = $('#form_message');
            $.ajax({
                data: form.serialize(),
                url: form.attr('action'),
                type: form.attr('method')
            })
            $('#message').val('');
        }

    });
</script>