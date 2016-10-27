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
//        TODO salvar o tipo de atividade no banco de dados.
        $dadosForm = $this->input->post();
        try {
            if (isset($dadosForm['namemember'])) {
                $total = count($dadosForm['namemember']);
                $nomes = $dadosForm['namemember'];
                $insts = $dadosForm['institutionmember'];
                $cpfs = $dadosForm['cpfmember'];
//          apagando os dados do post
                unset($dadosForm['namemember']);
                unset($dadosForm['institutionmember']);
                unset($dadosForm['cpfmember']);
//            salvando na tabela na authorizationResearch
                $authorization_id = AuthorizationResearch::create($dadosForm);
//            recuperando os membros do formulario
                for ($i = 0; $i < $total; $i++) {
                    $salvarDB = array(
                        'name'        => $nomes[$i][0],
                        'institution' => $insts[$i][0],
                        'cpf'         => $cpfs[$i][0]
                    );
//                salva os membros no banco
                    $member_id = Member::create($salvarDB);
//                criando o array com os dados a serem salvos na tabela MemberToAuthorizationResearch
                    $salvamembertoauthorization = array(
                        'memberid'                => $member_id->membersid,
                        'authorizationresearchid' => $authorization_id->authorizationresearchid
                    );
                    MemberToAuthorizationResearch::create($salvamembertoauthorization);
                }
            } else {
                //caso nao haja nenhum membro
                AuthorizationResearch::create($this->input->post());
            }
        } catch (ActiveRecordException $exception) {
            echo $exception->getMessage();
        }
    }
}