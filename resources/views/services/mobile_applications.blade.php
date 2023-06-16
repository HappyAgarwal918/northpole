@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/app.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Mobile Applications</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Mobile Applications</li>
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
                        <h3>Mobile Applications</h3>
                        <p>Hybrid mobile apps are applications that are installed on a device, just like any other app. What differentiates them is the fact they possess elements from native apps, applications developed for a specific platform such as iOS or Android, with elements from web apps, websites that act like apps but are not installed on a device but are accessed on the Internet via a browser.</p>
                        <div class="featured">
                            <div class="row clearfix">
                                <div class="image-col col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/featured-image-17.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-col col-md-6 col-sm-12">
                                    <div class="inner">
                                        <h4>Hybrid Mobile Applications</h4>                                                
                                        <ul>
                                            <li>App Strategy</li>
                                            <li>App Designing</li>
                                            <li>App Development</li>
                                            <li>App Marketing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><h5><b>APP STRATEGY</b></h5>
                            Strategizing builds a bridge between what we have and what we want to achieve. And to achieve this we keep the market updates as our friends and explore the latest tools and strategies that are introduced in the market.</p>
                        <p><h5><b>APP DESIGNING</b></h5>
                       After strategizing, the framework has to be executed a unique design has to be created that is user-friendly and easily accessible. It should meet the market requirement levels and should be updated with the latest software.</p>
                        <p><h5><b>APP DEVELOPMENT</b></h5>
                        Strategized, designed now development work is the next step, before marketing the app it needs to be checked and tested according to the user to make it user-friendly, if it is user-friendly then marketing is done if no then developing.</p>
                           <p><h5><b>APP MARKETING</b></h5>
                        A beautiful painting has no value if not bought by anyone, same as after making an app perfect marketing is necessary. We focus on marketing your app and making it stand out the list. We understand the value of marketing.</p>
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
                                <li><a href="{{route('digital_marketing')}}">Digital Marketing</a></li>
                                <li><a href="{{route('content_writting')}}">Content Writting</a></li>
                                <li class="active"><a href="{{route('mobile_applications')}}">Mobile Application</a></li>
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