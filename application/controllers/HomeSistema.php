<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 01/08/2016
 * Time: 15:05
 */
use ActiveRecord\ActiveRecordException;

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeSistema extends CI_Controller {
    public $titlePage = "Home Sistema";
    public $layout = "layoutSistema";

    public function __construct() {
        parent::__construct();
    }

    public function fichavisitante() {
        $this->titlePage = "Ficha do Visitante";
        $this->load->view("admin/avaliacaovisitante");
    }

//    funcao para exibir os datelhes da autorização
    public function detalhes($id) {
        $dados = array();
//        $join = "inner join authorizationresearch on authorizationresearch.activitiesofinformationid = activitiesofinformation.activitiesofinformationid";
//        $autorizacaoDetalhe = ActivitesInformation::all(array('joins' =>$join));

        $join = "inner join activitiesofinformation on authorizationResearch.activitiesofinformationid = activitiesofinformation.activitiesofinformationid";
        $autorizacaoDetalhe = AuthorizationResearch::all(array('joins' => $join));

        echo '<pre>';
        print_r($autorizacaoDetalhe);
        echo '</pre>';


        $dados['autorizacaoDetalhe'] = $autorizacaoDetalhe;
        $this->load->view('admin/detalheautorizacao', $dados);
    }
}