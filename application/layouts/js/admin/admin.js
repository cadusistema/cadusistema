/**
 * Created by Jose on 31/08/2016.
 */
function validar(form) {
    return valida_required(form);
}

function salvar(form) {
    if (validar(form)) {
        var dados = jQuery("#" + form).serializeArray();
        // var url = '<?php echo base_url(Autorizacao/salvaAutorizacaoDB);?>';

        console.log(dados);
        // console.log(url);




        // alert("if-validar");
    }
    else {
        // feedback('feedback', 'salvar');
        // alert('else-validar');
    }


}
