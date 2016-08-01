<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 01/08/2016
 * Time: 15:05
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeSistema extends CI_Controller {

    public $titlePage = "Home Sistema";

    public function __construct() {
        parent::__construct();
    }

    public function fichaautorizacao() {
        $this->titlePage = "Ficha de Cadastro";
        $this->load->view("admin/autorizacaoparapesquisa");
    }
}