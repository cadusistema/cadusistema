<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 22/07/2016
 * Time: 10:49
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<? echo base_url() . INCLUDEPATH ?>bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>font-awesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>basic.css"/>

    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>


    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}

</head>
<body>
<!--<div id="geral">-->

{content_for_layout}

<!--</div>-->
</body>
</html>