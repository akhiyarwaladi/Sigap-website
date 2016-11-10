<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Sigap</title>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Cropping Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Custom Theme files -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/css/style.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>assets/index/css/swipebox.css">
        <!-- js -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/js/jquery-1.11.1.min.js"></script> 
        <!-- //js -->
        <!--web-fonts-->
        <link href='<?php echo Yii::app()->request->baseUrl; ?>/themes/index/fonts/SansationLight.woff' rel='stylesheet' type='text/css'>
        <!-- <link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'> -->
        <!--//web-fonts-->
        <!-- start-smooth-scrolling-->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/js/easing.js"></script>	
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!--//end-smooth-scrolling-->	
    </head>
    <body>
        <!--top-navigation-->

        <div class="top-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--                        <ul class="nav navbar-nav">
                            <li class="hvr-bounce-to-bottom active"><a href="index.html">Home</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="#about" class="scroll">About</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="#features" class="scroll">Features</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="#services" class="scroll">Services</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="#team" class="scroll">Team</a></li>
                            <li class="hvr-bounce-to-bottom"><a href="#contact" class="scroll">Contact Us</a></li>
                            <li class="hvr-bounce-to-bottom"><?php echo CHtml::link('Login', array('site/login')); ?></li>
                            <li class="hvr-bounce-to-bottom"><?php echo CHtml::link('Logout (' . Yii::app()->user->name . ')', array('site/logout')); ?></li>
                        </ul>	-->
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'htmlOptions' => array('class' => 'nav navbar-nav'),
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'About', 'url' => array('#about'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'Features', 'url' => array('#features'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'Services', 'url' => array('#services'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                //array('label' => 'Team', 'url' => array('#team'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                //array('label' => 'Contact Us', 'url' => array('#contact'), 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'List Alat', 'url' => array('/alatuser/admin', 'view' => 'about'), 'visible' => !Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'hvr-bounce-to-bottom'),)
                            ),
                        ));
                        ?>
                        <div class="clearfix"> </div>
                    </div>	
                </div>
            </nav>		
        </div>	
        <!--//top-navigation-->
        <!--banner-->
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/sigap1.png" style="max-width: 252px;margin-top: -98px;margin-left: 32px;">
        <div class="banner">		
            <!--header-->
            <div class="header">
                <div class="container">
                    <!-- <div class="header-left">	
                            <h1><a href="index.html">Cropping</a></h1>
                    </div>  -->
                    <!-- <div class="header-right">	
                            <ul>
                                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+00 111 222 3333</li>
                                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
                            </ul>
                    </div> -->
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="banner-text">
                <!-- 	<h2>Welcome</h2> -->
                <!-- banner Slider starts Here -->
                <script src="js/responsiveslides.min.js"></script>
                <script>
// You can also use "$(window).load(function() {"
$(function () {
// Slideshow 3
$("#slider3").responsiveSlides({
    auto: false,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
        $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
        $('.events').append("<li>after event fired.</li>");
    }
});
});
                </script>
                <!--//End-slider-script -->
                <div  id="top" class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <!-- <li>					
                                <h3>GROW YOUR CROPS NATURALLY</h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </p>
                                <a href="#" class="more btn-1b scroll" data-toggle="modal" data-target="#myModal1"> Read More</a>
                        </li>
                        <li>					
                                <h3>LOREM IPSUM IS SIMPLY DUMMY</h3>
                                <p>Odio dignissimos ducimus qui blanditiis praesentium at vero eos et accusamus et iusto  voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </p>
                                <a href="#" class="more btn-1b scroll" data-toggle="modal" data-target="#myModal1"> Read More</a>
                        </li>
                        <li>					
                                <h3>VESTIBULUM ULLAM CONSECTETUR</h3>
                                <p>Praesentium voluptatum deleniti at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </p>
                                <a href="#" class="more btn-1b scroll" data-toggle="modal" data-target="#myModal1"> Read More</a>
                        </li>	
                        <li>					
                                <h3>BONORUM ET MALORUM LOREM IPSUM  </h3>
                                <p>Dignissimos ducimus qui blanditiis at vero eos et accusamus et iusto odio praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </p>
                                <a href="#" class="more btn-1b scroll" data-toggle="modal" data-target="#myModal1"> Read More</a>
                        </li>				 -->		
                    </ul>
                </div>
            </div>
        </div>
        <!--//banner-->
        <!--modal-sign-->
        <div class="modal bnr-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <section>
                        <div class="modal-body modal-spa">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.jpg" alt="">
                            <p>Uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--//modal-sign-->
        <!--about-->
        <div id="about" class="about">
            <div class="container">
                <h3 class="title">ABOUT US</h3>
                <p>Penentuan Interval penyiraman dan pengkondisian lengas tanah dalam irigasi curah membutuhkan teknologi pendukung yang mengoptimalkan operasi. Mikrokontroler Arduino Uno dan Raspberry digunakan sebagai pengendali otomatis yang menentukan penyiraman berdasarkan kondisi lengas tanah yang dideteksi oleh sensor lengas tanah. Logika fuzzy diterapkan untuk mengatur penjadwalan pengiriman data lengas tanah dari Raspberry pi ke server. Penjadwalan ini dilakukan agar dapat menghemat daya yang digunakan oleh sistem. Sistem ini bertujuan untuk mengatur intensitas pengiriman data ke server berdasarkan hasil pengukuran yang diberikan oleh sensor yang kemudian diolah oleh sistem embedded dengan menggunakan logika fuzzy. Nilai yang diperoleh ini akan menjadi masukan bagi pembuka pintu air untuk menentukan lamanya waktu pengairan. Hasil penelitian ini diharapkan dapat mempermudah pengguna untuk memantau dan mengendalikan lengas tanah dari jarak jauh.</p>
            </div>
        </div>
        <!--//about-->
        <!--features-->
        <div class="features" id="features">
            <div class="container">
                <h3 class="title">Features</h3>
                <div class="col-md-6 features-left">
                    <div class="video-img">
                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-play"></span></a>
                    </div>
                    <!--modal-video-->
                    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                                </div>
                                <section>
                                    <div class="modal-body ">
                                        <iframe src="https://www.youtube.com/watch?v=E0q4YSN8ncY" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--//modal-video-->
                </div>
                <div class="col-md-6 features-right bar_group">
                    <div class='bar_group__bar thin' label='Best Price ' value='200'></div>
                    <div class='bar_group__bar thin' label='Quality' value='250'></div>
                    <div class='bar_group__bar thin' label='Trust & Safety' value='180'></div>
                    <div class='bar_group__bar thin' label='Planning Growth' value='220'></div>
                </div>
                <!--bar-js-->
                <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/js/bars.js"></script>
                <!--bar-js-->
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//features-->
        <!--services-->
        <div id="services" class="services">
            <div class="container">
                <h3 class="title">Services</h3>
                <div class="service-row">
                    <div class="col-md-3 srvc-grids">
                        <div class="srvc-img">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/smart.png" style="max-width: 182px;margin-top: -48px;margin-left: -8px;"></img>
                        </div>
                        <h5>SMART MONITORING</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit non lorem at ultrices. Nulla tristique ex nec leo efficitur, non fermentum est congue</p>
                    </div>
                    <div class="col-md-3 srvc-grids">
                        <div class="srvc-img">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/monitor.png" style="max-width: 182px;margin-top: -48px;margin-left: -8px;"></img>
                        </div>
                        <h5>REAL-TIME MONITORING</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit non lorem at ultrices. Nulla tristique ex nec leo efficitur, non fermentum est congue</p>
                    </div>
                    <div class="col-md-3 srvc-grids">
                        <div class="srvc-img">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/hands.png" style="max-width: 182px;margin-top: -48px;margin-left: -8px;"></img>
                        </div>
                        <h5>EASY TO USE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit non lorem at ultrices. Nulla tristique ex nec leo efficitur, non fermentum est congue</p>
                    </div>
                    <div class="clearfix"> </div>				
                </div>
            </div>
        </div>
        <!--//services-->
        <!--team-->
        <div class="team" id="team">
            <div class="container">
                <h3 class="title">Team</h3>
                <div class="team-row" style="width: 1192px;margin-left: 22px;">
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/index.jpg" alt="">
                        </div>
                        <h4>AIMAN</h4>
                        <h6>Programmer</h6>
                    </div>
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/index.jpg" alt="">
                        </div>
                        <h4>AZMI</h4>
                        <h6>Designer</h6>
                    </div>
                    <div class="col-md-3 team-grids">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/index/images/index.jpg" alt="">
                        </div>
                        <h4>AKHIYAR</h4>
                        <h6>Programmer</h6>
                    </div>
                    <div class="cearfix"> </div>
                </div>
            </div>
        </div>
        <!--//team-->
        <!--map-->
        <div class="map">
            <iframe data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"></iframe>
        </div>
        <!--//map-->
        <!--contact-->
        <div class="contact" id="contact">
            <div class="container">
                <h3 class="title">Contact Us</h3>
                <div class="contact-grids">
                    <div class="col-md-4 address">
                        <h4>Office Address</h4>
                        <p class="cnt-p"> </p>
                        <p>Kampus IPB</p>
                        <p>Dramaga, Bogor, Jawa Barat, 16680</p>
                        <p>Telephone : +6281282629275</p>
                        <p>Email : <a href="mailto:example@mail.com">sigap@gmail.com</a></p>
                    </div>
                    <div class="col-md-7 contact-form">
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input class="email" type="text" name="Email" placeholder="Email" required="">
                            <textarea placeholder="Message" name="Message" required=""></textarea>
                            <input type="submit" value="SUBMIT">
                        </form>
                    </div>
                    <div class="clearfix"> </div>	
                </div>
            </div>
        </div>
        <!--//contact-->
        <!--footer-->
        <div class="footer">
            <div class="container">			
                <p>© 2016 Sigap. All rights reserved </a></p>
            </div>	
        </div>
        <!--//footer-->
        <!--smooth-scrolling-of-move-up-->
        <script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
        </script>
        <!--//smooth-scrolling-of-move-up-->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>