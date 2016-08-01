<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 01/08/2016
 * Time: 14:00
 */
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open("cadastro/cadastro");
echo form_label("Data de Emissão");
echo form_input(array(
    "id"=>"dataemissao",
    "name"=>"dataemissao",
    "class"=>"form-control",
));

echo form_label("Data de Emissão");
echo form_input(array(
    "id"=>"dataemissao",
    "name"=>"dataemissao",
    "class"=>"form-control",
));

//informações sobre o projeto
echo form_label("Titulo");
echo form_input(array(
    "id"=>"title",
    "name"=>"title",
    "class"=>"form-control",
    "maxlength"=>"255"
));

echo form_label("Instituição");
echo form_input(array(
    "id"=>"institution",
    "name"=>"institution",
    "class"=>"form-control",
    "maxlength"=>"255"
));

echo form_label("Responsável");
echo form_input(array(
    "id"=>"responsible",
    "name"=>"responsible",
    "class"=>"form-control",
));

echo form_label("CPF");
echo form_input(array(
    "id"=>"cpf",
    "name"=>"cpf",
    "class"=>"form-control",
));

echo form_label("Endereço");
echo form_input(array(
    "id"=>"address",
    "name"=>"address",
    "class"=>"form-control",
));

echo form_label("Número / Km");
echo form_input(array(
    "id"=>"number",
    "name"=>"number",
    "class"=>"form-control",
));

echo form_label("Bairro");
echo form_input(array(
    "id"=>"neighborhood",
    "name"=>"neighborhood",
    "class"=>"form-control",
));

echo form_label("Complemento");
echo form_input(array(
    "id"=>"complement",
    "name"=>"complement",
    "class"=>"form-control",
));

echo form_label("Município");
echo form_input(array(
    "id"=>"city",
    "name"=>"city",
    "class"=>"form-control",
));
//confirmar dispois
echo form_label("UF");
echo form_input(array(
    "id"=>"dataemissao",
    "name"=>"dataemissao",
    "class"=>"form-control",
));

echo form_label("CEP");
echo form_input(array(
    "id"=>"zipecode",
    "name"=>"zipecode",
    "class"=>"form-control",
));

echo form_label("Telefone:");
echo form_input(array(
    "id"=>"phone",
    "name"=>"phone",
    "class"=>"form-control",
));

echo form_label("Celular:");
echo form_input(array(
    "id"=>"cellphone",
    "name"=>"cellphone",
    "class"=>"form-control",
));

echo form_label("E-mail:");
echo form_input(array(
    "id"=>"email",
    "name"=>"email",
    "class"=>"form-control",
));

echo form_label("Nome do Integrante");
echo form_input(array(
    "id"=>"namemember",
    "name"=>"namemember",
    "class"=>"form-control",
));

echo form_label("Instituição do Integrante");
echo form_input(array(
    "id"=>"institutionmember",
    "name"=>"institutionmember",
    "class"=>"form-control",
));

echo form_label("CPF / RG");
echo form_input(array(
    "id"=>"cpfrg",
    "name"=>"cpfrg",
    "class"=>"form-control",
));

echo form_label("Função do Integrante");
echo form_input(array(
    "id"=>"functionmember",
    "name"=>"functionmember",
    "class"=>"form-control",
));

echo form_close();