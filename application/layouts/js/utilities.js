/**
 * Created by Jose on 13/09/2016.
 */
function validar(form) {
    return valida_required(form);
}
function verificaacesso(form) {
    //TODO terminar essa validação. Tratar caso o usuario ou senha estejam errados
    if (validar(form)) {
        var dados = jQuery("#" + form).serializeArray();
        var url = 'login/login';
        $.post(
            url,
            dados
        );


    } else {
        // alert('else');

    }
}
