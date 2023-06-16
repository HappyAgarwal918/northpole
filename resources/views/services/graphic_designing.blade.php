@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/graphic.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Graphic UI/UX Designing</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Graphic UI/UX Designing</li>
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
                        <h3>Graphic UI/UX Designing</h3>
                        <p>Graphic designing is the art of representing your ideas and projects in the form of visual and textual content. It could be in a tangible or intangible form that consists of images, texts, and graphics. It is clear that a thing visually attractive leaves a mark on one’s mind. Graphic designing is done on a small and large scale as well.</p>
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
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;PHOTOSHOP</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;ILLUSTRATOR</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;COREL DRAW</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><h5><b>PHOTOSHOP</b></h5>
                            Photoshop is a software application used to edit the photos and recreate a new visual application with some graphics included. It helps the user to enhance the image quality by adding or editing the image which helps in creating artistic images and illustrations. Either it is changing the background or changing the color scheme, anything you wish to edit is possible with the required job a great sense of creativity reflects in each Photoshopped item.</p>
                        <p><h5><b>ILLUSTRATOR</b></h5>
                        Illustrator is a software that allows you to create everything in the graphical world, from a single element to the whole composition everything revolves around the illustrator software. It helps in creating curves from straight lines using mathematical representations. It helps in precise editing and hence used commonly in machines for cutting and laser work.</p>
                        <p><h5><b>COREL DRAW</b></h5>
                       CorelDraw is software that works as a vector graphics editor. This software is a platform that provides many features for the users to perform graphical editing. The features indulge color balancing, contrast adjustments, special effects such as adding borders and in this software each element could be edited separately. It could cover many pages at the same time.</p>
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
                                <li class="active"><a href="{{route('graphic_designing')}}">Graphic UI/UX Designing</a></li>
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