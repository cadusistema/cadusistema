<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 10:47
 */
class ActivitesInformation extends ActiveRecord\Model {
    static $table_name = 'activitiesofinformation';
    static $primary_key = 'activitiesofinformationid';
//    static $has_many = array(
//        array(
//            'authorizationresearch',
//            'foreign_key' => 'activitiesofinformationid',
//            'class_name' => 'AuthorizationResearch'
//        )
//    );
}