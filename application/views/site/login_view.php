<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? echo form_open("login/login", array('id' => 'formlogin')); ?>
<div class="content">
    <div class="field form-group">
        <? echo form_label("Usuario", 'usuario'); ?>
        <? echo form_input(array(
            "id"          => "usuario",
            "name"        => "usuario",
            "placeholder" => "Nome",
            "class"       => "form-control input-sm",
            "onfocus"     => 'remove_erro_validacao(this.id)',
            'required '   => 'required'
        )); ?>
    </div>
    <div class="field form-group">
        <? echo form_label("Senha", 'senha'); ?>
        <? echo form_password(array(
            "id"          => "senha",
            "name"        => "senha",
            "placeholder" => "Senha",
            "class"       => "form-control input-sm",
            "onfocus"     => 'remove_erro_validacao(this.id)',
            'required '   => 'required'
        )); ?>
    </div>
    <div class="field form-group">
        <? echo form_submit(array(
            'id'    => 'submit',
            'value' => 'Acessar',
            'class' => 'btn btn-primary'
        )); ?>
    </div>
</div>
<? echo form_close(); ?>


<!--<a href="javascript:void(0)" class="btn btn-primary" id="acessar" onclick="verificaacesso('formlogin')">Acessar</a>-->

<? echo anchor('login/criarConta', 'Criar Conta', array('class' => 'btn btn-primary')) ?>
<script type="text/javascript" src="<? echo base_url(JSPATHADMIN . 'util.js') ?>"></script>
<script type="text/javascript" src="<? echo base_url(JSPATH . 'utilities.js') ?>"></script>

