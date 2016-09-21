<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 25/08/2016
 * Time: 10:27
 */
class User extends ActiveRecord\Model {
    static $table_name = 'user';
    static $has_many = array(
        array(
            'historic',
            'foreign_key' => 'userid'
        ),
        array(
            'authorizationresearch',
            'foreign_key' => 'userid'
        )
    );
}