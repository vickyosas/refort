<!DOCTYPE html>
<html lang="en">

<?php
$active_page ="project";
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
                    <h1>Projects</h1>
                    <nav class="breadcrumbs">
                        <a class="home" href="<?php echo "home"?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Projects</span>
                    </nav>
                </div>
            </div>
        </div>
        <!--page-header  end-->

        <!-- projects -->
        <div class="pageproject-1 portfolio-with-space">
            <div class="container">

                <div class="nav-section">
                    <ul class="nav-filter dark">
                        <li><a href="#" class="active" data-filter="*">View All</a></li>
                        <li><a href="#" class="" data-filter=".portfolio_category-power-energy">Power &amp; Energy</a></li>
                        <li><a href="#" class="" data-filter=".portfolio_category-construction">Construction</a></li>
                        <li><a href="#" class="" data-filter=".portfolio_category-mining-planet">Mining &amp; Planet</a></li>
                        <li><a href="#" class="" data-filter=".portfolio_category-mechanical">Mechanical</a></li>
                        <li><a href="#" class="" data-filter=".portfolio_category-materials">Materials</a></li>
                    </ul>
                </div>
                <div class="portfolio-list mf-list-portfolio filterlist row">
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-power-energy">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190301_155629_7.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">US Gas Company</a></h2>
                                <a class="cat-portfolio" href="#">Power &amp; Energy</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-construction">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190306_150422_3.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Pre Construction</a></h2>
                                <a class="cat-portfolio" href="#">Construction</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-construction">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190306_153745_3.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Railway Station</a></h2>
                                <a class="cat-portfolio" href="#">Construction</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->\s-5\X2                     <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-power-energy">RW
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190328_095408_2.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Petroleum Tank</a></h2>
                                <a class="cat-portfolio" href="#">Power & Energy</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-mining-planet">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190328_140655_2.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Mining Plant Set Up</a></h2>
                                <a class="cat-portfolio" href="#">Mining & Planet</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-mechanical">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190328_140755_1.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Van Drilling Service</a></h2>
                                <a class="cat-portfolio" href="#">Mechanical</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-materials">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20190301_155513_5.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Spring Renovation</a></h2>
                                <a class="cat-portfolio" href="#">Materials</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-mining-planet">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20180108_100247_3.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Los Angeles Bridge</a></h2>
                                <a class="cat-portfolio" href="#">Mining & Planet</a>
                            </div>
                        </div>
                    </div>
                    <!-- #project-## -->
                    <div class="project-wrapper col-sm-6 col-xs-12 col-md-4 portfolio_category-mining-planet">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <img width="585" height="415" src="assets/images/R/IMG_20180108_100239_1.jpg" alt="" />
                                <a href="#" class="pro-link"><span class="mf-portfolio-icon"><i class="flaticon-multimedia"></i></span></a>
                            </div>
                            <div class="project-summary">
                                <h2 class="project-title"><a href="#">Mining Plant Set Up</a></h2>
                                <a class="cat-portfolio" href="#">Mining & Planet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navigation paging-navigation numeric-navigation">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </nav>

            </div>
        </div>
        <!-- projects end -->
    <?php
      require_once("layouts/footer.php");
    ?> 
    </div>
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