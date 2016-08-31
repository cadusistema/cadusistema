/**
 * Created by Jose on 31/08/2016.
 */
function validar(form) {
    return valida_required(form);
}

// function salvar() {
//     if (validar()) {
//         // var url = DOMAIN + "controller.php?page=salvar" + FUNC;
//         // var dados = jQuery("#novo" + tipocliente).serializeArray();
//         // $.post(
//         //     url,
//         //     dados,
//         //     function (data) {
//         //         eval("resp=" + data);
//         //         if (resp.status > 0) {
//         //             modal('teste', resp.msg, "sucesso");
//         //             setTimeout(function () {
//         //                 mudarPagina(tipocliente);
//         //             }, DELAY);
//         //
//         //         } else {
//         //             feedback('feedback', 'salvar');
//         //             if (resp.status == 0)
//         //                 modal('error_msg', resp.msg, 'alerta', 1);
//         //             else
//         //                 modal('error_msg', resp.msg, 'alerta', 1);
//         //         }
//         //
//         //     }
//         // );
//
//         alert("if-validar");
//     }
//     else {
//         // feedback('feedback', 'salvar');
//         alert('else-validar');
//     }
//
//
//
// }
