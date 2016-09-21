<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 05/09/2016
 * Time: 11:01
 */
class MemberToAuthorizationResearch extends ActiveRecord\Model {
    static $table_name = 'member_to_authorizationresearch';
    static $belongs_to = array(
        array(
            'member',
            'foreign_key' => 'memberid'
        ),
        array(
            'authorizationresearch',
            'foreign_key' => 'authorizationresearchid'
        )
    );
}