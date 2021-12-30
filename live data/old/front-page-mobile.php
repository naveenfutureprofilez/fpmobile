<?php 
/* Template Name: mobile home*/

//get_header('mobile');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Future Profilez</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="application-name" content="Future Profilez" />
    <meta name="apple-mobile-web-app-title" content="Future Profilez" />
    <meta name="theme-color" content="#00abff" />
    <meta name="msapplication-navbutton-color" content="#14c3bf" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="img/fevicon.ico">
    <link rel="icon" type="<?php echo get_template_directory_uri();?>/mobile/image/png" href="<?php echo get_template_directory_uri();?>/mobile/img/fevicon.ico">
    <!-- links -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/mobile/css/bootstrap.min.css">
    <link type="text/css" media="all" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/mobile/css/style.css?655556asdjhgjf65">
    <link rel="preload" as="font" onload="this.onload=null;this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="page-wrap">
        <header class="pt-3 pb-2">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="mobile-toggle mobile-toggler">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/mobile/img/fp-logo.svg" class="img-fluid" alt="logo">
                </div>
                <div class="callnow">
                    <a href="tel:123456789">
                        <div class="d-flex justify-content-center">
                            <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.12942 0.177458L1.64366 0.0383419C2.12636 -0.0918776 2.64108 0.118819 2.84802 0.530507L3.25856 1.35065C3.4373 1.70774 3.33837 2.12792 3.01291 2.38917L2.10772 3.11629C2.16316 3.55144 2.33617 3.97971 2.62579 4.4011C2.90097 4.80883 3.27004 5.16569 3.71115 5.45054L4.79842 5.14319C5.21086 5.02712 5.65963 5.16098 5.91197 5.47521L6.50125 6.20719C6.79517 6.57277 6.7426 7.07667 6.37795 7.38644L5.98701 7.71846C5.59798 8.04886 5.04216 8.16897 4.52839 8.03309C3.31495 7.7128 2.19949 6.76204 1.18151 5.1808C0.162109 3.59714 -0.197766 2.25288 0.102369 1.14966C0.22854 0.685395 0.619001 0.315362 1.12942 0.177458Z" fill="#00ABFF" />
                            </svg>
                            <p>Call Now</p>
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="tabbing-nav scroll-content ">
            <div class="container sticky-top tabnavbar pb-0">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Technologies</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Industries</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content pt-3 " id="myTabContent ">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="container">
                        <div class="listing-page row">
                            <div class="col-md-12 mb-2">
                                <div class="shadow webBox ">
                                    <a href="https://futureprofilez.com/design-development-mobile/" class="text-left">
                                        <h2>web-design</h2>
                                        <p>Design that Empowers your Online Identity</p>
                                    </a>
                                    <a href="https://futureprofilez.com/design-development-mobile/" class="img-right">
                                        <img src="<?php echo get_template_directory_uri();?>/mobile/img/web-design.svg" class="img-fluid" alt="web design">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="shadow webBox ">
                                    <a href="https://futureprofilez.com/web-development/" class="text-left">
                                        <h2>Web Development</h2>
                                        <p>Solutions for Fine-Tuning your Business Experience.</p>
                                    </a>
                                    <a href="https://futureprofilez.com/web-development/" class="img-right">
                                        <img src="<?php echo get_template_directory_uri();?>/mobile/img/web-dev.svg" class="img-fluid" alt="web design">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="shadow webBox ">
                                    <a href="https://futureprofilez.com/mobile-solutions/" class="text-left">
                                        <h2>Apps Development</h2>
                                        <p>Our application makes advanced Operations work Seamlessly.</p>
                                    </a>
                                    <a href="https://futureprofilez.com/mobile-solutions/" class="img-right">
                                        <img src="<?php echo get_template_directory_uri();?>/mobile/img/app-dev.svg" class="img-fluid" alt="web design">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="shadow webBox ">
                                    <a href="https://futureprofilez.com/ecommerce/" class="text-left">
                                        <h2>e-Com Development</h2>
                                        <p>e-Commerce solution that Brings your Guaranteed Leads.</p>
                                    </a>
                                    <a href="https://futureprofilez.com/ecommerce/" class="img-right">
                                        <img src="<?php echo get_template_directory_uri();?>/mobile/img/ecom-dev.svg" class="img-fluid" alt="web design">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="shadow webBox ">
                                    <a href="https://futureprofilez.com/digital-marketing-mobile/" class="text-left">
                                        <h2>Digital Marketing</h2>
                                        <p>Our applicatio n makes advance Operation work Seamlessly.</p>
                                    </a>
                                    <a href="https://futureprofilez.com/digital-marketing-mobile/" class="img-right">
                                        <img src="<?php echo get_template_directory_uri();?>/mobile/img/dig-dev.svg" class="img-fluid" alt="web design">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="container">
                        <div class="listing-page row">
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">  
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-wp.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Wordpress</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-php.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Custome PHP</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-shopify.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Shopify</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-symphony.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Symfony</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-drupal.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Drupal</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-code.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Codelgniter</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-woo.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Woocommerce</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-cake.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>CakePhp</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-magento.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Magento</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-opencart.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>OpenCart</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-laravel.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Laravel</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tech-presta.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>PrestaShop</h2>
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                        <a href="#" class="main-btn my-3">VIEW PORTFOLIO</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="container">
                        <div class="listing-page row">
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">  
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/per-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Personal & Autobiography</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/eco-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Ecommerce
B2B</h2>
                                    </a>
                                </div>
                            </div>

                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/ngo-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>NGO
Crowdfunding</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/blog-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Blog Forum</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/hea-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Healthcare</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/rea-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Real Estate</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/foo-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Food Restaurant</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/auto-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Automotives</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/fin-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Finance Insurance</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/eve-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Event Tickets</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/tra-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Travel Tour</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/med-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Media
Entertainment</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/soc-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Social Networking</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/edu-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Education</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/job-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Job portal</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/mar-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Marketplace</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/cor-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Corporate</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/spo-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Sports Yoga</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/poo-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Pool Resort</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/dir-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Directory Classified</h2>
                                    </a>
                                </div>
                            </div>
                             <div class="col-4 mb-2">
                                <div class="shadow tech ">
                                    <a href="#">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/mobile/img/med-ind.svg" class="img-fluid" alt="technology">
                                        </figure>
                                        <h2>Media
Entertainment</h2>
                                    </a>
                                </div>
                            </div>
                            

                          
                           
                        </div>
                        <a href="#" class="main-btn my-3">VIEW PORTFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container">
                <div class="contact-toggle">Contact Us</div>
            </div>
        </footer>
        <!-- bottom slider -->
        <div class="bottomFooter">
            <div class="container">
                <div class="contact-toggle">Contact Us</div>
                <div class="arrow py-1 m-auto d-table">
                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L7 7.5L13 1.5" stroke="#324148" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <p>Sorry, we aren't online at the moment. Leave a message and we'll get back to you.</p>
                <div class="contact-form">
                    <div class="form-group mb-4">
                        <input type="text" placeholder="Enter your name" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" placeholder="Enter you e-mail" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <textarea placeholder="Description" class="form-control">
                        </textarea>
                    </div>
                    <div class="form-group mb-4">
                        <input type="submit" value="Send US" class="sendus">
                    </div>
                </div>
                <div class="or-sap">
                    <h2>or</h2>
                </div>
                <h3>Get Instant Help</h3>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/mailicon.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/hangout.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/whatsappicon.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/skypeicon.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/callicon.svg" class="img-fluid" alt="icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar toogle -->
    <div class="navbarToggle mobile-toggler">
        <div class="toogleClose">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 1L1 17M17 17L1 1L17 17Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <nav class='animated bounceInDown'>
            <ul>
            <li> <a href="<?php echo site_url();?>">Home</a> </li>
            <li> <a href="#">Service <i class="fa fa-angle-right "></i></a>                        
              <ul>
              <li class=""><a href="<?php echo site_url();?>/design-development-mobile/">Web Design</a></li>                                          
                <li class=""><a href="<?php echo site_url();?>/web-development/">Web Development</a></li>
                <li class=""><a href="<?php echo site_url();?>/mobile-solutions/">Mobile Application</a></li>
                <li class=""><a href="<?php echo site_url();?>/ecommerce/">E-Business Development</a></li>
                <li class=""><a href="<?php echo site_url();?>/digital-marketing-mobile/">Digital Marketing</a></li>
                
              </ul>
            </li>  
            <li> <a href="#">Technologies <i class="fa fa-angle-right "></i></a>  
             <ul>                                          
                <li class=""><a href="<?php echo site_url();?>/wordpress-development-company/">WordPress</a></li>
                <li class=""><a href="<?php echo site_url();?>/shopify">Shopify</a></li>
                <li class=""><a href="<?php echo site_url();?>/magento-ecommerce-web">Magento</a></li>
                <li class=""><a href="<?php echo site_url();?>/symfony">Symfony</a></li>
                <li><a href="<?php echo site_url();?>/opencart/">OpenCart</a></li>
                <li><a href="<?php echo site_url();?>/drupal">Drupal</a></li>
                <li><a href="<?php echo site_url();?>/laravel">Laravel</a></li>
                <li><a href="<?php echo site_url();?>/codeigniter">Codelgniter</a></li>
                <li><a href="<?php echo site_url();?>/prestashop">PrestaShop</a></li>
              </ul>    
             </li>
              <li> <a href="#">Industries <i class="fa fa-angle-right "></i></a>
                <ul>                                          
                <li class=""><a href="<?php echo site_url();?>/industry/ecommerce-web-portal-development-company-india/">Ecommerce B2B</a></li>
                <li class=""><a href="<?php echo site_url();?>/industry/online-food-web-development-company-in-india/">Food  Restaurant</a></li>
                <li class=""><a href="<?php echo site_url();?>/industry/blog-and-forum-website/">Blog Forum</a></li>
                <li class=""><a href="<?php echo site_url();?>/industry/on-demand-solutions/">On-demand</a></li>
                <li><a href="<?php echo site_url();?>/industry/healthcare-web-portal-development-company-in-india">Healthcare</a></li>
                <li><a href="<?php echo site_url();?>/industry/real-estate-website-development-company-india/">Real Estate</a></li>
                <li><a href="<?php echo site_url();?>/industry/transport-website-development-company-india/">Automotives</a></li>
                <li><a href="<?php echo site_url();?>/industry/finance-web-portal-development-company-in-india">Finance Insurance</a></li>
                <li><a href="<?php echo site_url();?>/industry/event-tickets/">Event  Tickets</a></li>
                <li><a href="<?php echo site_url();?>/industry/travel-website-development-company-india/">Travel  Tour</a></li>
                <li><a href="<?php echo site_url();?>/industry/media-entertainment/">Media Entertainment</a></li>
                <li><a href="<?php echo site_url();?>/industry/social-networking/">Social Networking</a></li>
                <li><a href="<?php echo site_url();?>/industry/elearning-web-development-company-in-india/">Education</a></li>
                <li><a href="<?php echo site_url();?>/industry/job-portal/">Job portal</a></li>
                <li><a href="<?php echo site_url();?>/industry/marketplace/">Marketplace</a></li>
                <li><a href="<?php echo site_url();?>/industry/corporate-organization/">Corporate</a></li>
                <li><a href="<?php echo site_url();?>/industry/sports-and-yoga-web-development-company-india/">Sports  Yoga</a></li>
                 <li><a href="<?php echo site_url();?>/industry/pool-and-other-projects/">Pool  Resort</a></li>
                  <li><a href="<?php echo site_url();?>/industry/directory-classified/">Directory  Classified</a></li>
                   <li><a href="<?php echo site_url();?>/industry/ngo-and-crowdfunding/">NGO  Crowdfunding</a></li>
                   <li><a href="<?php echo site_url();?>/industry/personal-and-autobiography/">Personal and Autobiography</a></li>
              </ul>    

              </li>
            <li> <a href="<?php echo site_url();?>/our-work/">Portfolio</a> </li>
            <li class=""><a href="<?php echo site_url();?>/blog/">Blog </a></li>
            <li class=""><a href="<?php echo site_url();?>/career/">Career </a></li>
            <li class=""><a href="<?php echo site_url();?>/contact-us/">Contact Us</a></li>
             <li class=""><a href="<?php echo site_url();?>/terms-conditions/">Terms & Condition</a></li>
               

          </ul>
        </nav>
        <div class="mobile-social">
            <h3>Get Instant Help</h3>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/mailicon.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/hangout.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/whatsappicon.svg" class="<?php echo get_template_directory_uri();?>/mobile/img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/skypeicon.svg" class="img-fluid" alt="icon"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/mobile/img/callicon.svg" class="img-fluid" alt="icon"></a></li>
                    </ul>
                </div>
                <p>Copyright @ 2021</p>
        </div>
    </div>
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i>Back</a>
    <!-- JavaScript -->
    <script defer src="<?php echo get_template_directory_uri();?>/mobile/js/jquery-3.6.0.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/mobile/js/bootstrap.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/mobile/js/common.js"></script>
</body>

</html>

<?php //get_footer('mobile');

?>

