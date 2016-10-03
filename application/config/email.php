<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 27/09/2016
 * Time: 10:57
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| EMAIL CONFING
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = '465';
$config['smtp_timeout'] = '60';
$config['smtp_user'] = 'testesiteop';
$config['smtp_pass'] = 'teste1234';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html';

/* End of file email.php */
/* Location: ./system/application/config/email.php */