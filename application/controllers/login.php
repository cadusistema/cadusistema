<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:35
 */
use ActiveRecord\ActiveRecordException;

defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller {
    public $title = 'Área Administrativa';
    public $layout;

    public function __construct() {
        parent::__construct();
    }

    /*
     * Função para carregar a view de login
     */
    public function fazerlogin() {
        $this->load->view('site/login_view');
    }

    /**
     * Função para carregar a view de criar novo usuario
     */
    public function criarConta() {
        $this->load->view('site/criarconta');
    }

    /*
     * Função para efetuar o login
     */
    public function login() {
        $nomeFormulario = $this->input->post('usuario');
        $senhaFormulario = $this->input->post('senha');
        try {
            $dadosBanco = Person::find(array('name' => $nomeFormulario));
        } catch (ActiveRecordException $e) {
            echo $e->getMessage();
        }
        $nomeBanco = $dadosBanco->name;
        $senhaBanco = $dadosBanco->user[0]->password;
        $nivelAcesso = $dadosBanco->user[0]->accesslevel;
        if ($nomeFormulario == $nomeBanco && $senhaFormulario == $senhaBanco) {
            //criando array para adicionar na session
            $dadosSession = array('nome' => $nomeBanco);
            $this->session->set_userdata($dadosSession);
            //nivel ao acesso ao sistema
            if ($nivelAcesso == 2) {
                $this->layout = "layoutSistema";
                $dados = array();
                //carregando informações sobre autorização para pesquisa e exibilas na view da home do sistema
                $autorizacaoDB = AuthorizationResearch::find('all', array('conditions' => 'authorized = 0'));
                $dados['dados'] = $autorizacaoDB;
                $this->load->view('admin/home_sistema', $dados);
            }//nivel para acesso a ficha de autorização
            else if ($nivelAcesso == 1) {
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
                $opcao['0'] = 'Escolha uma opcao';
                foreach ($opInformAtividades as $aux) {
                    $opcao[$aux->activitiesofinformationid] = $aux->occupation;
                }
                $dateBD['opcao'] = $opcao;
                $this->load->view("admin/autorizacaoparapesquisa", $dateBD);
            }
        } else {
            $this->load->view('site/login_view');
//            redirect('/');
        }
    }

    /**
     * Função para enviar email ao novo usuario
     */
    public function enviarEmail() {
        $this->email->from('voce@seu-site.com', 'Seu Nome');
        $this->email->to('alguem@algum-site.com');
        $this->email->cc('outro@outro-site.com');
        $this->email->bcc('fulano@qualquer-site.com');
        $this->email->subject('Teste de Email');
        $this->email->message('Testando a classe de email.');
        $this->email->send();
    }
}