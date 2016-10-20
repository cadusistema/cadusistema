<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 18/10/2016
 * Time: 08:56
 */
class C_TesteViews extends CI_Controller{
//    public $layout = 'layoutSite';

    public function index(){
        $this->load->view('teste/testeview');
    }
}