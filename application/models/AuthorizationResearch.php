<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 09:34
 */
class AuthorizationResearch extends ActiveRecord\Model {
    static $table_name = 'authorizationresearch';
    static $primary_key = 'authorizationresearchid';
    static $has_many = array(
        array(
            'member_to_authorizationresearch',
            'foreign_key' => 'authorizationresearchid'
        )
//        array('member_to_authorizationresearch')
    );
//    static $belongs_to = array(
//        'activitiesofinformation',
//        'foreign_key' => 'activitiesofinformationid',
////        'class_name'  => 'ActivitesInformation'
//    );
}