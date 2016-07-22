<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open("login/login");
echo form_label("Usuario");
echo form_input(array(
        "id"          => "usuario",
        "name"        => "usuario",
        "placeholder" => "Nome"
    ));
echo form_label("Senha");
echo form_password(array(
        "id"          => "senha",
        "name"        => "senha",
        "placeholder" => "Senha"
    ));

echo  form_submit(array('id' => 'submit', 'value' => 'Submit'));
echo form_close();

?>
