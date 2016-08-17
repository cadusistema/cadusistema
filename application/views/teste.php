<link rel="stylesheet" type="text/css" href="<? echo base_url('application/layouts/css/demo.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<? echo base_url('application/layouts/css/slicebox.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<? echo base_url('application/layouts/css/custom.css') ?>"/>


<script type="text/javascript" src="<? echo base_url(JSPATH . 'modernizr.custom.46884.js') ?>"></script>


<div class="container">
    <div class="wrapper">

        <ul id="sb-slider" class="sb-slider">
            <li>
                <img src="<? echo base_url(IMG_SITE . '1.jpg') ?>" alt="image1"/><div class="sb-description">
                    <h3>Creative Lifesaver</h3>
                </div>
            </li>
            <li>
                <img src="<? echo base_url(IMG_SITE . '2.jpg') ?>" alt="image1"/>
                <div class="sb-description">
                    <h3>Honest Entertainer</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="images/3.jpg"
                                                                                                alt="image1"/></a>
                <div class="sb-description">
                    <h3>Brave Astronaut</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="images/4.jpg"
                                                                                                alt="image1"/></a>
                <div class="sb-description">
                    <h3>Affectionate Decision Maker</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="images/5.jpg"
                                                                                                alt="image1"/></a>
                <div class="sb-description">
                    <h3>Faithful Investor</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="images/6.jpg"
                                                                                                alt="image1"/></a>
                <div class="sb-description">
                    <h3>Groundbreaking Artist</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="images/7.jpg"
                                                                                                alt="image1"/></a>
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

</div>
<script type="text/javascript" src="<? echo base_url(JSPATH . 'jquery.slicebox.js') ?>"></script>s
<script type="text/javascript">
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
</body>
</html>
