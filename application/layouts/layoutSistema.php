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
    <link rel="shortcut icon" href="<? echo base_url(ICONE . 'andorinhas_logo.ico') ?>" type="img/x-icon">

    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/font-awesome/css/font-awesome.min.css"/>

    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSSPATH ?>basic.css"/>

    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>


    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}

</head>
<body>
<div id="geral">
    <div id="topo">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<? echo site_url('HomeSistema') ?>">Area Administrativa</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                        <!--                        <li><a href="#">Link</a></li>-->
                        <!--                        <li class="dropdown">-->
                        <!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
                        <!--                               aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                        <!--                            <ul class="dropdown-menu">-->
                        <!--                                <li><a href="#">Action</a></li>-->
                        <!--                                <li><a href="#">Another action</a></li>-->
                        <!--                                <li><a href="#">Something else here</a></li>-->
                        <!--                                <li role="separator" class="divider"></li>-->
                        <!--                                <li><a href="#">Separated link</a></li>-->
                        <!--                                <li role="separator" class="divider"></li>-->
                        <!--                                <li><a href="#">One more separated link</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </li>-->
                    </ul>
                    <!--                    <form class="navbar-form navbar-left">-->
                    <!--                        <div class="form-group">-->
                    <!--                            <input type="text" class="form-control" placeholder="Search">-->
                    <!--                        </div>-->
                    <!--                        <button type="submit" class="btn btn-default">Submit</button>-->
                    <!--                    </form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Você esta conectado
                                como: <? echo $this->session->userdata('nome'); ?> <i
                                    class="fa fa-cog" aria-hidden="true"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="<? echo site_url('HomeSistema/logout') ?>"><i class="fa fa-sign-out"
                                                                                   aria-hidden="true"></i> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <!--    <div id="meio">-->

    <div class="content">

        {content_for_layout}

    </div>

    <!--    </div>-->

    <!--    <br style="clear: both;"/>-->
    <!---->
    <!--    <div class="container-fluid">-->
    <!--        <p class="rodape">-->
    <!--            Todos os direitos reservados - Bla Bla Bla-->
    <!--        </p>-->
    <!--    </div>-->

</div>
</body>
</html>