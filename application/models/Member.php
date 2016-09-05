<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 29/08/2016
 * Time: 10:22
 */
class Member extends ActiveRecord\Model{
    static $table_name = 'member';
    static $has_many = array(
        array('member_to_authorizationresearch'),
        array('authorizationresearch','through'=>'member_to_authorizationresearch')
    );

}