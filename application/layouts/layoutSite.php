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
    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <link rel="stylesheet" href="<? echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<? echo base_url('includes/font-awesome/css/font-awesome.min.css') ?>"/>
    <script src="<? echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!--    <script src="--><? // echo base_url('includes/font-awesome/js/font-awesome.min.js') ?><!--"></script>-->
    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}


</head>
<body>
<div id="geral">

    <div id="topo">
        <!--        <ul id="menu">-->
        <!--            <li><a href="#">Link</a></li>-->
        <!---->
        <!--        </ul>-->
    </div>

    <div id="meio">


        {content_for_layout}


    </div>

    <br style="clear: both;"/>

    <div id="rodape">
        <p class="rodape">
            Todos os direitos reservados - Fundação
        </p>
    </div>

</div>
</body>
</html>