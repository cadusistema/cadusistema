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
        <? echo form_submit(array(
            'id'    => 'submit',
            'value' => 'Confirmar',
            'class' => 'btn btn-primary'
        )); ?>
        <? echo form_close(); ?>
    </div>

    <? echo anchor('login/criarConta', 'Cancelar', array('class' => 'btn btn-danger')) ?>

</div>

