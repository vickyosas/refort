<!DOCTYPE html>
<html lang="en">

<?php
$active_page ="services";
 require_once("layouts/head-links.php");
?>

<body class="home   header-sticky header-transparent header-v3 hide-topbar-mobile">
    <div id="page" class="hfeed site">

        <!-- Preloader-->
        <div class="preloader"></div>

        <?php
        require_once("layouts/head-section.php");
        ?> 

        <!--page-header-->
        <div class="page-header has-image">
            <div class="page-header-content">
                <div class="featured-image"></div>
                <div class="container">
                    <h1>services</h1>
                    <nav class="breadcrumbs">
                        <a class="home" href="<?php echo "home"?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Market Sectors</span>
                    </nav>
                </div>
            </div>
        </div>
        <!--page-header  end-->

        <!-- our services -->
        <div class="service-1">
            <div class="container">
                <div class="services-list row">
                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service1.jpg" alt="">
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-technology"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-technology"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Power and Energy</a></h2>
                                    <p>Great explorer of the truth sed, the master builder of human happiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service2.jpg" alt="" />
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-construction"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-construction"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Construction</a></h2>
                                    <p>Explain to you how all this mistaken idea of denouncing pleasure praising.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service3.jpg" alt="" />
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-cruise"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-cruise"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Ship Building Industry</a></h2>
                                    <p>How all this mistaken idea of denouncing pleasure and praising.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service4.jpg" alt="" />
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-transport-1"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-transport-1"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Aero Space Services</a></h2>
                                    <p>The expound actual teachings sed the all great explorer of the truth.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service5.jpg" alt="" />
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-motor"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-motor"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Automative System</a></h2>
                                    <p>Powefull extreamly and again is there all who loves pursues or desires. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-xs-12 col-md-4 col-sm-6">
                        <div class="service-inner">
                            <div class="service-thumbnail">
                                <a href="#" class="pro-link"><i class="fa fa-link"></i></a>
                                <img width="370" height="200" src="images/services/service6.jpg" alt="" />
                            </div>
                            <div class="service-summary">
                                <span class="service-icon service-icon-1"><i class="flaticon-transport"></i></span>
                                <span class="service-icon service-icon-2"><i class="flaticon-transport"></i></span>
                                <div class="service-content">
                                    <h2 class="service-title"><a href="#">Railway Infrastructure</a></h2>
                                    <p>Physical exercise, except too obtain some advantage from it any right</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our services end -->

    <?php
      require_once("layouts/footer.php");
    ?>
    <!--End pagewrapper-->

   <!--primary-mobile-nav-->
   <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <ul class="menu">
            <li class="current-menu-item menu-item-has-children"><a href="<?php echo "home"?>" >Home</a>
            </li>
            <li><a href="<?php echo "about"?>">About </a></li>
            <li class="menu-item-has-children"><a href="<?php echo "Services"?>" >Services</a>
                <ul class="sub-menu"> 
                    <li><a href="<?php echo "consultancy"?>">Consultancy Services</a></li>
                    <li><a href="<?php echo "engineering"?>">
                        Engineering services</a></li>
                </ul>
            </li>
            <li><a href="<?php echo "projects"?>">Projects</a></li>
            <li><a href="<?php echo "contact"?>">Contact</a></li>

        </ul>

    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>
    <!--primary-mobile-nav end-->

    <!--Scroll to top-->
    <a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>



    <?php
    require_once("layouts/foot-links.php");
   ?>
</body>

</html>