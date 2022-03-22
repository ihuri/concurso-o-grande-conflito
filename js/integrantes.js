var $chidrenQnt = jQuery('#children-qnt'),
    $children = jQuery('#children');

var Children = {};
Children.container = $children;

$chidrenQnt.on('change', function() {

    var $this = jQuery(this),
        i = $this.val(),
        qnt = $children.find('label').length;

    for (let index = 0; index < qnt; index++) {
        Children.container.find("#div-integrantes").remove();
    }

    for (let index = 0; index < i; index++) {
        Children.container.append(`<div class="col-sm" id="div-integrantes"><label>Integrante 0${index + 1}: <br> Nome: <input class="form-control" type="text" name="nome_integrante0${index + 1}" /> </label> </div>`);
    }
});