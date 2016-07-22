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
    public $layout = 'outro';

    /**
     * Titulo default.
     */
    public $title = '::: Site46789 :::';

    public function index() {
        $this->load->view('site');
    }
}