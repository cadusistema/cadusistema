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


    <!--    <link rel="icon" href="favicon.png" type="image/png">-->
    <link rel="shortcut icon" href="<? echo base_url(ICONE . 'andorinhas_logo.ico') ?>" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'
        rel='stylesheet' type='text/css'>


    <!--    carregando bootstrap-->
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/bootstrap/css/bootstrap.min.css"/>
    <!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <!--    carregando font-awesome-->
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/font-awesome/css/font-awesome.min.css"/>

    <!--    carregando site.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>style.css"/>
    <!--    carregando bootstrap.min.js-->
    <!--    <script src="htgit tp://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!--    carregando jquery-->
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery.min.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

    <!--    <script type="text/javascript" src="-->


    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>


    <!--    <script type="text/javascript" src="-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">


    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}


</head>
<body>
<nav class="navbar navbar-default navbar navbar-fixed-top   ">
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
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-justified">
                <li><a href="#"><img src="<? echo base_url(ICONE . 'logo_barra.png') ?>" height="30px" alt=""><b> Parque
                            das Andorinhas</b></a></li>
                <li><a href="#">Infra-Estrutura <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Esportes</a></li>
                <li><a href="#">Atividades Desenvolvidas</a></li>
                <li><a href="#">Atrativos Turísticos</a></li>
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Localização</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<section>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<? echo base_url(IMG_CAROUSEL . 'jacare.jpg') ?>" alt="...">
                <div class="carousel-caption">
                    <h3>Foto Parque</h3>
                    <p>Vista do parque das Andorinhas</p>
                </div>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_CAROUSEL . '2.jpg') ?>" alt="...">
                <div class="carousel-caption">
                    <h3>Foto Parque</h3>
                    <p>Vista do parque das Andorinhas</p>
                </div>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">
                <div class="carousel-caption">
                    <h3>Foto Parque</h3>
                    <p>Vista do parque das Andorinhas</p>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="...">
                <div class="carousel-caption">
                    <h3>Foto Parque</h3>
                    <p>Vista do parque das Andorinhas</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


{content_for_layout}


<footer class="footer">
    <figure>
        <?
        $site_fundacao = 'http://www.gorceixonline.com.br';
        $site_demam = 'http://www.gorceixonline.com.br/demam';
        $site_prefeitura = 'http://www.ouropreto.mg.gov.br/';
        $img_fundacao = array(
            'src' => base_url() . ICONE . "logo_rodape.png",
            'alt' => 'logo da fundação gorceix'
        );
        $img_demam = array(
            'src' => base_url() . ICONE . "demam.png",
            'alt' => 'logo do departamento de meio ambiente'
        );
        $img_pm = array(
            'src' => base_url() . ICONE . "logopm.png",
            'alt' => 'logo da prefeitura municipal de ouro preto'
        );
        echo anchor($site_prefeitura, img($img_pm), array(
            'target' => '_blank',
            'class'  => 'footer-img'
        ));
        echo anchor($site_fundacao, img($img_fundacao), array(
            'target' => '_blank',
            'class'  => 'footer-img'
        ));
        echo anchor($site_demam, img($img_demam), array(
            'target' => '_blank',
            'class'  => 'footer-img'
        ));
        ?>
    </figure>
</footer>
</body>
</html>