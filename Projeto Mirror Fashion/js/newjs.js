function BotaoBuscar() {
    if (document.formBusca.txtBusca.value == '') {
        alert('nenhuma texto escrito');
        return false;

    } else {
        alert('tem texto escrito');
        return true;
    }

}

function ValidEmail(elemento) {


    elemento.setCustomValidity("");

    if (!elemento.validity.valid) {

        elemento.setCustomValidity("Email inválido");
    }
};