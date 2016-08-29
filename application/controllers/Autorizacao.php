<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 11:30
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizacao extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function salvaAutorizacaoDB() {
        echo "oi";
        echo '<pre>';
        print_r($this->input->post('dataemissao'));
        echo '</pre>' ;
    }
}