<section id="infra">
    <h1>Infra-Estrutura</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <picture>
                            <source media="(max-width:45em"
                                    srcset="<? echo base_url(ICONE . "/64/administracao.png") ?>">
                            <img src="<? echo base_url(ICONE . "/128/administracao.png") ?>"
                                 alt="Icone da administração do parque">
                        </picture>
                    </div>
                    <div class="col-md-9">
                        <h3>Centro Administrativo</h3>
                        <h5>Conta com dois vestiários</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <picture>
                            <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/areasports.png") ?>">
                            <img src="<? echo base_url(ICONE . "/128/areasports.png") ?>"
                                 alt="Icone da area de esportes do parque">
                        </picture>
                    </div>

                    <div class="col-md-9">
                        <h3>Área de Lazer</h3>
                        <h5>Campo de futebol, quadra de areia, quadra poliesportiva e churrasqueira</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <picture>
                            <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/ordonance.png") ?>">
                            <img src="<? echo base_url(ICONE . "/128/ordonance.png") ?>"
                                 alt="Icone da portaria do parque">
                        </picture>
                    </div>
                    <div class="col-md-9">
                        <h3>Portaria</h3>
                        <h5>Ocupada por guarda-parques além de funcionar como um ponto de informações turísticas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '1.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '2.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '3.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '4.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '5.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '6.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '7.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '3.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iten-list">
                            <figure>
                                <img class="img-infra" src="<? echo base_url(IMG_INFRA . '3.jpg') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="esportes" class="escalada fundo">

    <div class="tituloesportes">
        <h1 id="h1esportes">Esportes</h1>
    </div>
    <div id="wrapper" class="centralcontent">
        <div id="slider">
            <div id="central" class="conteudocentral">
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-11" aria-expanded="false"
                                style="background-color: #ffffff">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="background-color: #0f0f0f"></span>
                            <span class="icon-bar" style="background-color: #0f0f0f"></span>
                            <span class="icon-bar" style="background-color: #0f0f0f"></span>
                        </button>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-11">
                        <ul id="ulesportes" class="nav nav-tabs">
                            <li id="liescalada" class="active"><a class="btn btn-primary btn-black esportes"
                                                                  onclick="changeBackground('esportes','escalada')"
                                                                  data-toggle="tab" href="#escalada">ESCALADA</a>
                            </li>
                            <li id="liboulder"><a class="btn btn-primary btn-black esportes"
                                                  onclick="changeBackground('esportes','boulder')" data-toggle="tab"
                                                  href="#boulder">BOULDER</a></li>
                            <li id="limountainbike"><a class="btn btn-primary btn-black esportes"
                                                       onclick="changeBackground('esportes','mountainbike')"
                                                       data-toggle="tab"
                                                       href="#mountainbike">MOUNTAIN
                                    BIKE</a></li>
                            <li id="lihighline"><a class="btn btn-primary btn-black esportes"
                                                   onclick="changeBackground('esportes','highline')" data-toggle="tab"
                                                   href="#highline">HIGHLINE</a></li>
                        </ul>
                    </div>
                    <div id="divesportes" class="tab-content respiro">
                        <div class="tab-pane active colordiv" id="escalada">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>Ótimo local para escalada em rocha que fica a 3 Km da sede do parque, possuindo
                                        cerca de 3 vias de até 60m com graduações entre II a VIIIb. Confira todos os
                                        setores no site "27 crags".
                                    </p>
                                    <p align="center">
                                        <button class="btn-custom btnAdvance">Saiba mais</button>
                                    </p>
                                    </button></p>
                                </div>
                                <div class="col-md-7">
                                    <div id="fotoconteudocentral" class="fotocentral">
                                        <img class="img-responsive"
                                             src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane colordiv" id="boulder">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>Área de bouldering próximo ao centro da cidade, apenas há dez minutos. Ouro Preto
                                        é uma cidade histórica no coração de Minas Gerais. A rocha é um quartzito macio
                                        com várias linhas. As retenções variam de prensas a slopers com graduações entre
                                        II e VIIIB.
                                    </p>
                                    <p align="center">
                                        <button class="btn-custom"
                                                onclick="window.open('https://27crags.com/crags/pedreira-do-sao-sebastiao-ouro-preto-mg')">
                                            Saiba mais
                                        </button>
                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  colordiv" id="mountainbike">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>3-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia
                                        ac,
                                        dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae
                                        massa.
                                        Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim
                                        luctus, a
                                        facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus
                                        porta dui.

                                    </p>
                                    <p align="center">
                                        <button class="btn-custom btnAdvance">Saiba mais</button>
                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  colordiv" id="highline">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>4-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor.

                                    </p>
                                    <p align="center">
                                        <button class="btn-custom btnAdvance">Saiba mais</button>
                                    </p>

                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="lateral" class="conteudocentral">
                <div class="tabbable">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-12">
                        <ul id="ulesportes" class="nav nav-tabs">
                            <li id="libonsai" class="active"><a class="btn btn-primary btn-black esportes"
                                                                data-toggle="tab" href="#pedradoarco">PEDRA DO ARCO</a>
                            </li>
                            <li id="lininjutsu"><a class="btn btn-primary btn-black esportes"
                                                   onclick="changeBackground('esportes','escalada')" data-toggle="tab"
                                                   href="#pedrabranca">PEDRA BRANCA</a></li>
                            <li id="litaijutsu"><a class="btn btn-primary btn-black esportes"
                                                   onclick="changeBackground('esportes','escalada')" data-toggle="tab"
                                                   href="#boulder">BONSAI</a></li>
                        </ul>
                    </div>
                    <div class="tab-content respiro">
                        <div class="tab-pane colordiv active" id="pedradoarco">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>6-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor.

                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="fotocentral">
                                        <!--                                <img class="img-responsive"-->
                                        <!--                                     src="-->
                                        <? // echo base_url(IMG_CAROUSEL . '3.jpg') ?><!--" alt="...">-->

                                        <section id="carousel">
                                            <div id="carousel-example-generic" class="carousel slide"
                                                 data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0"
                                                        class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div id="teste" class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img src="<? echo base_url(IMG_CAROUSEL . 'jacare.jpg') ?>"
                                                             alt="...">

                                                    </div>
                                                    <div class="item">
                                                        <img src="<? echo base_url(IMG_ATRATIVOS . 'cachoeiraveudanoiva.jpg') ?>"
                                                            alt="...">
                                                    </div>
                                                    <div class="item">
                                                        <img src="<? echo base_url(IMG_ATRATIVOS . 'trilhasoriginal.jpg') ?>"
                                                            alt="...">
                                                    </div>
                                                    <div class="item">
                                                        <img src="<? echo base_url(IMG_ESPORTES . 'boulderoriginal.jpg') ?>"
                                                            alt="...">
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic"
                                                   role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"
                                                          aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic"
                                                   role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"
                                                          aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </section>

                                    </div>
                                </div>

                            </div>
                            <div class="left-bottom"><a class="btn btn-custom btnRetreat"><< Voltar</a></div>


                        </div>
                        <div class="tab-pane colordiv" id="boulder">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>2-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia
                                        ac,
                                        dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae
                                        massa.
                                        Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim
                                        luctus, a
                                        facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus
                                        porta dui.

                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  colordiv" id="mountainbike">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>3-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia
                                        ac,
                                        dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae
                                        massa.
                                        Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim
                                        luctus, a
                                        facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus
                                        porta dui.

                                    </p>
                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  colordiv" id="highline">
                            <div class="row">
                                <div class="col-md-5 textocentral">
                                    <p>8-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus
                                        mi
                                        pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada
                                        fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                        molestie
                                        vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                        Morbi
                                        non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus
                                        nisi, et
                                        fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat
                                        lobortis,
                                        mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie
                                        euismod
                                        purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                        pellentesque
                                        placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia
                                        ac,
                                        dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae
                                        massa.
                                        Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim
                                        luctus, a
                                        facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus
                                        porta dui.

                                    </p>
                                    <a class="btn btn-black btnRetreat">aqui cadu</a>

                                </div>
                                <div class="col-md-7">
                                    <div id="fotocentral">
                                        <img class="img-responsive fotocentral"
                                             src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="atividadesdesenvolvidas">
    <h1>Atividades Desenvolvidas</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div id="itens" class="col-md-3">
                    <picture>
                        <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/check.png") ?>">
                        <img src="<? echo base_url(ICONE . "/128/check.png") ?>" alt="Icone da administração do parque">
                    </picture>
                </div>
                <div class="col-md-9">
                    <h3>Educação Ambiental</h3>
                    <h5>A ação é voltada para alunos do ensino fundamental da cidade e região, abordando, de forma
                        lúdica e prática, questões relativas à preservação ambiental, recursos hídricos,
                        sustentabilidade e educação patrimonial.
                    </h5>
                </div>
            </div>
            <div class="row">
                <div id="itens" class="col-md-3">
                    <picture>
                        <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/check.png") ?>">
                        <img src="<? echo base_url(ICONE . "/128/check.png") ?>" alt="Icone da administração do parque">
                    </picture>
                </div>
                <div class="col-md-9">
                    <h3>GERENCIAMENTO DE RESÍDUOS SÓLIDOS</h3>
                    <h5>Está em elaboração um plano de gerenciamento de resíduos gerados pelo parque, incluindo a
                        avaliação dos detritos, segregação, manejo, coleta seletiva, treinamento dos guardas do parque,
                        abordagem e educação ambiental aos visitantes, ações de limpeza e conservação.
                    </h5>
                </div>
            </div>
            <div class="row">
                <div id="itens" class="col-md-3">
                    <picture>
                        <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/check.png") ?>">
                        <img src="<? echo base_url(ICONE . "/128/check.png") ?>" alt="Icone da administração do parque">
                    </picture>
                </div>
                <div class="col-md-9">
                    <h3>PROGRAMA DE VISITAÇÃO</h3>
                    <h5>Esta ação visa informar melhor o visitante sobre pontos turísticos, trilhas e atividades
                        esportivas que podem ser realizadas no parque. As atividades de classificação de trilhas são
                        realizadas conforme a ABNT NBR 15505-2/2008.
                    </h5>
                </div>
            </div>
            <div class="row">
                <div id="itens" class="col-md-3">
                    <picture>
                        <source media="(max-width:45em" srcset="<? echo base_url(ICONE . "/64/check.png") ?>">
                        <img src="<? echo base_url(ICONE . "/128/check.png") ?>" alt="Icone da administração do parque">
                    </picture>
                </div>
                <div class="col-md-9">
                    <h3>COMBATE A INCÊNDIOS </h3>
                    <h5>Diariamente são realizadas vistorias no parque para identificação de focos de incêndio e sua
                        extinção. Abordagens e palestras serão realizadas para os moradores nos bairros limítrofes,
                        promovendo a educação patrimonial.
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '1.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '2.png') ?>" alt="2">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '3.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '4.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '5.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '6.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '7.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '3.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iten-list">
                        <figure>
                            <img class="img-infra" src="<? echo base_url(IMG_DESENVOLVIDA . '3.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="atrativos" class="mirante fundo">

    <div class="tituloesportes">
        <h1>Atrativos Turísticos</h1>
    </div>

    <div id="central" class="conteudocentral">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-12" aria-expanded="false"
                    style="background-color: #ffffff">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
            </button>
        </div>
        <div class="tabbable"> <!-- Only required for left/right tabs -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-12">
                <ul id="ulatrativos" class="nav nav-tabs">
                    <li id="limirante" class="active"><a class="btn btn-primary btn-black" data-toggle="tab"
                                                         onclick="changeBackground('atrativos','mirante')"
                                                         href="#mirante">MIRANTES</a>
                    </li>
                    <li id="litrilha"><a class="btn btn-primary btn-black" data-toggle="tab"
                                         onclick="changeBackground('atrativos','trilha')" href="#trilha">TRILHAS</a>
                    </li>
                    <li id="licachoeira"><a class="btn btn-primary btn-black" data-toggle="tab"
                                            onclick="changeBackground('atrativos','cachoeira')"
                                            href="#cachoeira">CACHOEIRAS</a>
                    </li>
                </ul>
            </div>
            <div id="divatrativos" class="tab-content respiro">
                <div class="tab-pane active colordiv" id="mirante">
                    <div class="row">
                        <div class="col-md-5">
                            <div id="tab1" class="textocentral">
                                <p>1-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus mi
                                    pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada
                                    fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus
                                    molestie
                                    vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu.
                                    Morbi
                                    non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus nisi, et
                                    fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat lobortis,
                                    mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie euismod
                                    purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis
                                    pellentesque.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="fotocentral">
                                <img class="img-responsive"
                                     src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane colordiv" id="trilha">
                    <div class="row">
                        <div class="col-md-5 textocentral">
                            <p>2-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus mi
                                pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus molestie
                                vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu. Morbi
                                non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus nisi, et
                                fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat lobortis,
                                mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie euismod
                                purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis pellentesque
                                placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia ac,
                                dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae massa.
                                Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim luctus, a
                                facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus porta dui.

                            </p>
                        </div>
                        <div class="col-md-7">
                            <div id="fotocentral">
                                <img class="img-responsive fotocentral"
                                     src="<? echo base_url(IMG_CAROUSEL . '4.jpg') ?>" alt="...">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  colordiv" id="cachoeira">
                    <div class="row">
                        <div class="col-md-5 textocentral">
                            <p>3-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at arcu finibus mi
                                pharetra auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas. Maecenas luctus vestibulum tellus, ac sagittis lectus molestie
                                vitae. Suspendisse sed elit imperdiet, scelerisque lacus pharetra, iaculis arcu. Morbi
                                non turpis faucibus, finibus ex vitae, semper ligula. Donec ultrices tempus nisi, et
                                fringilla velit. Sed sed commodo libero. Aliquam egestas, nisl a feugiat lobortis,
                                mauris mi auctor risus, non pellentesque felis dolor ac eros. Nam molestie euismod
                                purus, et facilisis sapien tempus sit amet. Nam venenatis ligula id turpis pellentesque
                                placerat. Morbi eget condimentum tortor. Nam libero augue, faucibus vel lacinia ac,
                                dapibus sed tortor. Quisque quam nibh, fringilla at dapibus at, pharetra vitae massa.
                                Aliquam vitae vulputate ligula, a porta nulla. Maecenas mattis lacus non enim luctus, a
                                facilisis libero maximus. Cras augue nisi, vehicula at tortor vitae, finibus porta dui.

                            </p>
                        </div>
                        <div class="col-md-7">
                            <div id="fotocentral">
                                <img class="img-responsive fotocentral"
                                     src="<? echo base_url(IMG_CAROUSEL . '3.jpg') ?>" alt="...">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="localizacao">

    <!--    <div>-->
    <!--        <h1>Localização</h1>-->
    <!--    </div>-->

    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/d/u/0/embed?mid=1JFdIPLpp43YDDGb40JBpMvjJmXU"
            width="100%" height="800px" frameborder="0">

        </iframe>
    </div>


</section>
<section id="paralallax" class="parallax">
</section>
<section id="contato">
    <div class="tituloesportes">
        <h1>Contato</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <h2>Endereço</h2>
                        <span>Rua das Andorinhas, s/n, Morro São João <br>Ouro Preto - Minas Gerais - Brasil</span>
                    </div>
                    <div class="row">
                        <h2>Telefone</h2>  <span>(31) 9 7163 04 84 </span>
                    </div>
                    <div class="row">
                        <h2>Email</h2> <span>pnma@gorceix.org.br</span>
                    </div>
                    <div class="row line">
                        <h2>Horario</h2>  <span><strong>Diariamente:</strong> 07:30 - 18:30.<br></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="form-group contato-form">
                        <label for="usr">Name</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group contato-form">
                        <label for="usr">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group contato-form">
                        <label for="usr">Mensagem</label>
                    <textarea type="text" class="form-control" id="msg" name="msg" placeholder="Mensagem"
                              rows="5"></textarea>
                    </div>
                    <div class="form-group contato-form">
                        <button class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
