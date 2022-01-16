<!DOCTYPE html>
<html lang="en">

<?php
$active_page ="contact";
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
                    <h1>Contact us</h1>
                    <nav class="breadcrumbs">
                        <a class="home" href="<?php echo "home"?>"><span>Home</span></a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span>Contact</span>
                    </nav>
                </div>
            </div>
        </div>
        <!--page-header  end-->

        <!-- team-->
        <div class="contactpage pagepadd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mf-contact-box clearfix ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Headquater</h2>
                            </div>
                            <div class="contact-info address"><i class="flaticon-arrow"></i>
                                <div><span>Address:</span><?php echo $config['address'];?></div>
                            </div>
                            <div class="contact-info phone"><i class="fa fa-phone"></i>
                                <div><span>Call Us:</span> <?php echo $config['phone_number'];?></div>
                            </div>
                            <div class="contact-info email"><i class="flaticon-note"></i>
                                <div><span>Mail Us:</span> </i><?php echo $config['email'];?></div>
                            </div>
                            <ul class="contact-social">
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="googleplus">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="skype">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="mf-department">
                            <div class="mf-section-title text-left dark medium-size">
                                <h2>Sales Department</h2>
                            </div>
                            <div class="department-list single-slide">
                                <div class="department-group">
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi3-1-67x64.jpg" width="67" height="64" alt="testi5" title="testi5" /></div>
                                        <div class="info">
                                            <h5 class="name">Charles Mecky</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi1-1-67x64.jpg" width="67" height="64" alt="test4" title="test4" /></div>
                                        <div class="info">
                                            <h5 class="name">Lucas Don</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="department-group">
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/testi6-67x64.jpg" width="67" height="64" alt="testi3" title="testi3" /></div>
                                        <div class="info">
                                            <h5 class="name">Laurel Queen</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="department-info ">
                                        <div class="department-avatar"><img class="" src="images/resources/test4-2-67x64.jpg" width="67" height="64" alt="testi1" title="testi1" /></div>
                                        <div class="info">
                                            <h5 class="name">John McManama</h5><span class="phone"><i class="fa fa-phone"></i>84578-25-658</span>
                                            <div class="mail"><i class="fa fa-envelope"></i>Charles@gmail.com</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mf-working-hour ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Working Hours</h2>
                            </div>
                            <ul class="mf-list-hour">
                                <li><span class="day">Monday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Tuesday</span><span class="hour">09:00am - 06:00pm</span></li>
                                <li><span class="day">Wednesday</span><span class="hour">10:00am - 08:00pm</span></li>
                                <li><span class="day">Thursday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Friday</span><span class="hour">09:00am - 06:00pm</span></li>
                                <li><span class="day">Saturday</span><span class="hour">09:00am - 08:00pm</span></li>
                                <li><span class="day">Sunday</span><span class="hour">Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
        <div class="contactform">
            <div class="container">
                <div class="mf-section-title text-center dark large-size margbtm20">
                    <h2>Send Message Us</h2>
                </div>
                <div class="text-center margbtm40">Don’t hestiate to ask us something, Our customer support team always ready to help
                    <br>you,they will support you 24/7.</div>
                <div class="contact-form mf-contact-form-7 form-light">

                    <form id="contact-form" method="post" action="inc/contact.php" role="form" class="wpcf7-form" validate="validate">
                        <div class="messages"></div>
                        <div class="controls mf-form mf-form-2">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-12 mf-input-field">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" size="40" placeholder="Your Name*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" size="40" placeholder="Email Address*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" value="" size="40" placeholder="Phone Number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12 mf-textarea-field">
                                    <div class="form-group">
                                        <textarea name="message" cols="40" rows="10" placeholder="Enter Your Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn-style-two">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- contact-->

        <!--google map-->
        <!--<div class="google-map-area">
            <div class="google-map" id="contact-google-map" data-map-lat="40.764357" data-map-lng="-73.923462" data-icon-path="images/icon/marker-1.png" data-map-title="Chester" data-map-zoom="13" data-markers='{
							"marker-1": [40.764357, -73.923462, "<h4>Induscity</h4><p>Astoria, Queens, NY, United States</p>"]
						}'>
            </div>
        </div>
        <!--google map end-->

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