@extends('layouts.master')

@section('content')

<!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(assets/images/content.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1> Content Writting</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active"> Content Writting</li>
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
                                <h3> Content Writting</h3>
                                <p>The key feature of your website is your content quality and uniqueness. It requires a magical skill to express through your limited and useful words to the customer, because the content is the base of marketing of your business, and we provide the unique and original content that is 100% researched and executed.</p>
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
                                                    <h4>Planning & Strategy</h4>
                                                    <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;CONTENT MARKETING</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;WHY IT IS SO IMPORTANT ?</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;AIM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><h5><b>CONTENT MARKETING</b></h5>
                                   The key feature of your website is your content quality and uniqueness. It requires a magical skill to express through your limited and useful words to the customer, because the content is the base of marketing of your business, and we provide the unique and original content that is 100% researched and executed.</p>
                                <p><h5><b>WHY IT IS SO IMPORTANT ?</b></h5>
                                   Content marketing requires a unique and updated content. SEO revolves around the content of your website. The laymen language used in your content helps the customer to understand your approach. Efficient keywords idioms and proverbs used in content makes it different from others and upgrade its quality.</p>
                                   <p><h5><b>AIM</b></h5>
                                  Content written with the aim of marketing needs profession skills of writing and expertise in words selection.</p>
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
                                        <li class="active"><a href="{{route('content_writting')}}">Content Writting</a></li>
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