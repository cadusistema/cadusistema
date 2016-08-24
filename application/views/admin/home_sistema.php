<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 19/07/2016
 * Time: 16:10
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>
</head>
<body>

<p>Home do Sistema</p>

<?
//botao ficha de autorização
echo anchor('HomeSistema/fichaautorizacao', 'Ficha Autorização', array(
    "id"    => "fichaautorizacao",
    "name"  => "fichaautorizacao",
    "class" => "btn btn-primary",
));
echo anchor('HomeSistema/fichavisitante', 'Ficha Visitante', array(
    'id'    => "fichavisitante",
    'name'  => "fichavisitante",
    'class' => 'btn btn-primary' ,
))
?>


</body>
</html>

