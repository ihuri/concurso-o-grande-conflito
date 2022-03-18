var formID = document.getElementById("formID");
var send = $("#send");

$(formID).submit(function(event) {
    if (formID.checkValidity()) {
        send.attr('disabled', 'disabled');
    }
});