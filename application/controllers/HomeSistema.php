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

    public function fichaautorizacao() {
        $this->titlePage = "Ficha de Autorização para Pesquisa";
//        recuperar as opçao para informações das atividades, buscando na tabela ActivitesInformation
        $opInformAtividades = [];
        $dateBD = array();
        $opcao = array();
        try {
            $opInformAtividades = ActivitesInformation::all();
        } catch (ActiveRecordException $expection) {
            echo $expection->getMessage();
        }
        $opcao['0']= 'Escolha uma opcao';
        foreach ($opInformAtividades as $aux) {
            $opcao[$aux->activitiesofinformationid] =$aux->occupation;
        }
        $dateBD['opcao'] = $opcao;
        $this->load->view("admin/autorizacaoparapesquisa",$dateBD);
    }

    public function fichavisitante() {
        $this->titlePage = "Ficha do Visitante";
        $this->load->view("admin/avaliacaovisitante");
    }
}