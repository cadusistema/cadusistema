<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 21/07/2016
 * Time: 16:26
 */
Class Person extends ActiveRecord\Model {
    static $table_name = 'person';
    static $has_many = array(
        array(
            'user',
            'foreign_key' => 'personid'
        ),
        array(
            'visitor',
            'foreign_key' => 'personid'
        ),
        array(
            'phone_to_person',
            'foreign_key' => 'personid'
        )
    );
}