/**
 * Created by Jose on 31/08/2016.
 */
function valida_required(form) {
    var fieldname;
    var validate = true;
    var fields = $('#' + form + " input[required],#" + form + " select[required]");

    $.each(fields, function (idx, field) {


        if ($(field).val() == '') {

            if (typeof (field.placeholder) !== 'undefined')
                fieldname = field.placeholder;

            else
                fieldname = field.getAttribute('data');


            validate = false;
            var x = jQuery("label[for='" + field.id + "'] p.red");


            if (x.length == 0) {
                jQuery("label[for='" + field.id + "']").append(" <p class='red'>Campo " + fieldname + " não pode ficar vazio</p>");
            }
        }
    });
    return validate;
}

function remove_erro_validacao(id) {
    jQuery("label[for='" + id + "'] p.red").remove();
}