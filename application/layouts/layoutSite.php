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
<section id="menu">
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
                    <li><a href="#" data-id="carousel" class="scroll-link"><img src="<? echo base_url(ICONE . 'logo_barra.png') ?>" height="30px" alt="">
                            <b>Parque das Andorinhas</b></a></li>
                    <li><a href="#" data-id="infra" class="scroll-link">Infra-Estrutura <span
                                class="sr-only">(current)</span></a></li>
                    <li><a href="#" data-id="esportes" class="scroll-link">Esportes</a></li>
                    <li><a href="#" data-id="atividadesdesenvolvidas" class="scroll-link">Atividades Desenvolvidas</a>
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
                <img src="<? echo base_url(IMG_CAROUSEL . 'jacare.jpg') ?>" alt="...">

                    <a href="#trilha" data-id="atrativos" class="scroll-link carousel-black esportes">
                        <div class="carouselbar">
                            <h1>Mirantes</h1>
                        </div>
                    </a>
                </img>

            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ATRATIVOS . 'cachoeiraveudanoiva.jpg') ?>" alt="...">
                    <a href="#" data-id="atrativos" class="scroll-link">
                        <div class="carouselbar">
                            <h1>Cachoeiras</h1>
                        </div>
                    </a>
                </img>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ATRATIVOS . 'trilhasoriginal.jpg') ?>" alt="...">
                    <a href="#" data-id="atrativos" class="scroll-link">
                        <div class="carouselbar">
                            <h1>Trilhas</h1>
                        </div>
                    </a>
                </img>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ESPORTES . 'boulderoriginal.jpg') ?>" alt="...">
                <a href="#" data-id="esportes" class="scroll-link">
                    <div class="carouselbar">
                        <h1>Boulder</h1>
                    </div>
                </a>
                </img>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ESPORTES. 'highlineoriginal.jpg') ?>" alt="...">
                <a href="#" data-id="esportes" class="scroll-link">
                    <div class="carouselbar">
                        <h1>High Line</h1>
                    </div>
                </a>
                </img>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ESPORTES . 'mountainbikeoriginal.jpg') ?>" alt="...">
                <a href="#" data-id="esportes" class="scroll-link">
                    <div class="carouselbar">
                        <h1>Mountain Bike</h1>
                    </div>
                </a>
                </img>
            </div>
            <div class="item">
                <img src="<? echo base_url(IMG_ESPORTES . 'escaladaoriginal.jpg') ?>" alt="...">
                <a href="#" data-id="esportes" class="scroll-link">
                    <div class="carouselbar">
                        <h1>Escalada</h1>
                    </div>
                </a>
                </img>
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
        var offSet = 50;
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
    $('.btn-black').click(
        function () {

            callClick($(this));
        }
    );

    $('.carousel-black').click(

        function () {
            alert(1);
            callClick($(this));
        }
    );

    function callClick(element){
        var img = element.attr('href');
        img = img.replace("#", "");
        var at = null;

        if (element.attr('class').indexOf('atrativos') !== -1)
            at = document.getElementById('atrativos');
        else
            at = document.getElementById('esportes');
        at.className = "fundo " + img;
    }

    //randomizer do carousel
    (function($){
        $.fn.shuffle = function() {
            return this.each(function(){
                var items = $(this).children();
                return (items.length)
                    ? $(this).html($.shuffle(items))
                    : this;
            });
        }

        $.shuffle = function(arr) {
            for(
                var j, x, i = arr.length; i;
                j = parseInt(Math.random() * i),
                    x = arr[--i], arr[i] = arr[j], arr[j] = x
            );
            return arr;
        }
    })(jQuery);
    $('#maincarousel').shuffle();
</script>
</body>
</html>