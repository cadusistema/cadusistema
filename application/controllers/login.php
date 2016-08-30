<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:35
 */
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
        $this->load->view('login_view');
    }

    /**
     * Função para carregar a view de criar novo usuario
     */

    public function criarConta() {
        $this->load->view('criarconta');
    }

    /*
     * Função para efetuar o login
     */
    public function login() {
        $this->layout = "layoutSistema";
        $nomeFormulario = $this->input->post('usuario');
        $senhaFormulario = $this->input->post('senha');
        $dadosBanco = Person::find(array('name' => $nomeFormulario));
        $nomeBanco = $dadosBanco->name;
        $senhaBanco = $dadosBanco->user[0]->password;
        if ($nomeFormulario == $nomeBanco && $senhaFormulario == $senhaBanco) {
            $this->load->view('admin/home_sistema');
        } else {
            $this->load->view('login_view');
            redirect('/');
        }
    }

    /**
     * Função para enviar email ao novo usuario
     */
    public function enviarEmail(){
        $this->email->from('voce@seu-site.com', 'Seu Nome');
        $this->email->to('alguem@algum-site.com');
        $this->email->cc('outro@outro-site.com');
        $this->email->bcc('fulano@qualquer-site.com');

        $this->email->subject('Teste de Email');
        $this->email->message('Testando a classe de email.');

        $this->email->send();

    }
}