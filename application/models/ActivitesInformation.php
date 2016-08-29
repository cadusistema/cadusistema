<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 10:47
 */
class ActivitesInformation extends ActiveRecord\Model {
    static $table_name = 'activitiesofinformation';
    static $has_many = array(
        array(
            'authorizationsearch',
            'foreign_key' => 'activitiesofinformationid'
        )
    );
}