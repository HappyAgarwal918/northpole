@extends('layouts.master')

@section('content')

   <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Training</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="home">Home</a></li>
                                <li class="active">Training</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Services Section-->
        <section class="services-section-three padd-top">
            <div class="auto-container">
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><i class="fas fa-laptop-code"></i></span></div>
                                <h5><a href="cse_it">Computer Science <br> Enginnering</a></h5>
                                <div class="text">Computer Science & Engineering (CSE) provides ... </div>
                                <div class="link-box"><a href="cse_it"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><i class="fas fa-hard-hat"></i></span></div>
                                <h5><a href="ce">Civil <br>Engineering</a></h5>
                                <div class="text">Civil engineering is a professional engineering ...</div>
                                <div class="link-box"><a href="ce"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><i class="fas fa-wrench"></i></span></div>
                                <h5><a href="me">Mechanical <br>Engineering</a></h5>
                                <div class="text">Mechanical engineering is an engineering branch ...</div>
                                <div class="link-box"><a href="me"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><i class="fas fa-lightbulb"></i></span></div>
                                <h5><a href="ece">Electronics & Communication <br>Engineering</a></h5>
                                <div class="text">Electronics and communication engineering designs ...</div>
                                <div class="link-box"><a href="ece"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
						
						<!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span><i class="fas fa-user-tie"></i></span></div>
                                <h5><a href="bba">Bachelors/Masters of Business <br>Administration</a></h5>
                                <div class="text">The Bachelor of Business Administration is a ... </div>
                                <div class="link-box"><a href="bba"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Section -->
        <section class="call-to-section-two alternate">
            <div class="auto-container">
                <div class="inner clearfix">
                    <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
		@endsection