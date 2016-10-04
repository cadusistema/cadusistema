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
$config['protocol'] = 'pop';
$config['smtp_host'] = 'email-ssl.com.br';
$config['smtp_port'] = '110';
$config['smtp_timeout'] = '60';
$config['smtp_user'] = 'contato.pnma';
$config['smtp_pass'] = 'gx@pnma1';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html';

/* End of file email.php */
/* Location: ./system/application/config/email.php */