<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <title>Arma Labs </title>
    <link href="<?php echo base_url();?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/scrollable-horizontal.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/scrollable-buttons.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/overlay-basic.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/overlay-gallery.css" media="all">
    <link href="<?php echo base_url();?>css/main.css" type="text/css" rel="stylesheet" media="all"/>
    <script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#menu .nav li a").click(function () {
                $(this).parent().parent().find('.active').removeClass('active');
                $(this).parent().addClass("active").css({color:'red'});
            });
            /* chained call: scrollable().find("a").tooltip().overlay().gallery(); */
            $(".scrollable").scrollable().find("a").tooltip({
                // use this single tooltip element for all trigger elements
                tip:'#tooltip'
            }).overlay({
                        // each trigger uses the same overlay with id "gallery"
                        target:'#gallery',
                        // optional exposing effect with custom color
                        expose:'#111',
                        // clicking outside the overlay does not close it
                        closeOnClick:false
// gallery plugin
                    }).gallery({
                        // do not use the same disabled class name as scrollable
                        disabledClass:'inactive'
                    });

        });
    </script>

    <style>
            /*** override styling in external stylesheets ***/
            /* remove margins from the image */
        .items img {
            margin: 0;
        }

            /* make A tags our floating scrollable items */
        .items a {
            display: block;
            float: left;
            margin: 20px 15px;
        }

            /* tooltip styling */
        #tooltip {
            display: none;
            background: url(scrollable-gallery-with-tooltips_files/black_arrow.png);
            font-size: 12px;
            height: 70px;
            width: 160px;
            padding: 25px;
            color: #fff;
        }

            /* scrollable should not disable gallery navigation */
        #gallery .disabled {
            visibility: visible !important;
        }

        #gallery .inactive {
            visibility: hidden !important;
        }
    </style>
</head>
<body>
<div id="menu" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".subnav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><img src="img/logo.png" width="25" height="25" id="logo"/><span>  </span>Arma
                Lab's</a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="#"><b class="icon-home icon-white"></b>Branda</a></li>
                    <li><a href="#profil"><b class="icon-user icon-white"></b>Profil</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b
                            class="icon-edit icon-white"></b><span> </span>Produk<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="#">Pengembangan Web</a></li>
                            <li><a href="#">Pengembangan Game</a></li>
                            <li><a href="#">Sistem Informasi</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><b class="icon-picture icon-white"></b><span> </span>Portfolio</a></li>
                    <li><a href="#tes" data-toggle="modal" aria-hidden="true"><b
                            class="icon-envelope icon-white"></b><span> </span>Kontak Kami</a></li>
                </ul>
                <form class="navbar-search pull-right" action="">
                    <input class="search-query span3" placeholder="Pencarian" type="text">
                </form>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
</div>
<div id="all">
    <div id="head">
        <div id="slide">
            <div class="row">
                <div class="container">
                    <div id="myCarousel" class="carousel slide"
                         style="border: 0px solid red; margin: auto; width: 1000px; height:300px;">
                        <div class="carousel-inner" style=" border: 0px solid red; margin: auto; left: -20px;">
                            <div class="item">
                                <img src="img/slide1.jpg" alt="Logo HMJ TF">

                                <div class="carousel-caption">
                                    <h4>First Thumbnail label</h4>

                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                        elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide2.jpg" alt="">

                                <div class="carousel-caption">
                                    <h4>Second Thumbnail label</h4>

                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                        elit.</p>
                                </div>
                            </div>
                            <div class="item active">
                                <img src="img/slide3.jpg" alt="">

                                <div class="carousel-caption">
                                    <h4>Study Excursie to Bali</h4>

                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                        elit.</p>
                                </div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="shadown"></div>
    </div>
    <div id="body">
        <div id="line"></div>
        <div id="content">
            <p id="welcome">
                Welcome to Arma Lab's software development</br>
                we have services for website development, information system application, game development and mobile
                apps.
                <br/>--------we come to make support your business--------
            </p>

            <div class="borderbottom"></div>
            <div id="circle">
                <a href="#" id="web"><p id="one"> Web Desain</p></a>
                <a href="#" id="game"><p id="three">Game</p></a>
                <a href="#" id="mobile"><p id="four">Sistem <br/>Informasi</p></a>
            </div>
            <div id="mycontent">
                <div id="about">
                    <div class="hwid">
                        <div id="ab"></div>
                        <h2>About Us</h2><h5>all-our-profile</h5>

                        <div class="borderbottom"></div>
                    </div>
                    <p>
                        Welcome to Arma Lab's software development
                        We come to make your business so powerful with all information system that can give up your
                        traffic marketing in the world cause internet,
                    </p>
                </div>
                <div id="servis">
                    <div class="hwid">
                        <div id="ser"></div>
                        <h2>Our Services</h2><h5>service-detail</h5>

                        <div class="borderbottom"></div>
                    </div>
                    <p>Welcome to Arma Lab's software development
                        We come to make your business so powerful with all information system that can give up your
                        traffic marketing in the world cause internet,</p>
                </div>
                <div id="product">
                    <div class="hwid">
                        <div id="pro"></div>
                        <h2>Our Product</h2><h5>showing-our-products</h5>

                        <div class="borderbottom"></div>
                    </div>
                    <p>Welcome to Arma Lab's software development
                        We come to make your business so powerful with all information system that can give up your
                        traffic marketing in the world cause internet,</p>
                </div>
            </div>
            <div id="newproduct">
                <h3>News Our Products</h3>

                <div class="borderbottom"></div>
                <div id="minigal">
                    <div id="isimini">
                        <a class="prevPage browse left disabled"></a>

                        <!-- root element for scrollable -->
                        <div class="scrollable">

                            <!-- root element for the items -->
                            <div class="items">

                                <a class="" href="scrollable-gallery-with-tooltips_files/321464099_a7cfcb95cf.jpg"
                                   title="Back view">
                                    <img src="scrollable-gallery-with-tooltips_files/321464099_a7cfcb95cf_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/2765571978_43771e81eb.jpg"
                                   title="From south north">
                                    <img src="scrollable-gallery-with-tooltips_files/2765571978_43771e81eb_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/244441862_08ec9b6b49.jpg"
                                   title="View from the pool">
                                    <img src="scrollable-gallery-with-tooltips_files/244441862_08ec9b6b49_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/66523124_b468cf4978.jpg"
                                   title="Granite stones">
                                    <img src="scrollable-gallery-with-tooltips_files/66523124_b468cf4978_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/399223606_b875ddf797.jpg"
                                   title="The bronze statue">
                                    <img src="scrollable-gallery-with-tooltips_files/399223606_b875ddf797_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/1118933512_5ea1fe8f41.jpg"
                                   title="Marble walls">
                                    <img src="scrollable-gallery-with-tooltips_files/1118933512_5ea1fe8f41_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/321464104_c010dbf34c.jpg"
                                   title="Statue again">
                                    <img src="scrollable-gallery-with-tooltips_files/321464104_c010dbf34c_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/3445879840_7ca4b491e9.jpg"
                                   title="Monumental walls">
                                    <img src="scrollable-gallery-with-tooltips_files/3445879840_7ca4b491e9_t.jpg"></a>

                                <a class="" href="scrollable-gallery-with-tooltips_files/3445879840_7ca4b491e9.jpg"
                                   title="Monumental walls">
                                    <img src="scrollable-gallery-with-tooltips_files/3445879840_7ca4b491e9_t.jpg"></a>

                            </div>

                        </div>

                        <div style="position: absolute; top: 59px; left: 606px; display: none;" id="tooltip">The bronze
                            statue
                        </div>


                        <!-- "next page" action -->
                        <a class="nextPage browse right"></a>

                        <br clear="all">
                    </div>
                    <!-- overlay element -->
                    <div class="simple_overlay" id="gallery">
                        <div class="close"></div>
                        <!-- "previous image" action -->
                        <a style="opacity: 0.8;" class="prev disabled">prev</a>
                        <!-- "next image" action -->
                        <a style="opacity: 0.8;" class="next">next</a>
                        <!-- image information -->
                        <div style="opacity: 0.8;" class="info"></div>
                        <!-- load indicator (animated gif) -->
                        <img class="progress" src="scrollable-gallery-with-tooltips_files/loading.gif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="linebottom"></div>
        <div id="footcontent">
            <div id="news">
                <div class="foothead">Kata Mereka</div>
                <p>
                    <a href="#">Bapak Subaryo </a> :
                    Welcome to Arma Lab's software development
                    We come to make your business so powerful with all information system that can give up your traffic
                    marketing in the world cause internet

                <p>
            </div>
            <div id="follow">
                <div class="foothead">Gabung Kami</div>
                <a href="http://facebook.com/"><img src="img/appbar.facebook.png" class="backfollow"/></a>
                <a href="http://twitter.com/"><img src="img/appbar.twitter.bird.png" class="backfollow"/></a>
                <a href="http://plus.google.com/"><img src="img/appbar.googleplus.png" class="backfollow"/></a>
            </div>

            <div id="contact">
                <div class="foothead">Alamat Kami</div>
                Alamat : Jl Pelem Apel No.123 Banguntapan Bantul
                <br/><a href="mailto:admin.armalab@gmail.com">Email : admin.armalab@gmail.com</a>
                <br/>Telp. 085641826003
            </div>
            <div id="findus">

                <img src="img/map.jpg" width="230" height="150"/>
            </div>

        </div>

        <div id="copyright"><a href="#" style="margin-top: 20px;"><h4><img src="img/logo.png" width="20" height="20"/>
            Arma Lab's &copy 2013</h4></a>
            <a href="#" style="float: right;margin-top: -20px;"><img src="img/top.png" width="30" height="30"
                                                                     title="Back to Top"/></a>
        </div>

    </div>

</div>

</body>
</html>