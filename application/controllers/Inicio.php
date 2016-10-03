<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 22/07/2016
 * Time: 09:22
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inicio extends CI_Controller {
    /**
     * Layout default utilizado pelo controlador.
     */
    public $layout = 'layoutSite';
    /**
     * Titulo default.
     */
    public $title = 'Parque das Andorinhas';

    public function index() {
        $this->load->view('site/site');
    }

    /**
     * Monta email para enviar como pergunta
     */
    public function montaemail($nome, $email, $mensagem) {
        $resp = "Nome: " . $nome . "<br><br>" . "E-mail: " . $email . "<br><br>" . "Mensagem: " . $mensagem . "<br><br>";

        return $resp;
    }

    /**
     * Função para enviar pergunta do site para o responsavel em responder
     */
    public function perguntaviasite() {
        $menagem = $this->input->post('mensagem');
        $email = $this->input->post('email');
        $nome = $this->input->post('nome');
        $this->email->from($email, $nome);
        $this->email->to($email);
//        $this->email->cc('outro@outro-site.com');
//        $this->email->bcc('fulano@qualquer-site.com');
        $this->email->subject('Pergunta enviada via site');
        $this->email->message($this->montaemail($nome, $email, $menagem));
        $this->email->send();
    }
}