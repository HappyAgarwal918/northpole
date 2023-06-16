@extends('layouts.master')

@section('content')

 <!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/digital.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Digital Marketing</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Digital Marketing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        <img src="{{asset('assets/images/featured-image-16.jpg')}}" alt="">
                    </div>
                    <div class="text-content">
                        <h3>Digital Marketing</h3>
                        <p>Digitalization has become a part of our daily life, so marketing digitally is the most prior step as it involves the phones, computers, laptops, tabs, etc, around which our lives usually revolve.</p>
                        <div class="featured">
                            <div class="row clearfix">
                                <div class="image-col col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/featured-image-17.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-col col-md-6 col-sm-12">
                                    <div class="inner">                                        
                                        <ul>
                                            <h4>Services We Provide</h4>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;SEO</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Social Media Marketing</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Mobile Marketing</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;PPC</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><h5><b>SEO</b></h5>
                        Search engine optimization is the core feature of digital marketing which increases the rank of your website in the Google universe. We have an expert team which specifically works on SEO services.</p>
                        <p><h5><b>Social Media Marketing</b></h5>
                       Social media is the greatest platform to advertise your company through different platforms as now days almost every person uses one or the other social media platform.</p>
                         <p><h5><b>Mobile Marketing</b></h5>
                      Mobile means a thing which is mobile and accessible anywhere at any time, so through mobile marketing we advertise through E-Mails, SMS’s, MMS’s, Social Media’s and Mobile apps also.</p>
                         <p><h5><b>PPC</b></h5>
                      Pay per click clarifies that whenever the ad is clicked the advertiser has to pay to the publisher, and this each click helps to increase the rank of your website.</p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">

                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                                <li><a href="{{route('web_designing')}}">Web Designing</a></li>
                                <li><a href="{{route('web_development')}}">Web Development</a></li>
                                <li><a href="{{route('graphic_designing')}}">Graphic UI/UX Designing</a></li>
                                <li class="active"><a href="{{route('digital_marketing')}}">Digital Marketing</a></li>
                                <li><a href="{{route('content_writting')}}">Content Writting</a></li>
                                <li><a href="{{route('mobile_applications')}}">Mobile Application</a></li>
                                <li><a href="{{route('software_testing')}}">Software Testing</a></li>
                            </ul>
                        </div>
                    </div>

                     <div class="sidebar-widget call-up">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>need our help?</h4>
                            </div>
                            <div class="text">Prefer speaking with a human to filling out a form? call corporate
                                office and we will connect you with a team member who can help.</div>
                            <div class="phone"><a style="text-decoration:none;" href="tel:8264790560"><span><i class="fas fa-phone-alt"></i></span>&nbsp;82647-90560</a></div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!-- Call To Section -->
<section class="call-to-section-two alternate">
    <div class="auto-container">
        <div class="inner clearfix">
            <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="{{route('contact')}}">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection