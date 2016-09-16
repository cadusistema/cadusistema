<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/09/2016
 * Time: 16:49
 */
defined('BASEPATH') OR exit('No direct script access allowed');
echo '<pre>';
print_r($autorizacaoDetalhe);
echo '</pre>';


?>

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
            "id"    => "authorized",
            "name"  => "authorized",
            "class" => "form-control input-sm",
            "type"  => "hidden",
            "value" => '0'
        )); ?>

        <? echo form_input(array(
            "id"    => "dateofissue",
            "name"  => "dateofissue",
            "class" => "form-control input-sm",
            "type"  => "hidden",
            //    "value" => $date
        )); ?>


        <? echo form_input(array(
            "id"    => "title",
            "name"  => "title",
            "class" => "form-control input-sm",
            'value' => $autorizacaoDetalhe->title,
            'readonly' => 'readonly'
        )); ?>
    </div>
    <div class="field form-group">
        <?
        echo form_label("Instituição*", 'institution'); ?>
        <? echo form_input(array(
            "id"          => "institution",
            "name"        => "institution",
            "class"       => "form-control input-sm",
            'value' => $autorizacaoDetalhe->institution,
            'readonly' => 'readonly'
        )); ?>
    </div>
    <div class="field form-group">
        <?
        echo form_label("Responsável*", 'responsible'); ?>
        <? echo form_input(array(
            "id"          => "responsible",
            "name"        => "responsible",
            "class"       => "form-control input-sm",
            'value' => $autorizacaoDetalhe->responsible,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->cpf,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->address,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->number,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->neighborhood,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->complement,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->city,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->state,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->zipcode,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->phone,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->cellphone,
            'readonly' => 'readonly'
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
            'value' => $autorizacaoDetalhe->email,
            'readonly' => 'readonly'
        ));
        ?>
    </div>
    <div id="teste"></div>

    <div class="field form-group">
        <?echo form_label("Tipo de Atividade:", 'email'); ?>
        <? echo form_input(array(
            "id"    => "title",
            "name"  => "title",
            "class" => "form-control input-sm",
            'value' => $autorizacaoDetalhe->occupation,
            'readonly' => 'readonly'
        )); ?>
    </div>

<? echo form_submit(array(
    'id'    => 'submit',
    'value' => 'Salva',
    'class' => 'btn btn-primary'
)); ?>

<? echo form_close(); ?>