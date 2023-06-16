@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/web_development.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Web Development</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Web Development</li>
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
                        <h3>Web Development</h3>
                        <p>We do provide a variety of services in web development. We not only provide services, but we help to generate more manpower by training students as well. We provide an ample variety of web development courses that help students to choose the courses according to their choice and preference. They can decide their interests and tastes of courses, either it is a single course or n number of courses.</p>
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
                                            <li>WORDPRESS</li>
                                            <li>CODEIGNITER</li>
                                            <li>CUSTOM PHP</li>
                                            <li>HTML, CSS, JAVASCRIPT</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><h5><b>WORDPRESS</b></h5>
                        WORDPRESS is a software which helps to create a website easily and efficiently and generates useful content easily. It is a free and open source for a content management system. Initially, it was done for blogging but then it grew up and now it’s the most efficient way to get content for your website. From a simple blog to full-fledged website content anything could be found on WORDPRESS.</p>
                        <p><h5><b>CODEIGNITER</b></h5>
                        To develop a web application code is written multiple times again and again. The framework helps to enter that code automatically. CodeIgniter is a form of a framework that works on PHP bases, so basically it’s a PHP driven framework. It can’t b substituted but it has its importance. It’s quick to load as it has very small footprints, it doesn’t require command line and needs zero configuration.</p>
                         <p><h5><b>CUSTOM PHP</b></h5>
                        PHP is a widely preferred server-side language, which is the key feature for website development. It is free and an open source for the PHP language that could be used for the uplifting of your website and could help to improve your clientele. PHP codes and HTML codes could be combined and could be used for scripting purpose also.</p>
                         <p><h5><b>HTML, CSS, JAVASCRIPT</b></h5>
                       HTML known as the Hypertext Markup Language is the foundation of the website building, it is the basic architectural design on which the whole website is designed. When HTML is paired up with CSS and JAVAscript it beautifies the website, as CSS provides the style to the basic pages of the websites and JAVAscript provides it a more attractive, dynamic and interactive look.</p>
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
                                <li class="active"><a href="{{route('web_development')}}">Web Development</a></li>
                                <li><a href="{{route('graphic_designing')}}">Graphic UI/UX Designing</a></li>
                                <li><a href="{{route('digital_marketing')}}">Digital Marketing</a></li>
                                <li><a href="{{route('content_writting')}}"> Content Writting</a></li>
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