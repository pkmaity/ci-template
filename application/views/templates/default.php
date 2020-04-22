<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (!empty($title)) ? $title : "Parivar Care"; ?></title>
    <link rel="icon" href="<?php echo base_url("/assets/images/vs-logo.png"); ?>" type="image/png" sizes="16x16">
	<link href="<?php echo base_url("/assets/css/bootstrap.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("/assets/css/style.css"); ?>" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/owl.carousel.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/owl.theme.default.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/responsive.css"); ?>">
  </head>
  <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-0 custom flex-wrap">
            <div class="container position-relative">
                <div class="d-flex align-items-center py-2 top-left">
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url("/assets/images/logo.png"); ?>" width="200" alt="" class="img-fluid" /></a>
                    <a href="#" class="text-success d-none d-md-block d-lg-none"><img src="<?php echo base_url("/assets/images/phone.png"); ?>" class="mr-2 img-fluid">033-2000 1200</a>
                    <div class="form-group srch mb-md-0 bg-light">
                        <select class="form-control bg-light">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <div class="top-btn-grp top-right position-relative">
                    <a href="#" class="text-success d-none d-lg-block"><img src="<?php echo base_url("/assets/images/phone.png"); ?>" class="mr-2 img-fluid">033-2000 1200</a>
                    <a class="btn btn-success" href="business-list.html">Free Business Listing</a>
                    <a class="btn btn-warning" href="join.html">Join <span class="d-none d-sm-inline-block">Free</span></a>
                    <button class="btn btn-outline-warning" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-none d-sm-block">Login</span><span class="d-block d-sm-none"><i class="fa fa-user"></i></span></button>
                    <div class="dropdown-menu login-drop p-0" aria-labelledby="dropdownMenuButton">

                        <div class="p-3">
                            <h5 class="mb-4">Welcome</h5>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control bg-light" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-3 input-icon-grp">
                                <input type="Password" class="form-control bg-light" placeholder="Password">
                                <span class="input-icon"><img src="<?php echo base_url("/assets/images/eye.png"); ?>" /></span>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label light" for="customCheck1">Remember me</label>
                            </div>
                            <div>
                                <a href="#" class="text-success text-decoration-none">Forgot Password</a>
                            </div>
                            </div>
                            <div class="">
                                <button onClick="window.location='dashboard.html';" class="btn btn-warning bold btn-block small m-0">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid px-0 bg-light">
                <div class="container px-0  position-relative">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="text-success d-sm-none"><img src="<?php echo base_url("/assets/images/phone.png"); ?>" class="mr-2 img-fluid">033-2000 1200</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav cus-menu d-flex w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="services.html">Services We Offer</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="careers.html">Careers</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">Help Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            </nav>
        </header>
        
        <?php echo $body; ?>

        <section class="prefooter py-5">
            <div class="container">
                <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0 d-inline-flex">
                    <div class="mr-2"> <span class="gray-circle"> <img src="<?php echo base_url("/assets/images/win.png"); ?>" /> </span> </div>
                    <div class="ml-2">
                        <h6 class="mb-2 text-muted">High Quality & Trusted Professionals</h6>
                        <p class="mb-0 bold">We provide only verified, background checked and high quality professionals </p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0 d-inline-flex">
                    <div class="mr-2"> <span class="gray-circle"> <img src="<?php echo base_url("/assets/images/hired.png"); ?>" /> </span> </div>
                    <div class="ml-2">
                        <h6 class="mb-2 text-muted">Matched to Your Needs</h6>
                        <p class="mb-0 bold">We match you with the right professionals with the right budget</p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0 d-inline-flex">
                    <div class="mr-2"> <span class="gray-circle"> <img src="<?php echo base_url("/assets/images/like.png"); ?>" /> </span> </div>
                    <div class="ml-2">
                        <h6 class="mb-2 text-muted">Hassle Free Service Delivery</h6>
                        <p class="mb-0 bold">Super convenient, guaranteed service from booking to delivery</p>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="footer pt-5 pb-3">
            <div class="container">
                <div class="row border-bottom py-4 align-items-center">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url("/assets/images/logo.png"); ?>" width="210" />
                    </div>
                    <div class="col-sm-8">
                        <ul class="foot-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services We Offer</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li class="text-success"><img src="<?php echo base_url("/assets/images/phone.png"); ?>" class="img-fluid mr-2" />033-2000 1200</li>
                        </ul>
                    </div>
                </div>
                <div class="row py-4 border-bottom">
                    <div class="col-sm-4">
                    <h6 class="text-muted mb-3">Follow us on</h6>
                        <ul class="social">
                            <li><a href="#"><img src="<?php echo base_url("/assets/images/facebook.png"); ?>" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url("/assets/images/twitter.png"); ?>" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url("/assets/images/linkedin.png"); ?>" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url("/assets/images/instagram.png"); ?>" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url("/assets/images/youtube.png"); ?>" /></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <h6 class="text-muted">Follow us on</h6>
                        <div class="row">
                            <div class="col-6 col-xl-4">
                                <a href="faq.html" class="d-block">Help Centre </a>
                                <a href="blog.html" class="d-block">Blog </a>
                            </div>
                            <div class="col-6 col-xl-4">
                                <a href="privacy.html" class="d-block">Privacy  </a>
                                <a href="refund.html" class="d-block">Refund Policy  </a>
                                <a href="terms.html" class="d-block">Terms </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6 class="text-muted mb-3">Newsletter</h6>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control small px-3 py-2 h-auto" placeholder="Enter Service Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-success small px-3 py-2" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="div d-flex copy pt-3 justify-content-between">
                    <div>
                        <p class="m-0">© 2020 ParivarCare. All Rights Reserved.</p>
                    </div>
                    <div>
                        <span class="small text-muted">Powered by <a href="https://www.venturesupport.in/" target="_blank"><img src="<?php echo base_url("/assets/images/vs-logo.png"); ?>" class="ml-2" width="25"></a></span>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
        <script src="<?php echo base_url("/assets/js/jquery-3.3.1.min.js"); ?>"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url("/assets/js/popper.min.js"); ?>"></script> 
        <script src="<?php echo base_url("/assets/js/bootstrap-4.3.1.js"); ?>"></script>
        <script src="<?php echo base_url("/assets/js/owl.carousel.js"); ?>"></script> 
        <script>
            $('.item-slider').owlCarousel({
                loop:false,
                margin:15,
                nav:true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            })
            $('.blog-slider').owlCarousel({
                loop:false,
                margin:15,
                nav:true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })
            $('.client-slider').owlCarousel({
                    loop:false,
                    margin:10,
                    nav:true,
                    dots: false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:2
                        }
                    }
        })
        </script>
  </body>
</html>