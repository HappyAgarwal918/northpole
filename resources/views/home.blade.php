@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="banner-section banner-one">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" style="margin-bottom: -14px">
        <source src="{{asset ('assets/videos/northpole.mp4')}}" type="video/mp4">
    </video>
    </div>
</section>
<!--End Banner Section -->
<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title Block-->
            <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional service while offering our employees the best training.</div>
                    </div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                <a href="web_designing">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fa">&#xf108;</i></span></div>
                        <h6><a href="web_designing">Web <br>designing</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <a href="web_development">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fas fa-laptop-code"></i></span></div>
                        <h6><a href="web_development">Website <br>Development</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="graphic_designing">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fab fa-adobe"></i></span></div>
                        <h6><a href="graphic_designing">Graphic UI/UX<br>designing</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <a href="digital_marketing">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fas fa-ad"></i></span></div>
                        <h6><a href="digital_marketing">Digital <br>marketing</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="seo">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><i class="fas fa-users-cog"></i></div>
                        <h6><a href="seo">Content <br>writing</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <a href="mobile_applications">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fab fa-app-store-ios"></i></span></div>
                        <h6><a href="mobile_applications">Mobile <br>Applications</a></h6>
                    </div>
                </a>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                <a href="software_testing">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fa">&#xf085;</i></span></div>
                        <h6><a href="software_testing">Software <br>testing</a></h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--About Section-->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{asset('assets/images/featured-image-1.jpg')}}" alt=""></div>
                    <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{asset('assets/images/featured-image-2.jpg')}}" alt=""></div>
                </div>
            </div>
            <!--Text Column-->
            <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>NorthPole is India’s growing and leading IT company in Chandigarh and Mohali.</h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional
                            service while offering our employees the best training.</div>
                    </div>
                    <div class="text">
                        <p> We work on attaining the constant reputation on all freelancing portals and in the IT market. NorthPole has gained a lot of clients all over the world. We cover almost every part of the world in IT projects includes Website Design, Development, Designing, and Social Media Marketing.</p>
                    </div>
                    <div class="text clearfix">
                        <ul>
                            <li>
                            <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                Believe in long-term business relations.</li>
                            <li>
                            <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                100% satisfaction criteria.</li>
                            <li>
                            <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                Genuine rates and time efficiency.</li>
                            <li>
                            <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                Best and Multiple services.</li>
                            <li>
                            <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                Understand the value of each penny spent.</li>

                        </ul>
                        <!--<div class="since"><span class="txt">Since <br>2008</span></div></div>-->
                        <div class="link-box">
                            <a class="theme-btn btn-style-one" href="about">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Live Section-->
<section class="live-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Experience us live <span class="dot">.</span></h2>
        </div>
        <div class="main-image-box">
            <div class="image-layer" style="background-image: url(assets/images/featured-image-3.jpg);"></div>
            <div class="inner clearfix">
                <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="round-inner">
                        <div class="vid-link">
                            <a href="#" class="lightbox-image">
                                <div class="icon"><span><i class="fas fa-play"></i></span><i class="ripple"></i></div>
                            </a>
                        </div>
                        <div class="title">
                            <h3>agency that gets <br>excited about</h3>
                        </div>
                        <div class="more-link"><a href="about">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We DO Section-->
<section class="we-do-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We do more then ever <br>platforms <span class="dot">.</span></h2>
                    </div>
                    <div class="featured-block clearfix">
                        <div class="image"><img src="{{asset('assets/images/featured-image-4.jpg')}}" alt=""></div>
                        <div class="text">There are many variatns of passages the majority have suffered
                            alteration in some foor randomised words believable.</div>
                    </div>
                    <div class="progress-box">
                        <div class="bar-title">Digital marketing</div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="70%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="70" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="faq-box">
                        <ul class="accordion-box clearfix">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><span class="count">1.</span> We help to create
                                    visual strategies</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">2.</span> Motion Graphics & Animations
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual
                                    goals</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority
                                            have suffered alteration in some fo injected humour, or randomised
                                            words believable.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <div class="upper-row clearfix">
                <div class="sec-title">
                    <h2>work showcase <span class="dot">.</span></h2>
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                        <li class="filter" data-role="button" data-filter=".branding">Logo<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".illustration">Live Websites<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".photography">website templates<sup>[3]</sup></li>
                        <!--<li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>-->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/11111.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/11111.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/22222.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/22222.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/3.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/3.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/4.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/4.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/5.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/5.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{asset('assets/images/6.jpg')}}" alt=""></figure>
                        <a href="{{asset('assets/images/6.jpg')}}" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Funfacts Section -->
<section class="facts-section">
    <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                </div>
                                <div class="counter-title">Projects Completed</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                </div>
                                <div class="counter-title">Active clients</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                </div>
                                <div class="counter-title">cups of coffee</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                </div>
                                <div class="counter-title">happy clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->
<!-- Trusted Section -->
<section class="trusted-section">
    <div class="auto-container">
        <div class="outer-container">
            <div class="row clearfix">
                <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="col-header">
                            <div class="header-inner">
                                <span>We’re Committed To Deliver High Quality Projects .</span>
                            </div>
                        </div>
                        <div class="features">
                            <div class="feature">
                                <div class="count"><span>01</span></div>
                                <h5>TOTAL DESIGN FREEDOM FOR EVERYONE</h5>
                                <div class="sub-text">core features</div>
                            </div>
                            <div class="feature">
                                <div class="count"><span>02</span></div>
                                <h5>BASIC RULES OF RUNNING WEB AGENCY</h5>
                                <div class="sub-text">core features</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>We’re trusted by more <br>than 6260 clients<span class="dot">.</span></h2>
                            <div class="lower-text">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, simply free
                                text by injected humour, or randomised.</div>
                        </div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{asset('assets/images/featured-image-5.jpg')}}" alt=""></div>
                            <div class="text">
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                        Suspe ndisse sagittis leo.</li>
                                    <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                        Entum estibulum is posuere.</li>
                                    <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                        If you are going to use passage.</li>
                                    <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                        Lorem Ipsum on the tend to repeat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
<!--<section class="team-section no-padd-top">
<div class="auto-container">
<div class="sec-title centered">
<h2>Meet the expert team<span class="dot">.</span></h2>
</div>
</div>


<div class="container" style="margin-bottom: 50px">
<div class="row">
<div class="col-md-4">
<div class="director">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Director_Sir.jpg')}}" alt="" style="width: 100%;"></a>
</div>
<div class="lower-box">
<h5><a href="#">Sunil Dhiman</a></h5>
<div class="designation">Director</div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="director">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images//Director_Mam.jpg')}}" alt="" style="width: 100%;"></a>
</div>
<div class="lower-box">
<h5><a href="#">Amandeep Kaur</a></h5>
<div class="designation">Director</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="director">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Project_Manager.jpg')}}" alt="" style="width: 100%;"></a>
</div>
<div class="lower-box">
<h5><a href="#">Kanchan Dhiman</a></h5>
<div class="designation">Project Manager</div>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="carousel-box">
<div class="team-carousel owl-theme owl-carousel">

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Saurabh_Rana.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Saurabh Rana</a></h5>
<div class="designation">Technical Head</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Manpreet_Kaur.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Manpreet Kaur</a></h5>
<div class="designation">Senior Web Developer</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Ashish_Rattu.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Ashish Rattu</a></h5>
<div class="designation">Digital Marketing Head</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/ghazala_khan.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Ghazala Khan</a></h5>
<div class="designation">Councellor</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Karanveer_Singh.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Karanveer Singh</a></h5>
<div class="designation">Web Developer</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Pushapjit_Singh.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Pushapjit Singh</a></h5>
<div class="designation">UI/UX Designer</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div>
<a href="about"><img src="{{asset('assets/images/Jagdeep_Singh.jpg')}}" alt=""></a>
</div>
<div class="lower-box">
<h5><a href="#">Jagdeep Singh</a></h5>
<div class="designation">Web Developer</div>
</div>
</div>
</div>
</section>-->
<!-- Parallax Section -->
<section class="parallax-section">
    <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="icon-box"><span><i class="fas fa-file-code" style="color:white"></i></span></div>
            <h2>Great things in business are never done by one person. <span>They’re done by a team of
                    people.</span></h2>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->
<!--Sponsors Section-->
<section class="sponsors-section">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/1.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/2.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/3.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/4.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/5.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/1.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/2.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/3.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/4.png')}}" alt=""></a></figure>
                </div>
                <div class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('assets/images/5.png')}}" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Agency Section-->
<section class="agency-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>Best design Agency <br>solutions <span class="dot">.</span></h2>
                    </div>
                    <!--Default Tabs-->
                    <div class="default-tabs tabs-box">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                            <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                            <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>
                        </ul>
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            <!--Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <div class="content">
                                    <div class="text">Our mission is to establish, provide and maintain user-friendly, profitable, flexible and complete solutions to the present, and future clients of us and to maintain a healthy relationship with them. We focus on to provide the latest technologies services that Advance every client’s Business at the end. Our basic mission is to meet customer requirements and expectations as well as our commitments by providing the best Web Designing and Development services & solutions in the ever-changing world of technology to the clients.</div>
                                </div>
                            </div>
                            <!--Tab-->
                            <div class="tab" id="tab-2">
                                <div class="content">
                                    <div class="text">Our Vision is to become the best company in the Chandigarh and Mohali and to provide the creative and innovative web designing, web development services in the market. The Worldwide reputation is the dream of every company, and we want to achieve our dream through our work. Weare dedicated to become a brand that serves through result-oriented solutions to the clients and unstoppable services with a continuous focus on latest technologies.</div>
                                </div>
                            </div>
                            <!--Tab-->
                            <div class="tab" id="tab-3">
                                <div class="content">
                                    <div class="text">NorthPole Web Solutions are truely committed to provide flawless and creative digital marketing services to our clients. First of all, We deliver innovative and unique creative ideas to bring your Project campaigns to life and ensure their success in the end. NorthPole Web Services work as a team and in this way, we achieve the projects on time in line with client’s prospects. We hire keen, educated and determined innovators employees above all who are fully devoted to developing our client’s success. The favorable skills over experience basically provide the best professional and technical Atmosphere. With our professional and challenging work environment, we always focus on customer satisfaction.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="text">There are many variations of passages of available but the majority have
                        suffered alteration in some form, by injected humou or randomised words which don't look
                        even slightly believable.</div>
                    <div class="featured-block-two clearfix">
                        <div class="image"><img src="{{asset('assets/images/featured-image-6.jpg')}}" alt=""></div>
                        <div class="text">
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                    Building relationships with customers and students.</li>
                                <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                    Students training programs with placements.</li>
                                <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                    Variety of services for a variety of consumers.</li>
                                <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                    Best and unique marketing techniques.</li>
                                <li><i class="fa fa-check" aria-hidden="true" style="color:orange"></i>
                                    Open to customer reviews for our betterment.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Section
<section class="news-section">
<div class="auto-container">
<div class="sec-title centered">
<h2>Latest news & articles<span class="dot">.</span></h2>
</div>
<div class="row clearfix">
<!--News Block
<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
data-wow-duration="1500ms">
<div class="inner-box">
<div class="image-box">
<a href="blog-single.html"><img src="images/resource/news-1.jpg" alt=""></a>
</div>
<div class="lower-box">
<div class="post-meta">
<ul class="clearfix">
<li><span class="far fa-clock"></span> 20 Mar</li>
<li><span class="far fa-user-circle"></span> Admin</li>
<li><span class="far fa-comments"></span> 2 Comments</li>
</ul>
</div>
<h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
<div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
<div class="link-box"><a class="theme-btn" href="blog-single.html"><span
class="flaticon-next-1"></span></a></div>
</div>
</div>
</div>
<!--News Block
<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
data-wow-duration="1500ms">
<div class="inner-box">
<div class="image-box">
<a href="blog-single.html"><img src="images/resource/news-2.jpg" alt=""></a>
</div>
<div class="lower-box">
<div class="post-meta">
<ul class="clearfix">
<li><span class="far fa-clock"></span> 20 Mar</li>
<li><span class="far fa-user-circle"></span> Admin</li>
<li><span class="far fa-comments"></span> 2 Comments</li>
</ul>
</div>
<h5><a href="blog-single.html">Delivering the best digital marketing</a></h5>
<div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
<div class="link-box"><a class="theme-btn" href="blog-single.html"><span
class="flaticon-next-1"></span></a></div>
</div>
</div>
</div>
<!--News Block
<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
data-wow-duration="1500ms">
<div class="inner-box">
<div class="image-box">
<a href="blog-single.html"><img src="images/resource/news-3.jpg" alt=""></a>
</div>
<div class="lower-box">
<div class="post-meta">
<ul class="clearfix">
<li><span class="far fa-clock"></span> 20 Mar</li>
<li><span class="far fa-user-circle"></span> Admin</li>
<li><span class="far fa-comments"></span> 2 Comments</li>
</ul>
</div>
<h5><a href="blog-single.html">Introducing the latest linoor features</a></h5>
<div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
<div class="link-box"><a class="theme-btn" href="blog-single.html"><span
class="flaticon-next-1"></span></a></div>
</div>
</div>
</div>
</div>
</div>
</section>-->
<!-- Call To Section -->
<section class="call-to-section">
    <div class="auto-container">
        <div class="inner clearfix">
            <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <h2>Let's Get Your Project <br>Started!</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="contact">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection