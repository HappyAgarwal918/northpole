@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/software.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Software Testing</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Software Testing</li>
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
                        <h3>Software Testing</h3>
                        <p>In school time our teachers use to say always recheck you answer sheets before submission, following that legacy we always believe in a second go through. Before handing over the final product to the customer a final recheck is a must, to avoid all the malfunctions and bugs. Q/A helps a direct reach of customers to us where they can ask their queries and could get instant solutions.<br>As earlier mentioned we believe in customer satisfaction, hence solutions are our priority.</p>
                        <div class="featured">
                            <div class="row clearfix">
                                <div class="image-col col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/featured-image-17.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="text-col col-md-6 col-sm-12">
                                    <div class="inner">                                              
                                        <ul><h4>Testing could be done in two ways:</h4>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;MANUAL TESTING</li>
                                            <li><i class="fa fa-check" aria-hidden="true"style="color:orange"></i>&nbsp;AUTOMATION TESTING</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><h5><b>MANUAL TESTING</b></h5>
                            It is the self-explaining test which is done manually. Manual testing is the most basic but most important form of software testing, in which each function is observed through human vision. The person performs all those functions which are to b performed by the user, in order to check all the functions as well malfunctions of the software. Then also the final product is not ready but is prepared to be ready for automation testing.</p>
                        <p><h5><b>AUTOMATION TESTING</b></h5>
                       After the manual testing, a final testing procedure is required to check whether all the debugging done through manual efforts is up to the mark or not. In order to do that, software is required which could find all the errors missed my human efforts. Basically, it is an automatic version of manual testing. It is time efficient and effective software with zero chances of mistakes.</p>
                       <p>In other words, whenever new software is updated it is not ever time possible to check, Is there any new bug introduced or does it needs to b fixed. So, in that case, we need a system that could automatically judge the software and for that automatic testing is required.</p>
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
                                <li><a href="{{route('mobile_applications')}}">Mobile Application</a></li>
                                <li class="active"><a href="{{route('software_testing')}}">Software Testing</a></li>
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