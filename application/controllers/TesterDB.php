<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 14/07/2016
 * Time: 13:35
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class TesterDB extends CI_Controller {
    public $title = 'Área Administrativa';
    public $layout;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $teste = array();
//        le a tabela person do banco park
        $teste['person'] = $dados = Person::all();
//        le a tabela user do banco park
        $teste['user'] = $dados = User::all();
        $firstPerson = Person::first();
//        atraves da tabela person acesso user
        $teste['person_user'] = $firstPerson->user;
//        le a tabela historic
        $teste['historic'] = Historic::all();
        $auxPerson = Person::first();
        $auxUser = User::first();
//        acessa atraves da tabela user a tabela historic
        $teste['user_historic'] = $auxUser->historic;
//        le a tabela visitor
        $teste['visitor'] = PersonToDateVisit::all();
//        acessando da tabela visitor atraves da tabela person
//        $teste['visitor_person'] = $auxPerson->visitor;
//        lendo a tabela DateVisit
        $teste['datevisit'] = DateVisit::all();
//        acessando a tabela Datevisit atraves da tabela visitor
        $auxVisitor = PersonToDateVisit::first();
//        $teste['datevisit_visitor'] = $auxVisitor->datevisit;
//        acessando a tabela phone_to_person
        $teste['phone_to_person'] = PhoneToPerson::all();
//        acessando a tabela phone -- ERRO
        $teste['phone'] = Phone::all();
//        acessando a tabela authorizationsearch
        $teste['authorizationsearch'] = AuthorizationResearch::all();
//        acessando a tabela authorizationsearch via user
        $teste['authorizationsearch_user'] = $auxUser->authorizationresearch;

//        acessando a tabela members
        $teste['members'] = Member::all();

        $auxAuthorization = AuthorizationResearch::first();

//        acessando members via authorization
//        $teste['auxAuthorization_member'] = $auxAuthorization->member;

//        acessando a tabela activities of information
        $teste['activities'] = ActivitesInformation::all();
         

        $teste['membertoauthorizationresearch'] = MemberToAuthorizationResearch::all();
//        echo '<pre>';
//        print_r($auxAuthorization->member);
//        echo '</pre>';


        $this->load->view('testerDB/testerDB', $teste);
    }
}