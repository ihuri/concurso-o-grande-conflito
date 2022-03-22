//Desabilitando o formulario para ser enviado apenas uma vez
var formID = document.getElementById("formID");
var send = $("#send");

$(formID).submit(function(event) {
    if (formID.checkValidity()) {
        send.attr('disabled', 'disabled');
    }
});

//libera bontao de cadastro apenas se o checkbox estiver marcado
$(document).ready(function() {
    $('input[name=aceiteTermo]').change(function() {
        if ($(this).is(':checked')) {
            $('input[name=send]').removeAttr('disabled');
        } else {
            $('input[name=send]').attr('disabled', true);
        }
    });
});