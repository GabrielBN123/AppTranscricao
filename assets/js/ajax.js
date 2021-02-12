$(function() {

    // Atribui evento e função para limpeza dos campos
    // $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $("#busca").autocomplete({
            minLength: 2,
            source: function(request, response) {
                $.ajax({
                    url: "consulta.php",
                    dataType: "json",
                    data: {
                        acao: 'autocomplete',
                        parametro: $('#busca').val()
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            focus: function(event, ui) {
                $("#busca").val(ui.item.codigo_item);
                carregarDados();
                return false;
            },
            select: function(event, ui) {
                $("#codigoItem").val(ui.item.codigo_item);
                $("#descricao").val(ui.item.descricao_item);
                $("#aliqIPI").val(ui.item.aliq_ipi);
                $("#ncm").val(ui.item.ncm);
                return false;
            }
        })
        .autocomplete("instance")._renderItem = function(ul, item) {
            return $("<li>")
                .append(item.codigo_item + " — " + item.descricao_item)
                .appendTo(ul);
        };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados() {
        var busca = $('#busca').val();

        if (busca != "" && busca.length >= 2) {
            $.ajax({
                url: "consulta.php",
                dataType: "json",
                data: {
                    acao: 'consulta',
                    parametro: $('#busca').val()
                },
                success: function(data) {
                    $('#codigoItem').val(data[0].codigo_item);
                    $('#descricao').val(data[0].descricao_item);
                    $('#aliqIPI').val(data[0].aliq_ipi);
                    $('#ncm').val(data[0].ncm);
                }
            });
        }
    }

    //Função para carregar os dados da consulta no campo MVA
    function carregarDados() {
        var busca = $('#ncm').val();

        if (busca = $('#ncm').val()) {
            $.ajax({
                url: "consulta.php",
                dataType: "json",
                data: {
                    acao: 'consulta',
                    parametro: $('#ncm').val()
                },
                success: function(data) {
                    $('#mva').val(data[0].rs);
                }
            });
        }
    }


    // Função para limpar os campos caso a busca esteja vazia

    function limpaCampos() {
        var busca = $('#busca').val();
        if (busca == "") {
            $('#codigoItem').value('');
            $('#busca').val('');
            $('#descricao').val('')
            $('#aliqIPI').val('');

        }
    }
});