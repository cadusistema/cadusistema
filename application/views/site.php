<div style="overflow:hidden;" class="parallax">
    <header class="header id=" header
    "><!--header-start-->
    <!--        <div class="container">-->
    <!--            <figure class="logo animated fadeInDown delay-07s">-->
    <!--                <a href="#"><img src="--><? // echo base_url(IMG_SITE.'logo.png') ?><!--" alt=""></a>-->
    <!--            </figure>-->
    <!--            <h1 class="animated fadeInDown delay-07s">Welcome To Knight Studios</h1>-->
    <!--            <ul class="we-create animated fadeInUp delay-1s">-->
    <!--                <li>We are a digital agency that loves crafting beautiful websites.</li>-->
    <!--            </ul>-->
    <!--            <a class="link animated fadeInUp delay-1s" href="#">Get Started</a>-->
    <!--        </div>-->
    <!--</div>-->
    </header><!--header-end-->
</div>


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
    <div class="container nav-justified">
        <ul class="main-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="#historico">Histórico</a></li>
            <li><a href="#infraestrutura">Infra-Estrutura</a></li>
            <li><a href="#esportes">Esportes</a></li>
            <li><a href="#atividade">Atividades Desenvolvidas</a></li>
            <li><a href="#fotos">Fotos</a></li>
            <li><a href="#localizacao">Localização</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="<? echo site_url('login/fazerlogin') ?>">Acesso Restrito</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->
<section class="main-section paddind" id="historico"><!--main-section-historico-->
    <div class="container text-left wow fadeInUp delay-03s" id="box-toggle">
        <h2>Histórico</h2>
        <!--        <h6>Fresh portfolio of designs that will keep you wanting more.</h6>-->
        <!--        <div class="tgl">-->
        <p>Contido na Área de Proteção Ambiental Estadual da Cachoeira das Andorinhas, foi criado pela
            Lei nº 390 de 30 de dezembro de 1968 para preservar os recursos naturais da região e a nascente
            do Rio das Velhas. Atualmente, possui uma área de 557,9 ha. O ponto central e o principal
            atrativo é a Cachoeira que dá o nome ao Parque. Nessa região iniciou-se o Ciclo do Ouro das
            Minas Gerais, referência para os caminhos percorridos pelos Bandeirantes, que mais tarde
            originou a cidade de Ouro Preto. Daí sua importância cultural e histórica.</p>  <br>
        <!--        </div>-->
        <div id="tgl">
            <p>O Parque visa à preservação do seu alto valor biológico, turístico, histórico e de nascentes
                formadoras do Rio das Velhas, importante sub-bacia do Rio São Francisco, que contribui
                significativamente para a qualidade de vida da população, na manutenção da permeabilidade do
                solo e na conservação dos recursos hídricos, faz parte da maior captação de água do sistema de
                abastecimento da Região Metropolitana de Belo Horizonte, através do Sistema Rio Manso.</p>
            <br>
        </div>
        <button type="button" class="link animated fadeInUp delay-6s btn bg-primary btn-toggle" data-element="#tgl">Ler <i class="fa fa-plus"
                                                                                         aria-hidden="true"></i>
        </button>

    </div>

</section><!--main-section-end-->
<section class="main-section" id="infraestrutura"><!--main-section-start-->
    <div class="container">
        <h2>Infra-Estrutura</h2>
        <h6>O parque oferece.</h6>
        <figure class="col-lg-4 col-sm-6  text-left wow fadeInUp delay-02s">
            <img src="<? echo base_url(IMG_SITE . 'imagemservico.jpg') ?>" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-7 col-sm-6 wow fadeInRight delay-05s" style="float: right">
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
                        <p>1 campo de futebol,1quadra de areia,1 quadra poliesportiva .</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'ordonance.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Portaria</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'flaldario.ico') ?>" height="50px"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Fraldário</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
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
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'bike.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Bicicleta</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'rapel.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Rapel</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'caminhada.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Caminhada</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'escalada.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Escalada</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                <img src="<? echo base_url(IMG_SITE . 'imagemservico.jpg') ?>" alt="">
            </figure>

        </div>
    </div>
</section><!--main-section-end-->
<section class="main-section" id="atividade"><!--main-section-start-->
    <div class="container">
        <h2>Atividades Desenvolvidas</h2>
        <h6>O parque oferece.</h6>
        <figure class="col-lg-4 col-sm-6  text-left wow fadeInUp delay-02s">
            <img src="<? echo base_url(IMG_SITE . 'imagemservico.jpg') ?>" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-7 col-sm-6 wow fadeInRight delay-05s" style="float: right">
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
                        <p>1 campo de futebol,1quadra de areia,1 quadra poliesportiva .</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'ordonance.ico') ?>"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Portaria</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <img src="<? echo base_url(ICONE . 'flaldario.ico') ?>" height="50px"/>
                    </div>
                    <div class="service-list-col2">
                        <h3>Fraldário</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--main-section-end-->
<section class="main-section-carousel" id="fotos"><!--main-section-start-->
    <h2>Fotos</h2>
    <div class="wrapper">
        <ul id="sb-slider" class="sb-slider">
            <li>
                <img src="<? echo base_url(IMG_SITE . '1.jpg') ?>" alt="image1"/>
                <div class="sb-description">
                    <h3>Creative Lifesaver</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '2.jpg') ?>" alt="image2"/>
                <div class="sb-description">
                    <h3>Honest Entertainer</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '3.jpg') ?>" alt="image1"/>
                <div class="sb-description">
                    <h3>Brave Astronaut</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '4.jpg') ?>"
                     alt="image1"/>
                <div class="sb-description">
                    <h3>Affectionate Decision Maker</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '5.jpg') ?>"
                     alt="image1"/>
                <div class="sb-description">
                    <h3>Faithful Investor</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '6.jpg') ?>"
                     alt="image1"/>
                <div class="sb-description">
                    <h3>Groundbreaking Artist</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '7.jpg') ?>"
                     alt="image1"/>
                <div class="sb-description">
                    <h3>Selfless Philantropist</h3>
                </div>
            </li>
        </ul>

        <div id="shadow" class="shadow"></div>

        <div id="nav-arrows" class="nav-arrows">
            <a href="#">Next</a>
            <a href="#">Previous</a>
        </div>

        <div id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div><!-- /wrapper -->


</section><!--main-section-end-->
<section class="main-section" id="localizacao"><!--main-section-start-->
    <div class="container">
        <h2>Localização</h2>
        <iframe class=" text-left wow fadeInUp delay-06s"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.4519230294645!2d-43.49199828452232!3d-20.364248386362057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa40b4e8f8623ff%3A0x993ec00e29f4d88b!2sParque+Natural+Municipal+Cachoeira+das+Andorinhas!5e0!3m2!1spt-BR!2sbr!4v1470850218849"
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
                    <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Telefone:</h3>
                    <span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email:</h3>
                    <span>hello@knightstudios.com</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>Hours:</h3>
                    <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <!--                <ul class="social-link">-->
                <!--                    <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>-->
                <!--                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>-->
                <!--                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>-->
                <!--                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>-->
                <!--                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>-->
                <!--                </ul>-->
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    <input class="input-text" type="text" name="" value="Seu Nome *"
                           onfocus="if(this.value==this.defaultValue)this.value='';"
                           onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Seu E-mail *"
                           onfocus="if(this.value==this.defaultValue)this.value='';"
                           onblur="if(this.value=='')this.value=this.defaultValue;">
                    <textarea class="input-text text-area" cols="0" rows="0"
                              onfocus="if(this.value==this.defaultValue)this.value='';"
                              onblur="if(this.value=='')this.value=this.defaultValue;">Sua Mensagem *</textarea>
                    <input class="input-btn" type="submit" value="Enviar Mensagem">
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <p style="text-align: center"><a href="wwww.gorceixonline.com.br/" target="_blank">Fundação Gorceix</a></p>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function (e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function () {
            $('.main-nav').slideToggle();
            return false

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
    //    funções do carousel
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows').hide(),
                $navDots = $('#nav-dots').hide(),
                $nav = $navDots.children('span'),
                $shadow = $('#shadow').hide(),
                slicebox = $('#sb-slider').slicebox({
                    onReady: function () {

                        $navArrows.show();
                        $navDots.show();
                        $shadow.show();

                    },
                    onBeforeChange: function (pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),

                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':first').on('click', function () {

                        slicebox.next();
                        return false;

                    });

                    $navArrows.children(':last').on('click', function () {

                        slicebox.previous();
                        return false;

                    });

                    $nav.each(function (i) {

                        $(this).on('click', function (event) {

                            var $dot = $(this);

                            if (!slicebox.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slicebox.jump(i + 1);
                            return false;

                        });

                    });

                };

            return {init: init};

        })();

        Page.init();

    });

</script>

<!--botao esconder/mostrar-->
<script type="text/javascript">
    jQuery.fn.toggleText = function (a, b) {
        return this.html(this.html().replace(new RegExp("(" + a + "|" + b + ")"), function (x) {
            return (x == a) ? b : a;
        }));
    }

    //    $(document).ready(function () {
    //        $('.tgl').before('<span>Revelar conteúdo</span>');
    //        $('.tgl').css('display', 'none')
    //        $('span', '#box-toggle').click(function () {
    //            $(this).next().slideToggle('slow')
    //                .siblings('.tgl:visible').slideToggle('fast');
    //// aqui começa o funcionamento do plugin
    //            $(this).toggleText('Revelar', 'Esconder')
    //                .siblings('span').next('.tgl:visible').prev()
    //                .toggleText('Revelar', 'Esconder')
    //        });
    //    })

    $(function () {
        $(".btn-toggle").click(function (e) {
            e.preventDefault();
            el = $(this).data('element');
            $(el).toggle();
        });
    });


</script>