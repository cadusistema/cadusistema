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
        var url = 'Autorizacao/salvaAutorizacaoDB';

        $.post(
            url,
            dados
        );

        // console.log(dados);
        // console.log(url);


        // alert("if-validar");
    }
    else {
        // feedback('feedback', 'salvar');
        alert('else-validar');
    }
}

function addMembros() {
    // console.log("Membros");
    $("#teste").append(createDivFields());
    return false;

}

function createDivFields() {
    /*
     Criamos a variavel, e atribuimos os campos que serão criados;
     Utilizamos o colchetes nos nomes do campos para informar que os dados
     em forma de array;
     Adiciona uma div, para que nela seja criado novos campos extras;
     E um link para para chamar o evento de adicionar;
     */
    var html = '<div class="field form-group novomembro">';
    html += '<label>Nome do Integrante</label>    <input type="text" name="namemember[]" value="" id="namemember" class="form-control input-sm"  />';
    html += '<label>Instituição do Integrante</label>    <input type="text" name="institutionmember[]" value="" id="institutionmember" class="form-control input-sm"  />';
    html += '<label>CPF / RG</label>    <input type="text" name="cpfrg[]" value="" id="cpfrg" class="form-control input-sm"  />';
    html += '<a href="#" id="buttonremovemembro" onclick="removemembro()">Remover Membro</a>';
    html += '<div class="item"></div>';
    html += '<div>';
    return html;
}

function removemembro () {
    console.log("etateteta");
    $(".novomembro").remove();
}



