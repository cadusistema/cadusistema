<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 01/08/2016
 * Time: 14:00
 */
defined('BASEPATH') OR exit('No direct script access allowed');
//echo '<pre>';
//print_r($opcao);
//echo '</pre>';
?>

<? echo form_open("Autorizacao/salvaAutorizacaoDB", array('id' => 'formautorizacao')); ?>

<div class="field form-group">
    <?
    //informações sobre o projeto
    echo form_label("Titulo*", 'title'); ?>
    <? echo form_input(array(
        "id"    => "userid",
        "name"  => "userid",
        "class" => "form-control input-sm",
        "type"  => "hidden",
        "value" => '1'
    )); ?>


    <? echo form_input(array(
        "id"          => "title",
        "name"        => "title",
        "class"       => "form-control input-sm",
        "maxlength"   => "255",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
        'placeholder' => 'Titulo'
    )); ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Instituição*", 'institution'); ?>
    <? echo form_input(array(
        "id"          => "institution",
        "name"        => "institution",
        "class"       => "form-control input-sm",
        "maxlength"   => "255",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'placeholder' => "Instituição",
        'required '   => 'required',
    )); ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Responsável*", 'responsible'); ?>
    <? echo form_input(array(
        "id"          => "responsible",
        "name"        => "responsible",
        "class"       => "form-control input-sm",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'placeholder' => 'Responsável',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("CPF*", 'cpf'); ?>
    <? echo form_input(array(
        "id"          => "cpf",
        "name"        => "cpf",
        "class"       => "form-control input-sm",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'placeholder' => "CPF",
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Endereço*", 'address'); ?>
    <? echo form_input(array(
        "id"          => "address",
        "name"        => "address",
        "class"       => "form-control input-sm",
        'placeholder' => 'Endereço',
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Número / Km"); ?>
    <? echo form_input(array(
        "id"          => "number",
        "name"        => "number",
        "class"       => "form-control input-sm",
        'placeholder' => 'Número / Km',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Bairro*", 'neighborhood'); ?>
    <? echo form_input(array(
        "id"          => "neighborhood",
        "name"        => "neighborhood",
        "class"       => "form-control input-sm",
        'placeholder' => 'Bairro',
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Complemento"); ?>
    <? echo form_input(array(
        "id"          => "complement",
        "name"        => "complement",
        "class"       => "form-control input-sm",
        'placeholder' => 'Complemento',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Município*", 'city'); ?>
    <? echo form_input(array(
        "id"          => "city",
        "name"        => "city",
        "class"       => "form-control input-sm",
        'placeholder' => 'Cidade',
        'required '   => 'required',
        "onfocus"     => 'remove_erro_validacao(this.id)'
    ));
    ?>
</div>
<div class="field form-group">
    <?
    //confirmar dispois
    echo form_label("UF*", 'uf'); ?>
    <? echo form_input(array(
        "id"          => "state",
        "name"        => "state",
        "class"       => "form-control input-sm",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'placeholder' => 'UF',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("CEP*", 'zipecode'); ?>
    <? echo form_input(array(
        "id"          => "zipcode",
        "name"        => "zipcode",
        "class"       => "form-control input-sm",
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'placeholder' => 'CEP',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Telefone*:", 'phone'); ?>
    <? echo form_input(array(
        "id"          => "phone",
        "name"        => "phone",
        "class"       => "form-control input-sm",
        'placeholder' => 'Telefone',
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Celular:", 'cellphone'); ?>
    <? echo form_input(array(
        "id"          => "cellphone",
        "name"        => "cellphone",
        "class"       => "form-control input-sm",
        'placeholder' => 'Endereço',
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("E-mail*:", 'email'); ?>
    <? echo form_input(array(
        "id"          => "email",
        "name"        => "email",
        "class"       => "form-control input-sm",
        'placeholder' => 'Email',
        "onfocus"     => 'remove_erro_validacao(this.id)',
        'required '   => 'required',
    ));
    ?>
</div>
<!--<div class="field form-group">-->
<!--    --><? //
//    echo form_label("Nome do Integrante"); ?>
<!--    --><? // echo form_input(array(
//        "id"    => "namemember",
//        "name"  => "namemember[]",
//        "class" => "form-control input-sm",
//    ));
//    ?>
<!--</div>-->
<!--<div class="field form-group">-->
<!--    --><? //
//    echo form_label("Instituição do Integrante"); ?>
<!--    --><? // echo form_input(array(
//        "id"    => "institutionmember",
//        "name"  => "institutionmember[]",
//        "class" => "form-control input-sm",
//    ));
//    ?>
<!--</div>-->
<!--<div class="field form-group">-->
<!--    --><? //
//    echo form_label("CPF / RG"); ?>
<!--    --><? // echo form_input(array(
//        "id"    => "cpfrg",
//        "name"  => "cpfrg[]",
//        "class" => "form-control input-sm",
//    ));
//    ?>
<!--</div>-->
<!--<div class="field form-group" id="teste">-->
<!--    --><? //
//    echo form_label("Função do Integrante"); ?>
<!--    --><? // echo form_input(array(
//        "id"    => "functionmember",
//        "name"  => "functionmember[]",
//        "class" => "form-control input-sm",
//    ));
//    ?>
<!--</div>-->

<div id="teste"></div>

<div class="field form-group">
    <?
    echo form_label("Tipo de Atividades*:", 'tipodeatividades'); ?>
    <? echo form_dropdown('activitiesofinformationid', $opcao,0, array('class' => 'form-control'));
    ?>
</div>


<? echo form_close(); ?>
<a href="javascript:void(0)" class="btn btn-primary" id="addmembros" onclick="addMembros()"> Adicionar Membros</a>
<a href="javascript:void(0)" class="btn btn-primary" id="salvar" onclick="salvar('formautorizacao')"><i
        class="fa fa-floppy-o"> Salvar</i></a>
<a href="javascript:history.go(-1)" class="btn btn-default" title="Cancelar"><i class="fa fa-arrow-left"></i>
    Cancelar</a>
<script type="text/javascript" src="<? echo base_url(JSPATHADMIN . 'util.js') ?>"></script>
<script type="text/javascript" src="<? echo base_url(JSPATHADMIN . 'admin.js') ?>"></script>
