<!DOCTYPE html>
<html lang="en">

<?php
$active_page ="services";
$active_page ="consultancy";
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
                    <h1>CONSULTANCY SERVICES</h1>
                    <nav class="breadcrumbs">
                        <a class="home" href="<?php echo "home"?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>consultancy services</span>
                    </nav>
                </div>
            </div>
        </div>
        <!--page-header  end-->
       <!-- detail sec -->
       <div class="service-dtail row">
            <div class="container">
                <div class="row">
                    <div class=" ">
                        <div class="dtlbgimg col-lg-6 col-md-8 col-sm-12">
                            <img src="assets/images/R/consultancy2.jpg" alt="" />
                        </div>

                        <div class="mf-section-title text-left dark medium-size bold margbtm40 col-lg-6 col-md-8 col-sm-12">
                            <h2>CONSULTANCY SERVICES</h2>
                        </div>
                        <p>You can consult us for Project and Construction Management,
                            Selection of Consultants, Engineers, Contractors.
                            Analyzing and co-ordination of activities of the various
                            specialists, groups, department involved in different phases
                            of the project execution.
                            Baseline studies and environmental impact assessment (EIA),
                            Site Facility Management,
                            Waste management (handing and treatment),
                            Water treatment and supply
                            Procurement </p>
                        <!-- <div class="mf-section-title text-left dark medium-size margbtm40">
                            <h2>Why Choose Us</h2>
                        </div>
                        <p>Use these core principles along with tools like computer-aided design, product lifecycle management to design and analyze manufacturing plants, industrial equipment and machinery.</p>

                        <div class="row whychoseopt">
                            <div class="col-lg-6 col-md-12">
                                <div class="mf-icon-box icon_type-flaticon icon_style-has-background-color icon_position-left icon_size-large style-1 box-dark ">
                                    <span class="mf-icon"><i class="flaticon-pinwheel"></i></span>
                                    <div class="box-wrapper">
                                        <h2 class="box-title"><a href="#" title="Clean Unpolluted" target=" _blank">Clean Unpolluted</a></h2>
                                        <div class="desc">The relationship between the mind &amp; body is again pursues.</div>
                                    </div>
                                </div>
                                <div class="mf-icon-box icon_type-flaticon icon_style-has-background-color icon_position-left icon_size-large style-1 box-dark ">
                                    <span class="mf-icon"><i class="flaticon-road"></i></span>
                                    <div class="box-wrapper">
                                        <h2 class="box-title"><a href="#" title="Easy and Affortable" target=" _blank">Easy and Affortable</a></h2>
                                        <div class="desc">Explain to you how all this mistaken because it is procure.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mf-icon-box icon_type-flaticon icon_style-has-background-color icon_position-left icon_size-large style-1 box-dark ">
                                    <span class="mf-icon"><i class="flaticon-music"></i></span>
                                    <div class="box-wrapper">
                                        <h2 class="box-title"><a href="#" title="Lasting &amp; Long Term" target=" _blank">Lasting &amp; Long Term</a></h2>
                                        <div class="desc">Denouncing pleasure &amp; praising pain was born of occasionally.</div>
                                    </div>
                                </div>
                                <div class="mf-icon-box icon_type-flaticon icon_style-has-background-color icon_position-left icon_size-large style-1 box-dark ">
                                    <span class="mf-icon"><i class="flaticon-sprout"></i></span>
                                    <div class="box-wrapper">
                                        <h2 class="box-title"><a href="#" title="Generated From Nature" target=" _blank">Generated From Nature</a></h2>
                                        <div class="desc">Except to obtain some advantage from it? But who has any right.</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        </div>
 
                </div>

                    <!-- sidebar -->
                <div class="row">
                    <div class="dtlbgimg col-lg-6 col-md-8 col-sm-12">
                         <img src="assets/images/R/consultancy3.jpg" alt="" />
                    </div>

                    <aside class="widgets-area primary-sidebar service-sidebar ol-sm-12 col-md-4 ">
                        <div class="induscity-widget">

                            <div class="widget_text widget ">
                                <h4 class="widget-title"> Contact Our Team</h4>
                                <div class="textwidget">
                                    <div class="mf-team-contact">
                                        <p>Please feel free to contact us. We will get back to you with 1-2 business days. Or just call us now.</p>
                                        <div class="mf-contact phone">
                                            <i class="flaticon-tool"></i>
                                            <span class="semi-bold">Call Us:</span> <?php echo $config['phone_number'];?>
                                        </div>
                                        <div class="mf-contact email">
                                            <i class="flaticon-note"></i>
                                            <span class="semi-bold">Mail Us:</span> <?php echo $config['email'];?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- our services end -->

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