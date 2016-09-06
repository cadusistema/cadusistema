<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 11:30
 */
use ActiveRecord\ActiveRecordException;

defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizacao extends CI_Controller {
//    public $layout = 'layoutSistema';
    public function __construct() {
        parent::__construct();
    }

    public function salvaAutorizacaoDB() {
//        TODO capturar o formulario e fazer os devidos tratamentos do formulario. Dividir em dois processo: Com membros adicionais e sem membros adicionais
        $dadosForm = $this->input->post();
        if (isset($dadosForm['namemember'])) {
            echo '<pre>';
            print_r($dadosForm);
            echo '</pre>';
        } else {
//            echo "else";
            try {
                AuthorizationResearch::create($this->input->post());
            } catch (ActiveRecordException $exception) {
                echo $exception->getMessage();
            }
//            echo '<pre>';
//            print_r($dadosForm);
//            echo '</pre>';
        }
    }
}