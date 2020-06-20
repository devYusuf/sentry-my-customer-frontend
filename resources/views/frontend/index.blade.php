<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>MyCustomer</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/img/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="frontend/assets/css/style.css">
  <link rel="stylesheet" href="frontend/assets/css/header-footer.css">
  <link rel="stylesheet" href="frontend/assets/css/index.css">
</head>

<body>

  <!-- Header start -->
  <header>
    <nav>
      <div class="container nav">
        <div class="nav__brand">
          <a href="#" class="nav__brand__logo">MyCustomer</a>
        </div>
        <div class="nav__menu">
          <div class="menu__container">
            <ul class="menu__list">
              <li class="menu__list__item"><a href="/" class="menu__list__link">Home</a></li>
              <li class="menu__list__item"><a href="/about" class="menu__list__link">About</a></li>
              <li class="menu__list__item"><a href="/faq" class="menu__list__link">FAQ</a></li>
              <li class="menu__list__item"><a href="/contact-us" class="menu__list__link">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="nav__button__container">
          <button class="nav__button "><a href="" class="nav__button__link">Log In</a></button>
          <button class="nav__button btn-nav-active"><a href="" class="nav__button__link__active">Sign Up</a></button>
        </div>
        <div class="hamburger-container">
          <div class="hamburger__menu">
            <div class="menubar menu-bar-one"></div>
            <div class="menubar menu-bar-two"></div>
            <div class="menubar menu-bar-three"></div>
          </div>
        </div>
      </div>
      <div id="mobile-menu" class="mobile-menu">
        <div class="close-mobile-menu">
          <i class="fas fa-times"></i>
        </div>
        <div class="mobile__nav__menu">
          <div class="mobile__menu__container">
            <ul class="mobile__menu__list">
              <li class="mobile__menu__list__item"><a href="/index" class="mobile__menu__list__link">Home</a>
              </li>
              <li class="mobile__menu__list__item"><a href="/about" class="mobile__menu__list__link">About</a>
              </li>
              <li class="mobile__menu__list__item"><a href="/faq" class="mobile__menu__list__link">FAQ</a></li>
              <li class="mobile__menu__list__item"><a href="/contact-us" class="mobile__menu__list__link">Contact
                  Us</a></li>
            </ul>
          </div>
          <div class="mobile__nav__button__container">
            <button class="mobile__nav__button"><a href="" class="mobile__nav__button__link">Log In</a></button>
            <button class="mobile__nav__button"><a href="" class="mobile__nav__button__link">Sign Up</a></button>
          </div>
        </div>
      </div>
    </nav>

  </header>
  <!-- header end -->

  <!-- Welcome-area-start -->
  <div class="welcome-area theme-bg" id="home">
    <div class="welcome-bg-thumb opacity-6" style="background-image: url(frontend/assets/img/bg-img/bg-patter.png);">
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="welcome-content">
            <h3 class="wow fadeInUp" data-wow-delay="0.4s">
              Keep track of your <span class="welcome-span">debtors</span>
            </h3>
            <p class="wow fadeInUp" data-wow-delay="0.6s">
              MyCustomer is an on-demand, scalable ledger solution for small and medium sized businesses globally
            </p>

            <div class="top-button-container">
              <button class="top-welcome-btn">
                <a href="" class="welcome-btn-link"><i class="fab fa-google-play"></i> Playstore</a>
              </button>
              <button class="top-welcome-btn">
                <a href="" class="welcome-btn-link"><i class="fab fa-apple"></i> Appstore</a>
              </button>
            </div>

            <!-- <div class="slider-btn mt-30">
                            <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><imgs
                                    src="frontend/assets/img/bg-img/bt-1.png" alt=""></a>
                            <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                    src="frontend/assets/img/bg-img/bt-2.png" alt=""></a>
                        </div> -->
          </div>
        </div>

        <!-- <div class="col-md-5">
                    <div class="welcome-thumb">
                        <img src="frontend/assets/img/bg-img/illustration-23.png" alt="">
                    </div>
                </div> -->
      </div>
    </div>
  </div>
  <!-- Welcome-area-end -->

  <!-- What we offer area start -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="feature-heading-container">
          <h2 class="feature__heading">
            Here’s everything myCustomer offers just for you!
          </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="feature-container">
          <div class="feature__text">
            <h3>Invoice reminders</h3>
            <p>This solution helps <br> business owners send overdue invoice <br> reminders to customers</p>
          </div>
          <div class="feature__image">
            <img src="frontend/assets/images/shade.png" alt="" class="feature__img__screen feature__img__screen-blk img-fluid">
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-container">
          <div class="feature__text">
            <h3>Debt collection</h3>
            <p>It makes it easier to keep track and manage debt collection easily through mobile devices</p>
          </div>
          <div class="feature__image">
            <img src="frontend/assets/images/screen.png" alt="" class="feature__img__screen img-fluid">
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="feature-container">
          <div class="feature__text">
            <h3>Sales messaging</h3>
            <p>Provides a way for business owners to push unique sales messaging directly to their customers.</p>
          </div>
          <div class="feature__image">
            <img src="frontend/assets/images/screen two.png" alt="" class="feature__img__screen img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- What we offer area end -->

  <!-- Feature Area -->
  <div class="feature-area section-padding-100-50" id="feature">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-heading text-center">
            <h4>myCustomer features</h4>
            <p>Aliquid qui tempore aspernatur earum, Qui dolores molestias minus esse cumque deleniti
              impedit quo nostrum omnis et delectus.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Single Feature area -->
        <div class="col-md-6 col-lg-4">
          <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
            <!-- Feature Icon -->
            <div class="feature-icon">
              <img src="frontend/assets/img/icon-img/4.svg" alt="">
            </div>
            <!-- Single Feature Text -->
            <div class="feature-content-text">
              <h4>Trustworthy</h4>
              <p class="mb-0">Our apps are trusted by over 1000 users across the globe</p>
            </div>
          </div>
        </div>

        <!-- Single Feature area -->
        <div class="col-md-6 col-lg-4">
          <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
            <!-- Feature Icon -->
            <div class="feature-icon">
              <img src="frontend/assets/img/icon-img/5.svg" alt="">
            </div>
            <!-- Single Feature Text -->
            <div class="feature-content-text">
              <h4>Easy to use</h4>
              <p class="mb-0">We created software in such a way that it is easy to use and navigate</p>
            </div>
          </div>
        </div>

        <!-- Single Feature area -->
        <div class="col-md-6 col-lg-4">
          <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
            <!-- Feature Icon -->
            <div class="feature-icon">
              <img src="frontend/assets/img/icon-img/9.svg" alt="">
            </div>
            <!-- Single Feature Text -->
            <div class="feature-content-text">
              <h4>Fast</h4>
              <p class="mb-0">With state of the art servers we introduce you to a new level of speed</p>
            </div>
          </div>
        </div>

        <!-- Single Feature area -->
        <!-- <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Feature Icon
                        <div class="feature-icon">
                            <img src="frontend/assets/img/icon-img/6.svg" alt="">
                        </div>
                        <!-- Single Feature Text
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                        </div>
                    </div>
                </div> -->

        <!-- Single Feature area -->
        <!-- <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Feature Icon
                        <div class="feature-icon">
                            <img src="frontend/assets/img/icon-img/7.svg" alt="">
                        </div>
                        <!-- Single Feature Text
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                        </div>
                    </div>
                </div> -->

        <!-- Single Feature area -->
        <!-- <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Feature Icon
                        <div class="feature-icon">
                            <img src="frontend/assets/img/icon-img/8.svg" alt="">
                        </div>
                        <!-- Single Feature Text
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                        </div>
                    </div>
                </div> -->
      </div>
    </div>
  </div>
  <!-- Feature Area -->

  <!-- Why We Are Area -->
  <div class="why-we-are-area section-padding-100-50" id="about">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">
          <div class="why-we-content-text mb-50">
            <h3>See how myCustomer is impacting lives</h3>
            <p>We have reached a wide number of small buisness owners in NIgeria and our goal is to reach small buisness
              owners all over Africa and keep impacting on their lives
            </p>

            <div class="button-area mt-50">
              <a class="btn feature__action__btn boxed-btn" href="#">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="video-us-thumb text-center">
            <div class="video-thumb">
              <img src="frontend/assets/img/bg-img/22.png" alt="">
            </div>
            <!-- Video Icon -->
            <div class="video-icon">
              <a href="https://www.youtube.com/watch?v=gbXEPHsTkgU" class="video-btn pulse" id="videobtn"><i
                  class="fa fa-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Why We Are Area -->

  <!-- Call to action area start-->

  <div class="container cta-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="call-to-download-container">
          <div class="call-to-download__heading">
            <h2>Download the app and get started</h2>
          </div>
          <div class="call-to-download__buttons">
            <button class="call-to-download__button">
              <i class="fab fa-google-play"></i><a href="" class="welcome-btn-link">Get it on
                <span><b>Playstore</b></span></a>
            </button>
            <button class="call-to-download__button">
              <i class="fab fa-apple"></i><a href="" class="welcome-btn-link">Get it on <span><b>Appstore</b></span></a>
            </button>
          </div>
          <div class="call-to-download-floating-triangles">
            <img src="frontend/assets/images/Vector 3.png" alt="" class="floating__circle">
            <img src="frontend/assets/images/Vector 5.png" alt="" class="floating__circle">
          </div>
          <div class="call-to-download-floating-circle">
            <img src="frontend/assets/images/Ellipse 2.png" alt="" class="floating__circle">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to action area end -->


  <!-- App Screen Shot Area -->
  <div class="app-screen-shot-area gray-bg section-padding-100" id="work">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="app-shot">
            <div><img src="frontend/assets/img/bg-img/21.png" alt=""></div>
            <div><img src="frontend/assets/img/bg-img/22.png" alt=""></div>
            <div><img src="frontend/assets/img/bg-img/23.png" alt=""></div>
            <div><img src="frontend/assets/img/bg-img/18.png" alt=""></div>
            <div><img src="frontend/assets/img/bg-img/19.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- App Screen Shot Area -->


  <!-- Client Feedback Area -->
  <div class="client-feedback-area section-padding-100" id="client">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-heading text-center">
            <h4>Testimonials</h4>
            <p>Aliquid qui tempore aspernatur earum, Qui dolores molestias minus esse cumque deleniti
              impedit quo nostrum omnis et delectus.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="client-silder owl-carousel">
            <!-- Single Slider -->
            <div class="row align-items-center">
              <div class="col-sm-8">
                <!-- Client Content -->
                <div class="client-desc client-mt-50">
                  <p>I must explain to you how all this mistaken idea of will give you a complete
                    denouncing pleasure and praising pain was born and I will give you a complete
                    account of the system, and expound the actual teachings of the great explorer of
                    the truth, the master-builder of human happiness.</p>

                  <h4>Angel Diha - <span>England</span></h4>
                </div>
              </div>
            </div>

            <!-- Single Slider -->
            <div class="row align-items-center">
              <div class="col-sm-8">
                <!-- Client Content -->
                <div class="client-desc client-mt-50">
                  <p>I must explain to you how all this mistaken idea of will give you a complete
                    denouncing pleasure and praising pain was born and I will give you a complete
                    account of the system, and expound the actual teachings of the great explorer of
                    the truth, the master-builder of human happiness.</p>

                  <h4>Zonas Diha - <span>America</span></h4>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Client Feedback Area -->

  <!-- Footer start -->
  <footer>
    <div class="container footer__container">
      <div class="row">
        <div class="col-lg-6 footer_left">
          <div class="footer__brand__container">
            <p class="footer__brand">MyCustomer</p>
            <a href="/" class="footer__brand__tagline">customerpay.me</a>
          </div>
        </div>
        <div class="col-lg-6 footer_right">
          <div class="footer__menu">
            <div class="footer__menu__container">
              <ul class="footer__menu__list">
                <li class="footer__menu__list__item"><a href="/" class="footer__menu__list__link">Home</a></li>
                <li class="footer__menu__list__item"><a href="/about" class="footer__menu__list__link">About</a>
                </li>
                <li class="footer__menu__list__item"><a href="/faq" class="footer__menu__list__link">FAQ</a></li>
                <li class="footer__menu__list__item"><a href="/contact-us" class="footer__menu__list__link">Contact
                    Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="social-buttons">
            <a href="#" class="social-link"><i class="social-button__icon fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="social-button__icon fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="social-button__icon fab fa-instagram"></i></i></a>
          </div>
        </div>
      </div>
  </footer>
  <!-- Footer end -->

  <!-- Core JS here - dont touch -->
  <script src="frontend/assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="frontend/assets/js/popper.min.js"></script>
  <script src="frontend/assets/js/bootstrap.min.js"></script>
  <script src="frontend/assets/js/owl.carousel.min.js"></script>
  <script src="frontend/assets/js/jquery.easing.min.js"></script>
  <script src="frontend/assets/js/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="frontend/assets/js/wow.min.js"></script>
  <script src="frontend/assets/js/jquery.slicknav.min.js"></script>
  <script src="frontend/assets/js/slick.min.js"></script>
  <script src="frontend/assets/js/bundle.js"></script>

  <!-- Custom js-->
  <script src="frontend/assets/js/main.js"></script>
  <script src="frontend/assets/js/header-footer.js"></script>


</body>

</html>


<!-- Header start -->
<!-- <nav class="navbar navbar-expand-lg fixed-top custom_nav_menu">
        <div class="container">

            <a class="navbar-brand logo" href="#">
                <img src="frontend/assets/img/logo.png" alt="" class="img-fluid logo-light">
                <img src="frontend/assets/img/logo.png" alt="" class="img-fluid logo-dark">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class='ti-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Client</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Login</a>
                    </li>
                </ul>
                <div class="d-lg-flex d-none">
                    <ul class="nav align-self-center">
                        <li class="nav-item pl-4">
                            <a class="btn header-btn" href="#">
                                SignUp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> -->
<!-- Header end -->

<!-- Footer Contact Area -->
<!-- <div class="footer-contact-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Footer Widget
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p class="mt-30">Voluptatibus labore doloribus id consequatur ducimus eum, voluptate
                            reprehenderit sit debitis eligendi.</p>
                        <!-- Contact Icon
                        <div class="footer-contact-icon">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Job News</a></li>
                            <li><a href="#">Press News</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Solutions</h4>
                        <ul>
                            <li><a href="#">Imperdiet</a></li>
                            <li><a href="#">Partueient</a></li>
                            <li><a href="#">Faucibus</a></li>
                            <li><a href="#">Ultricies</a></li>
                            <li><a href="#">Vitae vel</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-single-widget mb-50">
                        <h4>Contact info</h4>
                        <ul>
                            <li><a href="#"><i class="ti-location-pin"></i> 112 Appto, White House</a></li>
                            <li><a href="#"><i class="ti-pin2"></i> New Jercy, USA</a></li>
                            <li><a href="#"><i class="ti-email"></i> example@@gmail.com</a></li>
                            <li><a href="#"><i class="ti-mobile"></i> +00 223 260</a></li>
                            <li><a href="#"><i class="ti-location-pin"></i> ti-world</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact Area

    <!-- Copy Right Area
    <div class="copy-right-area">
        <div class="container">
            <div class="row">
                <!-- Copy Right Menu
                <div class="col-md-6">
                    <div class="copy-right-menu">
                        <ul>
                            <li><a href="#">Privace &amp; Policy</a></li>
                            <li><a href="#">Faq's</a></li>
                            <li><a href="#">Get a Quote</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Copy Right Content
                <div class="col-md-6 text-right mt-sm-cu-30">
                    <div class="copy-right-content">
                        <p>Copyright ©2020. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- Price Table Area -->
<!-- <div class="price-table-area  section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading text-center">
                        <h4>Pricing Plan</h4>
                        <p>Aliquid qui tempore aspernatur earum, Qui dolores molestias minus esse cumque deleniti
                            impedit quo nostrum omnis et delectus.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Price Table Area
                <div class="col-md-6 col-lg-4">
                    <div class="single-price-table-area">
                        <div class="price-table-heading text-center">
                            <h6>Shared App</h6>
                            <h2>$4.99 <span>/month</span></h2>
                        </div>
                        <!-- Body Text
                        <div class="price-table-body">
                            <ul>
                                <li><i class="ti-hand-point-right"></i> 23000 visits per month</li>
                                <li><i class="ti-hand-point-right"></i> 04 Beautiful Site</li>
                                <li><i class="ti-hand-point-right"></i> 60GB Storage</li>
                                <li><i class="ti-hand-point-right"></i> 250 GB Bandwidth/mo</li>
                                <li><i class="ti-hand-point-right"></i> Unlimited Email Addresses</li>
                                <li><i class="ti-hand-point-right"></i> 24/7 Support</li>
                            </ul>
                            <div class="price-table-button">
                                <a class="btn boxed-btn" href="#">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table Area
                <div class="col-md-6 col-lg-4">
                    <div class="single-price-table-area">
                        <div class="price-table-heading text-center">
                            <h6>Pro Plan</h6>
                            <h2>$14.88 <span>/month</span></h2>
                        </div>
                        <!-- Body Text
                        <div class="price-table-body">
                            <ul>
                                <li><i class="ti-hand-point-right"></i> 23000 visits per month</li>
                                <li><i class="ti-hand-point-right"></i> 04 Beautiful Site</li>
                                <li><i class="ti-hand-point-right"></i> 60GB Storage</li>
                                <li><i class="ti-hand-point-right"></i> 250 GB Bandwidth/mo</li>
                                <li><i class="ti-hand-point-right"></i> Unlimited Email Addresses</li>
                                <li><i class="ti-hand-point-right"></i> 24/7 Support</li>
                            </ul>
                            <div class="price-table-button">
                                <a class="btn boxed-btn" href="#">Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table Area
                <div class="col-md-6 col-lg-4">
                    <div class="single-price-table-area">
                        <div class="price-table-heading text-center">
                            <h6>Private App</h6>
                            <h2>$39.99 <span>/month</span></h2>
                        </div>
                        <!-- Body Text
                        <div class="price-table-body">
                            <ul>
                                <li><i class="ti-hand-point-right"></i> 23000 visits per month</li>
                                <li><i class="ti-hand-point-right"></i> 04 Beautiful Site</li>
                                <li><i class="ti-hand-point-right"></i> 60GB Storage</li>
                                <li><i class="ti-hand-point-right"></i> 250 GB Bandwidth/mo</li>
                                <li><i class="ti-hand-point-right"></i> Unlimited Email Addresses</li>
                                <li><i class="ti-hand-point-right"></i> 24/7 Support</li>
                            </ul>
                            <div class="price-table-button">
                                <a class="btn boxed-btn" href="#">Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Price Table Area -->

<!-- Call to action Area -->
<!-- <div class="call-to-desc-area  gray-bg">
        <div class="container section-padding-100">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-area">
                        <div class="row justify-content-center">
                            <!-- Single Content
                            <div class="col-lg-7 col-md-7">
                                <div class="single-call-desc-content ca-mb-50">
                                    <h4>Refer a friend &amp; enjoy 1 year free subscription</h4>
                                    <p>With Appto, you can build anything using a single platform, instead of managing
                                        dozens of different themes.</p>
                                    <div class="slider-btn mt-30">
                                        <a class="boxed-btn" href="#"><span>Refer a friend</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5">
                                <div class="thumb">
                                    <img src="frontend/assets/img/bg-img/subscribe-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Call to action Area -->
