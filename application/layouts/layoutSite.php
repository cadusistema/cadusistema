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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--    <link rel="icon" href="favicon.png" type="image/png">-->
    <link rel="shortcut icon" href="<? echo base_url(ICONE . 'andorinhas_logo.ico') ?>" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

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
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery-ui.min.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>


    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}


</head>
<body>
<div class="container-fluid col-lg-12">
    <section id="menu">
        <nav class="navbar navbar-default navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="superheader" class="navbar-header">
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
                    <ul id="supermenu" class="nav navbar-nav nav-justified">
                        <li><a href="#" data-id="carousel" class="scroll-link"><img
                                    src="<? echo base_url(ICONE . 'logo_barra.png') ?>" height="30px">
                                Home</a></li>
                        <li><a href="#" data-id="oparque" class="scroll-link">O Parque</a></li>
                        <li><a href="#" data-id="esportes" class="scroll-link">Esportes</a></li>
                        <li><a href="#" data-id="atividadesdesenvolvidas" class="scroll-link">Atividades
                                Desenvolvidas</a>
                        </li>
                        <li><a href="#" data-id="atrativos" class="scroll-link">Atrativos Turísticos</a></li>
                        <li><a href="#" data-id="localizacao" class="scroll-link">Localização</a></li>
                        <li><a href="#" data-id="contato" class="scroll-link">Contato</a></li>
                        <li><a href="#">Entrar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </section>
    <section id="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div id="maincarousel" class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_CAROUSEL. 'jacare_1800.jpg') ?>">
                    </div>
                    <a href="#" data-id="atrativos" class="scroll-link"
                       onclick="changeBackground('atrativos','mirante')">
                        <div class="carouselbar">
                            <h1>Mirantes</h1>
                        </div>
                    </a>

                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_ATRATIVOS. 'cachoeiradafolhinha_1800.jpg') ?>">
                    </div>
                    <a href="#" data-id="atrativos" class="scroll-link"
                       onclick="changeBackground('atrativos','cachoeira')">
                        <div class="carouselbar">
                            <h1>Cachoeiras</h1>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_PARQUE. 'portaria.jpg') ?>">
                    </div>
                    <a href="#" data-id="atrativos" class="scroll-link"
                       onclick="changeBackground('oparque','oparquesobre')">
                        <div class="carouselbar">
                            <h1>O PARQUE</h1>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_ESPORTES. 'boulderoriginal.jpg') ?>">
                    </div>
                    <a href="#" data-id="esportes" class="scroll-link" onclick="changeBackground('esportes','boulder')">
                        <div class="carouselbar">
                            <h1>Boulder</h1>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_ESPORTES. 'highline5.jpg') ?>">
                    </div>
                    <a href="#" data-id="esportes" class="scroll-link"
                       onclick="changeBackground('esportes','highline')">
                        <div class="carouselbar">
                            <h1>High Line</h1>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_ESPORTES. 'mountainbike.jpg') ?>">
                    </div>
                    <a href="#" data-id="esportes" class="scroll-link"
                       onclick="changeBackground('esportes','mountainbike')">
                        <div class="carouselbar">
                            <h1>Mountain Bike</h1>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="fillcarousel"
                         style="background-image:url(<? echo base_url(IMG_ESPORTES. 'escaladabranca3.jpg') ?>">
                    </div>
                    <a href="#" data-id="esportes" class="scroll-link"
                       onclick="changeBackground('esportes','escalada')">
                        <div class="carouselbar">
                            <h1>Escalada</h1>
                        </div>
                    </a>
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
        <div class="img_footer">
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
//            'src' => base_url() . ICONE . "logopm.png",
'src' => base_url() . ICONE . "rsz_logopm.png",
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
        </div>
    </footer>
</div>
<script type="text/javascript">
    //    trava o zoom do mapa
    $('.mapa').click(function () {
        $('.mapa iframe').css("pointer-events", "auto");
    });

    // navigation click actions
    $(document).ready(function () {

        $('.scroll-link').on('click', function (event) {
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function (event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });

    // scroll function
    function scrollToID(id, speed) {
        var offSet;
        if(window.innerWidth > 768)
            offSet = document.getElementById('supermenu').offsetHeight;
        else
            offSet = document.getElementById('superheader').offsetHeight;
        console.log(offSet);
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop: targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function () {
            }
        };
    }
    //    altera imagem de fundo da section atrativos e esportes


    function changeBackground(divid, link) {
        var at = document.getElementById(divid);
        at.className = "fundo " + link;
        $("#ul" + divid + ">li.active").removeClass("active");
        $("#div" + divid + ">div.active").removeClass("active");
        $("#" + link).addClass('active');
        $("#li" + link).addClass("active");


    }

    //randomizer do carousel
    (function ($) {
        $.fn.shuffle = function () {
            return this.each(function () {
                var items = $(this).children();
                return (items.length)
                    ? $(this).html($.shuffle(items))
                    : this;
            });
        }

        $.shuffle = function (arr) {
            for (
                var j, x, i = arr.length; i;
                j = parseInt(Math.random() * i),
                    x = arr[--i], arr[i] = arr[j], arr[j] = x
            );
            return arr;
        }
    })(jQuery);
    $('#maincarousel').shuffle();

    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
    var counter = '';
    //move whole section
    function advance(id, classToShow) {
        if (counter.indexOf(id) == -1) {
            counter += id;
            $("#slider" + id + ">div.lateral" + id).addClass("hidden");
            $('#' + classToShow).removeClass('hidden');
            var slider = $('#central' + id);
            var sliderWidth = document.getElementById('central' + id).clientWidth * 1.05;
            $('#slider' + id).animate({left: '-=' + sliderWidth}, 1000);
        }


    }

    //retreat whole section
    function retreat(id) {
        if (counter.indexOf(id) !== -1) {
            counter = counter.replace(id, '');
            var slider = $('#central' + id);
            var sliderWidth = document.getElementById('central' + id).clientWidth * 1.05;
            $('#slider' + id).animate({left: '+=' + sliderWidth}, 1000);
        }
    }

    //Stack menu when collapsed
    $('#bs-example-navbar-collapse-12').on('show.bs.collapse', function() {
        console.log('entrou-esportes');
        $('.nav-tabs').addClass('nav-stacked');
    });

    //Unstack menu when not collapsed
    $('#bs-example-navbar-collapse-12').on('hide.bs.collapse', function() {
        console.log('saiu-esportes');
        $('.nav-tabs').removeClass('nav-stacked');
    });
    //Stack menu when collapsed
    $('#bs-example-navbar-collapse-13').on('show.bs.collapse', function () {
        console.log('entrou-atrativos');
        $('.nav-tabs').addClass('nav-stacked');
    });

    //Unstack menu when not collapsed
    $('#bs-example-navbar-collapse-13').on('hide.bs.collapse', function () {
        console.log('saiu-atrativos');
        $('.nav-tabs').removeClass('nav-stacked');
    });
    $('#bs-example-navbar-collapse-14').on('show.bs.collapse', function () {
        console.log('entrou');
        $('.nav-tabs').addClass('nav-stacked');
    });

    //Unstack menu when not collapsed
    $('#bs-example-navbar-collapse-14').on('hide.bs.collapse', function () {
        console.log('saiu');
        $('.nav-tabs').removeClass('nav-stacked');
    });
    $('#bs-example-navbar-collapse-15').on('show.bs.collapse', function () {
        console.log('entrou-atrativos-lateral');
        $('.nav-tabs').addClass('nav-stacked');
    });

    //Unstack menu when not collapsed
    $('#bs-example-navbar-collapse-15').on('hide.bs.collapse', function () {
        console.log('saiu-atrativos-lateral');
        $('.nav-tabs').removeClass('nav-stacked');
    });
    $('#bs-example-navbar-collapse-16').on('show.bs.collapse', function () {
        console.log('entrou-cahoeira-lateral');
        $('.nav-tabs').addClass('nav-stacked');
    });

    //Unstack menu when not collapsed
    $('#bs-example-navbar-collapse-16').on('hide.bs.collapse', function () {
        console.log('saiu-cahoeira-lateral');
        $('.nav-tabs').removeClass('nav-stacked');
    });


</script>
</body>
</html>