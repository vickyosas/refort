 <!-- topbar -->
 <div id="topbar" class="topbar hidden-md hidden-sm hidden-xs">
            <div class="container-fluid">

                <div class="topbar-left topbar-widgets text-left clearfix">
                    <div class="widget induscity-office-location-widget">
                        <div class="office-location clearfix">
                            <ul id="cargohub-office-1" class="office-1 topbar-office active">
                                <li class="time"><i class="flaticon-arrow"></i><small><?php echo $config['address'];?></small></li>
                                <li class="phone"><i class="flaticon-tool"></i><small><?php echo $config['phone_number'];?></small></li>
                                <li class="email"><i class="flaticon-letter"></i><small><?php echo $config['email'];?></small></li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="topbar-right topbar-widgets text-right clearfix">
                    <div class="widget induscity-social-links-widget">
                        <a href="#" class="share-facebook tooltip-enable social" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter tooltip-enable social" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-skype tooltip-enable social" title="Skype" target="_blank"><i class="fa fa-skype"></i></a>
                        <a href="#" class="share-linkedin tooltip-enable social" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- topbar end -->

        <!-- masthead -->
        <div id="mf-header-minimized" class="mf-header-minimized mf-header-v3"></div>
        
        <header id="masthead" class="site-header clearfix">
            <div class="header-main">
                <div class="container">
                    <div class="row menu-row">
                        <div class="site-logo col-md-9 col-sm-9 col-xs-9">
                            <a href="#" class="logo">
                                <img src="assets/images/R/rekfort logo 2_prev_ui (1).png" alt="Induscity" class="logo">
                            </a>
                            <p class="site-title"><a href="#" rel="home">Induscity</a></p>
                            <h2 class="site-description">Just another Steel Themes Sites site</h2>
                        </div>
                        <div class="site-menu hidden-md hidden-sm hidden-xs">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li class="  <?php if ($active_page == "HOME"){ echo  "active"; }?> has-children nav_item"><a href="<?php echo "home"?>" class="dropdown-toggle" >Home</a>
                                    </li>    
                                    <li class=" <?php if ($active_page == "about"){ echo  "active"; }?> has-children nav_item"><a href="<?php echo "about"?>" class="dropdown-toggle">About</a>
                                    </li>
                                    <li class=" <?php if ($active_page == "services"){ echo  "active"; }?> has-children nav_item"><a href="#" class="dropdown-toggle">Services</a>
                                        <ul class="sub-menu">
                                            <li class="<?php if ($active_page == "engineering"){ echo  "active"; }?>"><a href="<?php echo "engineering"?>">Engineering services</a></li>
                                            <li class="<?php if ($active_page == "consultancy"){ echo  "active"; }?>"><a href="<?php echo "consultancy"?>">Consultancy Services</a></li>
                                        </ul>
                                    </li>
                                    <li class=" <?php if ($active_page == "project"){ echo  "active"; }?> has-children nav_item"><a href="<?php echo "projects"?>" class="dropdown-toggle">Projects</a>
                                    
                                    </li>
                            
                                    <li class=" <?php if ($active_page == "contact"){ echo  "active"; }?> nav_item"><a href="<?php echo "contact"?>" class="dropdown-toggle">Contact</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="navbar-toggle col-md-3 col-sm-3 col-xs-3">
                            <span id="mf-navbar-toggle" class="navbar-icon"><span class="navbars-line"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- masthead end -->