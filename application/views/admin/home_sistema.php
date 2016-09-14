<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 19/07/2016
 * Time: 16:10
 */

?>
<p>Home do Sistema</p>


<div>

    <table class="table table-hover table-striped table-condensed">
        <caption class="align-left">Solicitações Denpentes</caption>
        <thead>
        <tr>
            <th>Data Emissão</th>
            <th>Titulo</th>
            <th>Responsavel</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($dados as $dado): ?>
            <tr>

                <td><?= $dado->dateofissue ?></td>
                <td><?= $dado->title ?></td>
                <td><?= $dado->responsible ?></td>
                <!--                <td>--><? //= $dado->authorizationresearchid ?><!--</td>-->
                <td align="right">
                    <button class="btn btn-info" title="Detalhes" onclick="window.location='<?echo site_url(array('HomeSistema/detalhes',$dado->authorizationresearchid))?>'"><i class="fa fa-info"></i></button>
                </td>

            </tr>
        <? endforeach; ?>

        </tbody>


    </table>


</div>


<? //
////botao ficha de autorização
//echo anchor('HomeSistema/fichaautorizacao', 'Ficha Autorização', array(
//    "id"    => "fichaautorizacao",
//    "name"  => "fichaautorizacao",
//    "class" => "btn btn-primary",
//));
//echo anchor('HomeSistema/fichavisitante', 'Ficha Visitante', array(
//    'id'    => "fichavisitante",
//    'name'  => "fichavisitante",
//    'class' => 'btn btn-primary' ,
//))
//
//echo $this->session->userdata('nome');
?>


</body>
</html>

