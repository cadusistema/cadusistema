<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 09:34
 */
class AuthorizationSearch extends ActiveRecord\Model {
    static $table_name = 'authorizationsearch';
    static $has_many = array(
        array(
            'member',
            'foreign_key' => 'authorizationsearchid'
        )
    );
}