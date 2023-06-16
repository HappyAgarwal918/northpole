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
                <h1>Services</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Services</li>
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
                        <div class="icon-box"><span><i class="fa">&#xf108;</i></span></div>
                        <h5><a href="{{route('web_designing')}}">Website <br>Designing</a></h5>
                        <div class="text"> We design the website according to the customer's specification and with ...</div>
                        <div class="link-box"><a href="{{route('web_designing')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fas fa-laptop-code"></i></span></div>
                        <h5><a href="{{route('web_development')}}">Website <br>Development</a></h5>
                        <div class="text">We do provide a variety of services in web development. We not only provide ...</div>
                        <div class="link-box"><a href="{{route('web_development')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fab fa-adobe"></i></span></div>
                        <h5><a href="{{route('graphic_designing')}}">Graphic UI/UX <br>Designing</a></h5>
                        <div class="text">Graphic designing is the art of representing your ideas and projects in the...</div>
                        <div class="link-box"><a href="{{route('graphic_designing')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
				
				  <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fas fa-ad"></i></span></div>
                        <h5><a href="{{route('digital_marketing')}}">Digital <br>Marketing</a></h5>
                        <div class="text">Digitalization has become a part of our daily life, so marketing digitally is ...</div>
                        <div class="link-box"><a href="{{route('digital_marketing')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
				
				  <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fas fa-users-cog"></i></span></div>
                        <h5><a href="{{route('content_writting')}}">Content <br>Writting</a></h5>
                        <div class="text">The key feature of your website is your content quality and uniqueness, we  ...</div>
                        <div class="link-box"><a href="{{route('content_writting')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
				
				  <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fab fa-app-store-ios"></i></span></div>
                        <h5><a href="{{route('mobile_applications')}}">Mobile <br>Applications</a></h5>
                        <div class="text">Hybrid mobile apps are applications that are installed on a device  which...</div>
                        <div class="link-box"><a href="{{route('mobile_applications')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span><i class="fa">&#xf085;</i></span></div>
                        <h5><a href="{{route('software_testing')}}">Software <br>Testing</a></h5>
                        <div class="text">Before handing over the final product to the customer a final recheck is a must ...</div>
                        <div class="link-box"><a href="{{route('software_testing')}}"><span class="fa fa-angle-right"></span></a></div>
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
                <a class="theme-btn btn-style-two" href="contact">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection