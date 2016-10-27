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

    public function index() {
        $autorizacaoDB = AuthorizationResearch::find('all', array('conditions' => 'authorized = 0'));
        $dados['dados'] = $autorizacaoDB;
        $this->load->view('admin/home_sistema', $dados);
    }

//    funcao para exibir os datelhes da autorização
    public function detalhes($id) {
        $dados = array();
//        $autorizacaoDetalhe = AuthorizationResearch::find_by_sql("select *
//from authorizationresearch, member_to_authorizationresearch,member
//where authorizationresearch.authorizationresearchid=member_to_authorizationresearch.authorizationresearchid and member_to_authorizationresearch.memberid=member.membersid AND authorizationresearch.authorizationresearchid={$id} ;");

        echo '<pre>';
        print_r($autorizacaoDetalhe[0]);
        echo '</pre>';
        $dados['autorizacaoDetalhe'] = $autorizacaoDetalhe[0];
        $this->load->view('admin/detalheautorizacao', $dados);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login/fazerlogin');
    }
}