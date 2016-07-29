<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:35
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class login extends CI_Controller {
    /**
     * Layout default utilizado pelo controlador.
     */
//    public $layout = 'default';
    /**
     * Titulo default.
     */
    public $title = '::: Login1 :::';

    /*
     * CSS default.
     */
    public $css = array('basic');

    public function __construct() {
        parent::__construct();
    }
    /*
     * Função para carregar a view de login
     */
    public function fazerlogin() {
        $this->load->view('login_view');
    }

    /*
     * Função para efetuar o login
     */
    public function login() {
        $nomeFormulario = $this->input->post('usuario');
        $senhaFormulario = $this->input->post('senha');
        $dadosBanco = Person::find(array('name' => $nomeFormulario));
        $nomeBanco = $dadosBanco->name;
        $senhaBanco = $dadosBanco->password;
        if ($nomeFormulario == $nomeBanco && $senhaFormulario == $senhaBanco) {
            $this->layout = 'layoutSistema';
            $this->load->view('admin/home_sistema');
        } else {
            $this->load->view('login_view');
        }
    }
}