<? // echo base_url() ?>

<div style="overflow:hidden;">
    <header class="header" id="header"><!--header-start-->
        <div class="carousel-top">
            <ul class="pgwSlideshowLight">
                <li><img src="<? echo base_url(IMG_CAROUSEL . '1.jpg') ?>" alt="image1"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '2.jpg') ?>" alt="image2"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="image3"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="image4"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '5.jpg') ?>" alt="image5"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '6.jpg') ?>" alt="image6"/></li>
                <li><img src="<? echo base_url(IMG_CAROUSEL . '7.jpg') ?>" alt="image7"/></li>
            </ul>
        </div>

    </header><!--header-end-->
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
                <li><a href="#header">Home</a></li>
                <li><a href="#historico">Parque</a></li>
                <li><a href="#infraestrutura">Infra-Estrutura</a></li>
                <li><a href="#esportes">Esportes</a></li>
                <!--                <li><a href="--><? // echo site_url(array(
                //                        'login',
                //                        'viewAtrativos'
                //                    )) ?><!--">Atrativos</a></li>-->
                <li><a href="#atividade">Atividades Desenvolvidas</a></li>
                <li><a href="#fotos">Fotos</a></li>
                <li><a href="#localizacao">Localização</a></li>
                <li><a href="#contact">Contato</a></li>
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


<section class="main-section paddind" id="historico"><!--main-section-historico-->
    <div class="container text-left wow fadeInUp delay-02s" id="box-toggle">
        <h2>O Parque</h2>

        <p>O Parque Natural Municipal das Andorinhas (PNMA) trata-se de uma Área de Proteção Ambiental (APA) com 558 ha
            de extensão, criada em 1968 com o intuito de preservar os recursos naturais da região e sua exuberante
            beleza natural. O parque conta com vários atrativos turísticos naturais, como a Cachoeira das Andorinhas,
            que deu nome ao parque; o mirante da Pedra do Jacaré de magnífica beleza cênica; trilhas de vários níveis de
            dificuldade onde é possível observar de perto encantadoras fauna e flora nativas. Além disso, o parque
            abriga a cabeceira do rio das Velhas, afluente do rio São Francisco de grande importância para grande parte
            do Brasil, o que torna intensifica a relevância da preservação ambiental desta área. O PNMA apresenta também
            um grande valor cultural e histórico, pois nesta área se iniciaram os primeiros caminhos percorridos pelos
            bandeirantes que deram início ao Ciclo do Ouro das Minas Gerais.</p>  <br>

        <div class="collapse" id="collapsExemplo">

            <div id="imghistorico">
                <img src="<? echo base_url() . IMG_SITE ?>site-historico.png" alt="">
            </div>

            <p>O Parque visa à preservação do seu alto valor biológico, turístico, histórico e de nascentes
                formadoras do Rio das Velhas, importante sub-bacia do Rio São Francisco, que contribui
                significativamente para a qualidade de vida da população, na manutenção da permeabilidade do
                solo e na conservação dos recursos hídricos, faz parte da maior captação de água do sistema de
                abastecimento da Região Metropolitana de Belo Horizonte, através do Sistema Rio Manso.</p>
            <br>
        </div>
        <button id="lermais" type="button" class=" botaoler btn  btn-success btn-lg" onclick="trocaBotao('mais')"
                data-toggle="collapse" data-target="#collapsExemplo">Ler
            <i class="fa fa-plus"
               aria-hidden="true"></i>
        </button>
        <button id="lermenos" type="button" class=" botaoler btn  btn-success btn-lg hidden"
                onclick="trocaBotao('menos')"
                data-toggle="collapse" data-target="#collapsExemplo">Ler
            <i class="fa fa-minus"
               aria-hidden="true"></i>
        </button>
    </div>

</section><!--main-section-end-->
<section class="main-section portaria" id="infraestrutura"><!--main-section-start-->
    <div class="container">
        <h2>Infra-Estrutura</h2>
        <h6>O parque oferece.</h6>
        <div class="row">
            <div class="col-lg-7 col-sm-6 wow fadeInRight delay-02s" style="float: right">
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'administracao.ico') ?>" height="55px"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Centro Administrativo</h3>
                        <p>Centro Administrativo conta com dois vestiários.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'areasports.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Área de Lazer</h3>
                        <p>1 campo de futebol, 1 quadra de areia, 1 quadra poliesportiva .</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'ordonance.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Portaria</h3>
                        <p>Ocupada por guarda-parques e vigias noturnos para garantir a segurança dos <br> visitantes
                            além de funcionar com um ponto de informações turísticas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--main-section-end-->
<section class="main-section-esporte" id="esportes"><!--main-section-start-->
    <div class="container">
        <h2>Esportes</h2>
        <h6>O parque oferece.</h6>
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-02s">
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'bike.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Bicicleta</h3>
                        <p>O parque conta com trilhas que podem ser percorridas com bicicleta, tem-se um destaque
                            especial para a Trilha do Vermelhão, com mais de 3,0 km de extensão em declive acentuado,
                            perfeito para a prática de downhill.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1 img">
                        <img src="<? echo base_url(ICONE . 'caminhada.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Caminhada</h3>
                        <p>Existem várias trilhas de beleza encantadora e diferentes níveis de dificuldade,
                            classificadas e mapeadas conforme a ABNT NBR 15505-2/2008.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'escalada.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Escalada</h3>
                        <p>Há três setores de escalada, cada um com sua dificuldade e modalidades específicas.</p>
                    </div>
                </div>
            </div>

            <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
                <img src="<? echo base_url(IMG_SITE . 'imagemservico.jpg') ?>" alt="">
            </figure>
        </div>
        <button id="lermais" type="button" class=" botaoler btn  btn-success btn-lg wow fadeInLeft delay-05s"
                onclick="window.location='<? echo site_url(array(
                    'login',
                    'viewAtrativos'
                )) ?>'"
                data-toggle="collapse" data-target="#collapsExemplo">Ler
            <i class="fa fa-plus"
               aria-hidden="true"></i>
        </button>
    </div>
</section><!--main-section-end-->
<section class="main-section atividade" id="atividade"><!--main-section-start-->
    <div class="container">
        <h2>Atividades Desenvolvidas</h2>
        <h6>O parque oferece.</h6>
<!--        <div class="row">-->
<!--            <div class="col-lg-7 col-sm-6 wow fadeInRight delay-02s" style="float: right">-->
<!--                <div class="service-list">-->
<!--                    <div class="service-list-col1">-->
<!--                        <img src="--><?// echo base_url(ICONE . 'administracao.ico') ?><!--" height="55px"/>-->
<!--                    </div>-->
<!--                    <div class="service-list-col2">-->
<!--                        <h3>Centro Administrativo</h3>-->
<!--                        <p>Centro Administrativo conta com dois vestiários.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="service-list">-->
<!--                    <div class="service-list-col1">-->
<!--                        <img src="--><?// echo base_url(ICONE . 'areasports.ico') ?><!--"/>-->
<!--                    </div>-->
<!--                    <div class="service-list-col2">-->
<!--                        <h3>Área de Lazer</h3>-->
<!--                        <p>1 campo de futebol,1quadra de areia,1 quadra poliesportiva .</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="service-list">-->
<!--                    <div class="service-list-col1">-->
<!--                        <img src="--><?// echo base_url(ICONE . 'ordonance.ico') ?><!--"/>-->
<!--                    </div>-->
<!--                    <div class="service-list-col2">-->
<!--                        <h3>Portaria</h3>-->
<!--                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</section><!--main-section-end-->
<section id="fotos" class="main-section-carousel"><!--main-section-start-->
    <h2>Fotos</h2>
    <div class="aux">
        <ul class="pgwSlideshowLight">
            <li><img src="<? echo base_url(IMG_CAROUSEL . '1.jpg') ?>" alt="image1"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '2.jpg') ?>" alt="image2"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="image3"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="image4"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '5.jpg') ?>" alt="image5"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '6.jpg') ?>" alt="image6"/></li>
            <li><img src="<? echo base_url(IMG_CAROUSEL . '7.jpg') ?>" alt="image7"/></li>
        </ul>
    </div>

</section><!--main-section-end-->
<section class="main-section" id="localizacao"><!--main-section-start-->
    <div class="container">
        <h2>Localização</h2>
        <iframe class=" text-left wow fadeInUp delay-02s"
                src="https://www.google.com/maps/d/u/0/embed?mid=1JFdIPLpp43YDDGb40JBpMvjJmXU"
                width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
</section><!--main-section-end-->

<section class="parallax1"><!--business-talking-start-->
    <div class="container">
        <!--        <h2>Let’s Talk Business.</h2>-->
    </div>
</section><!--business-talking-end-->
<div class="container">
    <section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Endereço:</h3>
                    <span>Rua das Andorinhas, s/n, Morro São João <br>Ouro Preto - Minas Gerais - Brasil</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Telefone:</h3>
                    <span>(31) 9 7163 04 84 </span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email:</h3>
                    <span>pnma@gorceix.org.br</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>Horário:</h3>
                    <span><strong>Diaramente:</strong> 07:30 - 18:30.<br></span>
                </div>
                <!--                                <ul class="social-link">-->
                <!--                                    <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>-->
                <!--                                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>-->
                <!--                                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>-->
                <!--                                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>-->
                <!--                                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>-->
                <!--                                </ul>-->
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-02s">
                <div class="form">
                    <? //
                    echo form_open("Inicio/perguntaviasite");
                    echo form_input(array(
                        'class'       => 'input-text',
                        'type'        => 'text',
                        'name'        => 'nome',
                        'placeholder' => 'Seu Nome'
                    ));
                    echo form_input(array(
                        'class'       => 'input-text',
                        'name'        => 'email',
                        'type'        => 'email',
                        'placeholder' => 'Seu E-mail'
                    ));
                    echo form_textarea(array(
                        'class'       => 'input-text text-area',
                        'cols'        => '0',
                        'rows'        => '0',
                        'name'        => 'mensagem',
                        'placeholder' => 'Sua Mensagem'
                    ));
                    echo form_submit(array(
                        'class' => 'input-btn',
                    ), 'Enviar Mensagem');
                    echo form_close();
                    ?>
                </div>


            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <figure>
        <?
        $site_fundacao = 'http://www.gorceixonline.com.br';
        $site_demam = 'http://www.gorceixonline.com.br/demam';
        $site_prefeitura ='http://www.ouropreto.mg.gov.br/';

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
        echo anchor($site_prefeitura, img($img_pm), array('target' => '_blank','class'=>'footer-img'));
        echo anchor($site_fundacao, img($img_fundacao), array('target' => '_blank','class'=>'footer-img'));
        echo anchor($site_demam, img($img_demam), array('target' => '_blank','class'=>'footer-img'));
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
    //    função para trocar o botao de lermais para lermenos ou vice-versa
    function trocaBotao(arg) {

        switch (arg) {
            case "mais":
                $("#lermenos").removeClass('hidden');
                $("#lermais").addClass('hidden');
                break;
            case "menos":
                $("#lermais").removeClass('hidden');
                $("#lermenos").addClass('hidden');
                break;
        }

    }

    //    $(function () {
    //        $("a").click(function (event) {
    //            event.preventDefault();
    //            var idElemento = $(this).attr("href");
    //            var deslocamento = $(idElemento).offset().top;
    //            $('html, body').animate({scrollTop: deslocamento}, 'slow');
    //        });
    //    });

    $(document).ready(function () {
        var pgwSlideshow = $('.pgwSlideshowLight').pgwSlideshow();
        pgwSlideshow.startSlide();
        pgwSlideshow.displayList(false);

    });
</script>

