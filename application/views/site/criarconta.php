<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 30/08/2016
 * Time: 11:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? echo form_open("login/enviarEmail"); ?>
<div class="content">
    <div class="field form-group">
        <h4>Para efetuar seu cadastro, informe um E-mail válido. </h4>
        <? echo form_label("Email"); ?>
        <? echo form_input(array(
            "id"          => "email",
            "name"        => "email",
            "placeholder" => "Email",
            "class"       => "form-control input-sm",
        )); ?>
    </div>
    <div class="field form-group">
<!--        --><?// echo form_submit(array(
//            'id'    => 'submit',
//            'value' => 'Confirmar',
//            'class' => 'btn btn-primary'
//        )); ?>
        <? echo form_close(); ?>
    </div>

    <? echo anchor('inicio', 'Cancelar', array('class' => 'btn btn-danger')) ?>
    <a href="javascript:void(0)" class="btn btn-primary" id="salvar" onclick="IsEmail()">Confirmar</a>

</div>
<script type="text/javascript">
    function IsEmail() {
        var email = $("#email").val();
        var exclude = /[^@ -.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
        var check = /@[w-]+./;
        var checkend = /.[a-zA-Z]{2,3}$/;
        if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
            alert('false');

            return false;
        }
        else {
            alert("else");
            var url = "<?echo site_url('login', 'enviarEmail')?>";
//            var url = "<?//echo site_url('login', 'enviarEmail')?>//";
            $.post(
                url
            );

            return true;
        }
    }

</script>

