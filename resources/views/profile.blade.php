<!DOCTYPE html>
<html>
    <head>
        <title>Waruq::Portfolio/title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">        
        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            @include('partials.navigation')
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="small-section bg-dark-alfa-30 parallax-2" data-background="images/full-width-images/section-bg-18.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Portfolio</h1>
                            <div class="hs-line-4 font-alt">
                                An eye for detail makes our works excellent
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Portfolio</a>&nbsp;/&nbsp;<span>Boxed</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Portfolio Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">All works</a>
                        <a href="#branding" class="filter" data-filter=".branding">Branding</a>
                        <a href="#design" class="filter" data-filter=".design">Design</a>
                        <a href="#photography" class="filter" data-filter=".photography">Photography</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hide-titles" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography">
                            <a href="images/portfolio/full-project-1.jpg" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-1.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Portrait</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-2.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Vase 3D</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-3.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Boy in T-shirt</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-4.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-5.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-6.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-7.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-8.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Vase 3D</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-9.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Boy in T-shirt</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-10.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-11.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-12.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Vase 3D</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-13.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Boy in T-shirt</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-14.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-15.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix design branding">
                            <a href="images/portfolio/full-project-3.jpg" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-1.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Young Man</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->
            
            
            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Like Our Creative Works?</h3>
                        <div>
                            <a href="#" class="btn btn-mod btn-w btn-medium btn-round">Start Project</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top"><img src="images/logo-footer.png" width="78" height="36" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->  
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="../../themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Rhythm 2017</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Made with love for great people.
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="../../https@maps.googleapis.com/maps/api/js@key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
