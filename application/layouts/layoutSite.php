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

    <!--    carreganod responsive.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>responsive.css"/>


    <!--    carregando animate.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>animate.css"/>

    <!--    carregando pgwslideshow.css -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>pgwslideshow.css"/>
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>pgwslideshow_light.css"/>

    <!--    carregando site.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>style.css"/>
    <!--    carregando bootstrap.min.js-->
    <!--    <script src="htgit tp://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!--    carregando jquery-->
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery.min.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

    <!--    <script type="text/javascript" src="-->


    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery.easing.1.3.js"></script>

    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery.isotope.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>wow.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>classie.js"></script>

    <!--    carousel-->
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>pgwslideshow.js"></script>

    <!--    <script type="text/javascript" src="-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'html5element.js') ?>"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'html5shiv.js') ?>"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'respond-1.1.0.min.js') ?>"></script>
    <![endif]-->

    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}


</head>
<body>
<div style="overflow:hidden;">
<!--    <header class="header" id="header"><!--header-start-->
<!--        <div class="carousel-top">-->
<!--            <ul class="pgwSlideshowLight">-->
<!--                <li><img src="--><?// echo base_url(IMG_SITE . 'bolder.jpg') ?><!--" alt="image1"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '2.jpg') ?><!--" alt="image2"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '3.jpg') ?><!--" alt="image3"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '4.jpg') ?><!--" alt="image4"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '5.jpg') ?><!--" alt="image5"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '6.jpg') ?><!--" alt="image6"/></li>-->
<!--                <li><img src="--><?// echo base_url(IMG_CAROUSEL . '7.jpg') ?><!--" alt="image7"/></li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!--    </header><!--header-end-->
</div>
<nav class="navbar-nav navbar-inverse" id="menu-header"><!--main-nav-start-->
    <div class="container-fluid ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#menu-site" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu-site">
            <ul class="nav navbar-nav nav-justified">
                <li><a href="/parque/#header" rel="relativeanchor">Home</a></li>
                <li><a href="/parque/#historico" rel="relativeanchor">Parque</a></li>
                <li><a href="/parque/#infraestrutura" rel="relativeanchor">Infra-Estrutura</a></li>
                <li><a href="/parque/#esportes">Esportes</a></li>
                <!--                <li><a href="--><? // echo site_url(array(
                //                        'login',
                //                        'viewAtrativos'
                //                    )) ?><!--">Atrativos</a></li>-->
                <li><a href="/parque/#atividade" rel="relativeanchor">Atividades Desenvolvidas</a></li>
                <li><a href="/parque/#atrativosturisticos" rel="relativeanchor">Atrativos Turisticos</a></li>
                <li><a href="/parque/#fotos" rel="relativeanchor">Fotos</a></li>
                <li><a href="/parque/#localizacao" rel="relativeanchor">Localização</a></li>
                <li><a href="/parque/#contact" rel="relativeanchor">Contato</a></li>
                <!--                <li><a href="--><? // echo site_url(array(
                //                        'login',
                //                        'viewnoticias'
                //                    )) ?><!--">Noticias</a></li>-->
                <li><a href="<? echo site_url(array(
                        'login',
                        'fazerlogin'
                    )) ?>">Acesso Restrito</a></li>
            </ul>
        </div>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav>


{content_for_layout}


<footer class="footer">
    <figure>
        <?
        $site_fundacao = 'http://www.gorceixonline.com.br';
        $site_demam = 'http://www.gorceixonline.com.br/demam';
        $site_prefeitura = 'http://www.ouropreto.mg.gov.br/';
        $img_fundacao = array(
            'src' => base_url() . ICONE . "fg.png",
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
<script>
    $(document).ready(function () {
        var nav = $('#menu-header');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 421) {
                nav.addClass("menu-fixo");
            } else {
                nav.removeClass("menu-fixo");
            }
        });
    });
</script>

<script type="text/javascript">
    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100
        }
    );
    wow.init();
</script>
<script type="text/javascript">
    $(window).load(function () {

        $('.main-nav li a').bind('click', function (event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            event.preventDefault();
        });
    })
</script>
<script type="text/javascript">

    $(window).load(function () {


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function () {
            // check if columns has changed
            var currentColumns = Math.floor(( $body.width() - 30 ) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });

</script>

<script type="text/javascript">
    $(document).ready(function () {
        var pgwSlideshow = $('.pgwSlideshowLight').pgwSlideshow();
        pgwSlideshow.startSlide();
        pgwSlideshow.displayList(true);

    });
</script>
</body>
</html>