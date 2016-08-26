<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 26/08/2016
 * Time: 10:28
 */
class Visitor extends Activerecord\Model {
    static $table_name = 'visitor';
    static $has_many = array(
        array(
            'datevisit',
            'foreign_key' => 'visitorid'
        )
    );
}