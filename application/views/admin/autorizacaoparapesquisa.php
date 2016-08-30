<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 01/08/2016
 * Time: 14:00
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? echo form_open("Autorizacao/salvaAutorizacaoDB"); ?>
<div class="field form-group">
    <? echo form_label("Data de Emissão"); ?>
    <? echo form_input(array(
        "id"    => "dataemissao",
        "name"  => "dataemissao",
        "class" => "form-control input-sm",
    )); ?>
</div>
<div class="field form-group">
    <?
    //informações sobre o projeto
    echo form_label("Titulo"); ?>
    <? echo form_input(array(
        "id"        => "title",
        "name"      => "title",
        "class"     => "form-control input-sm",
        "maxlength" => "255"
    )); ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Instituição"); ?>
    <? echo form_input(array(
        "id"        => "institution",
        "name"      => "institution",
        "class"     => "form-control input-sm",
        "maxlength" => "255"
    )); ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Responsável"); ?>
    <? echo form_input(array(
        "id"    => "responsible",
        "name"  => "responsible",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("CPF"); ?>
    <? echo form_input(array(
        "id"    => "cpf",
        "name"  => "cpf",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Endereço"); ?>
    <? echo form_input(array(
        "id"    => "address",
        "name"  => "address",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Número / Km"); ?>
    <? echo form_input(array(
        "id"    => "number",
        "name"  => "number",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Bairro"); ?>
    <? echo form_input(array(
        "id"    => "neighborhood",
        "name"  => "neighborhood",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Complemento"); ?>
    <? echo form_input(array(
        "id"    => "complement",
        "name"  => "complement",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Município"); ?>
    <? echo form_input(array(
        "id"    => "city",
        "name"  => "city",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    //confirmar dispois
    echo form_label("UF"); ?>
    <? echo form_input(array(
        "id"    => "uf",
        "name"  => "uf",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("CEP"); ?>
    <? echo form_input(array(
        "id"    => "zipecode",
        "name"  => "zipecode",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Telefone:"); ?>
    <? echo form_input(array(
        "id"    => "phone",
        "name"  => "phone",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Celular:"); ?>
    <? echo form_input(array(
        "id"    => "cellphone",
        "name"  => "cellphone",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("E-mail:"); ?>
    <? echo form_input(array(
        "id"    => "email",
        "name"  => "email",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Nome do Integrante"); ?>
    <? echo form_input(array(
        "id"    => "namemember",
        "name"  => "namemember",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Instituição do Integrante"); ?>
    <? echo form_input(array(
        "id"    => "institutionmember",
        "name"  => "institutionmember",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("CPF / RG"); ?>
    <? echo form_input(array(
        "id"    => "cpfrg",
        "name"  => "cpfrg",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<div class="field form-group">
    <?
    echo form_label("Função do Integrante"); ?>
    <? echo form_input(array(
        "id"    => "functionmember",
        "name"  => "functionmember",
        "class" => "form-control input-sm",
    ));
    ?>
</div>
<?
echo form_submit(array(
    'id'      => "submit",
    'name'    => "salvaautorizacao",
    'class'   => 'btn btn-primary fa fa-floppy-o',
    'type'    => 'submit',
    'value'   => 'Submit',
    'content' => 'Salvar'
));
echo form_close();
//echo anchor('Autorizacao/salvaAutorizacaoDB',' Salvar',array(
//    'id'    => "salvaautorizacao",
//    'name'  => "salvaautorizacao",
//    'class' => 'btn btn-primary fa fa-floppy-o' ,
//));
echo anchor('Autorizacao/salvaAutorizacaoDB', ' Cancelar', array(
    'id'    => "cancelaautorizacao",
    'name'  => "cancelaautorizacao",
    'class' => 'btn btn-danger',
));
?>

