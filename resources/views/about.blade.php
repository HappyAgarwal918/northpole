@extends('layouts.master')

@section('content')

 <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(public/assets/images/about_us.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>About</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="https://northpolewebservice.com/new/">Home</a></li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Discover Section-->
        <section class="discover-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Discover Block-->
                    <div class="discover-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('public/assets/images/featured-image-11.jpg')}}" alt=""></div>
                            <div class="cap-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="cap-inner">
                                    <h5>All-in-One Web Solution for Your Business</h5>
                                    <div class="more-link"><a href="contact"><span
                                                class="fa fa-angle-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Discover Block-->
                    <div class="discover-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box"><img src="{{asset('public/assets/images/featured-image-12.jpg')}}" alt=""></div>
                            <div class="cap-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="cap-inner">
                                    <h5>The best digital agency you’ll ever need</h5>
                                    <div class="more-link"><a class="theme-btn" href="contact"><span
                                                class="fa fa-angle-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonials Section-->
        <section class="testimonials-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Customer feedbacks <span class="dot">.</span></h2>
                </div>
                <div class="carousel-box">
                    <div class="testimonials-carousel owl-theme owl-carousel">
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="our_team"><img src="{{asset('public/assets/images/customer1.png')}}"
                                                alt=""></a></div>
                                    <div class="name">Shri Harsh</div>
                                    <div class="designation">Customer</div>
                                </div>
                                <div class="text">“As a client with NorthPole web services was satisfying. Within Four months my website was on the first page of Google by getting the huge traffic. The team was responsive and help me to develop an Android/iPhone app too for my business. I am quite satisfied with their services and highly recommend it to other people who are seeking for the best quality of services.”</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="our_team"><img src="{{asset('public/assets/images/customer2.png')}}"
                                                alt=""></a></div>
                                    <div class="name">Bipan Kumar</div>
                                    <div class="designation">Customer</div>
                                </div>
                                <div class="text">“I am a client of NorthPole Web Service for more than Two years now. It has been a great journey for me and my business, as I am availing their digital marketing services. NorthPole Web Service have been a trusted partner, and sorted the several complex issues that I was facing during my business marketing. The quality of services provided by the NorthPole is top-notch for sure. I would highly recommend them for IT services.”</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="our_team"><img src="{{asset('public/assets/images/customer2.png')}}"
                                                alt=""></a></div>
                                    <div class="name">Sharan Vohra</div>
                                    <div class="designation">Customer</div>
                                </div>
                                <div class="text">“As a client with NorthPole web services was satisfying. Within Four months my website was on the first page of Google by getting the huge traffic. The team was responsive and help me to develop an Android/iPhone app too for my business. I am quite satisfied with their services and highly recommend it to other people who are seeking for the best quality of services.”</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="our_team"><img src="{{asset('public/assets/images/customer1.png')}}"
                                                alt=""></a></div>
                                    <div class="name">Param Sandhu</div>
                                    <div class="designation">Customer</div>
                                </div>
                                <div class="text">“I am a client of NorthPole Web Service for more than Two years now. It has been a great journey for me and my business, as I am availing their digital marketing services. NorthPole Web Service have been a trusted partner, and sorted the several complex issues that I was facing during my business marketing. The quality of services provided by the NorthPole is top-notch for sure. I would highly recommend them for IT services.”</div>
                            </div>
                        </div>
                        <!--<div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-2.jpg"
                                                alt=""></a></div>
                                    <div class="name">Mike hardson</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-3.jpg"
                                                alt=""></a></div>
                                    <div class="name">Sarah albert</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>

        <!-- Funfacts Section -->
        <section class="facts-section alternate">
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
                                    <li data-tab="#tab-3" class="tab-btn"><span>Our Values</span></li>
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
                                            <div class="text">

NorthPole Web Solutions are truely committed to provide flawless and creative digital marketing services to our clients.



First of all, We deliver innovative and unique creative ideas to bring your Project campaigns to life and ensure their success in the end.



NorthPole Web Services work as a team and in this way, we achieve the projects on time in line with client’s prospects.

We hire keen, educated and determined innovators employees above all who are fully devoted to developing our client’s success. The favorable skills over experience basically provide the best professional and technical Atmosphere. With our professional and challenging work environment, we always focus on customer satisfaction.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text">To achieve the mission you need to follow your path towards your goals. To achieve those goals the following rules needed to be followed:</div>
                            <div class="featured-block-two clearfix">
                                <div class="image"><img src="{{asset('public/assets/images/featured-image-6.jpg')}}" alt=""></div>
                                <div class="text">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>
                                        Building relationships with customers and students.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>
                                        Students training programs with placements.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>
                                        Variety of services for a variety of consumers.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>
                                        Best and unique marketing techniques.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>
                                        Open to customer reviews for our betterment.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="team-section no-padd-top">
<div class="auto-container">
<div class="sec-title centered">
<h2>Meet the expert team<span class="dot">.</span></h2>
</div>
</div>
<div class="carousel-box">
<div class="team-carousel owl-theme owl-carousel">

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Director_Sir.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Sunil Dhiman</a></h5>
<div class="designation">Director</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images//Director_Mam.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Amandeep Kaur</a></h5>
<div class="designation">Director</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Project_Manager.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Kanchan Dhiman</a></h5>
<div class="designation">Project Manager</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Saurabh_Rana.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Saurabh Rana</a></h5>
<div class="designation">Technical Head</div>
</div>
</div>
</div>
<!-- 
<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Manpreet_Kaur.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Manpreet Kaur</a></h5>
<div class="designation">Senior Web Developer</div>
</div>
</div>
</div>
-->
<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Ashish_Rattu.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Ashish Rattu</a></h5>
<div class="designation">Digital Marketing Head</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/ghazala_khan.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Ghazala Khan</a></h5>
<div class="designation">Councellor</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Karanveer_Singh.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Karanveer Singh</a></h5>
<div class="designation">Web Developer</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Pushapjit_Singh.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Pushapjit Singh</a></h5>
<div class="designation">UI/UX Designer</div>
</div>
</div>
</div>

<div class="team-block">
<div class="inner-box">
<div class="image-box">
<a href="about"><img src="{{asset('public/assets/images/Jagdeep_Singh.jpg')}}" alt=""></a>
<ul class="social-links clearfix">
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
</ul>
</div>
<div class="lower-box">
<h5><a href="#">Jagdeep Singh</a></h5>
<div class="designation">Web Developer</div>
</div>
</div>
</div> 
</section>

        <!--Sponsors Section-->
        <section class="sponsors-section-two">
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="row clearfix">
                    <div class="title-col col-xl-5 col-lg-12 col-md-12">
                        <div class="sec-title">
                            <h2>Some of the clients we have worked with <span class="dot">.</span></h2>
                        </div>
                    </div>

                    <div class="logo-col col-xl-7 col-lg-12 col-md-12">
                        <div class="row clearfix">
                            <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="image-box"><a href="#"><img src="{{asset('public/assets/images/2.png')}}" alt=""></a></div>
                            </div>
                            <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="image-box"><a href="#"><img src="{{asset('public/assets/images/2.png')}}" alt=""></a></div>
                            </div>
                            <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="image-box"><a href="#"><img src="{{asset('public/assets/images/2.png')}}" alt=""></a></div>
                            </div>
                            <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="image-box"><a href="#"><img src="{{asset('public/assets/images/2.png')}}" alt=""></a></div>
                            </div>
                            <div class="logo-block col-xl-4 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="image-box"><a href="#"><img src="{{asset('public/assets/images/2.png')}}" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

       


@endsection