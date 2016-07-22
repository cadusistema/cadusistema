<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 12/07/2016
 * Time: 16:30
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Teste_Controller extends CI_Controller {
    public function index() {
        #$aux = "Fabio José de Mendonça Junior";
        #$this->load->model("Teste");
        #$aux = $this->UserAR->leBanco();
        $aux = Person::find('all');
        $dados = array("teste" => $aux);
        #$this->load->view("lendobanco",$dados);
        $this->load->view("login_view");
    }
}