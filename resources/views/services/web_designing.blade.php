@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/web_designing.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Web Designing</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Web Designing</li>
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
                        <h3>Web Designing</h3>
                        <p>We at NorthPole Web Service, design the websites which are user-friendly and easily accessible with simple language and unique content to make it stand on the top of the row. We design the website according to the customer's specification and with uniqueness to rise in the market and stand better in the competition.</p>
                        <div class="featured">
                            <div class="row clearfix">
                                <div class="image-col col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/featured-image-17.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-col col-md-6 col-sm-12">
                                    <div class="inner">
                                        <h4>Why Designing?</h4>
                                        <p>Keeping an eye on what market demands and what kind of designing is required the most important thing to do. Changes are infinite, every passing second possesses some sort of changes and hence is a requirement, same as our website designing strategy it needs to be up to date with the latest king of software and applications.</p>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul style="float:left; padding-right:60px;"><h4> Softwares </h4>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Adobe Photoshop</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Adobe Muse</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Web Flow</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Adobe Dreamweaver</li>
                        </ul>
                        <ul><h4> Languages </h4>                    
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Java</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Python</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;Android</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;C/C++</li>
                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;PHP</li>
                        </ul>                                       
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
                                <li class="active"><a href="{{route('web_designing')}}">Web Designing</a></li>
                                <li><a href="{{route('web_development')}}">Web Development</a></li>
                                <li><a href="{{route('graphic_designing')}}">Graphic UI/UX Designing</a></li>
                                <li><a href="{{route('digital_marketing')}}">Digital Marketing</a></li>
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