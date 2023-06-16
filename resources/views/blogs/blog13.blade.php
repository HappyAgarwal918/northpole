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
                        <h1>Blog Posts</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="home">Home</a></li>
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
                        <div class="blog-details">
                            <!--News Block-->
                            <div class="post-details">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="blog-single.html"><img src="images/resource/news-7.jpg" alt=""></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> 12 Apr,2019</li>
                                      
                                            </ul>
                                        </div>
                                        <h4>Digital Marketing</h4>
                                        <div class="text">
                                           <p>Advertisement is the initial step towards a successful business. How a business would reflect itself in the market depends on its marketing strategy. Earlier the ways to marketize your business were limited to the physical sources only, which could approach to a limited extent of people. Nowadays the world has become a digitalized globe almost every person has some kind of digital source, through which they could approach any sort of info with a snap of a finger. What if a complete A-Z info of your business is carried by someone in their pocket right now? Have you imagined, yes that’s the power of digital marketing?</p>
										   <p>Basically, any sort of marketing that is done digitally, digitally means through the internet or electricity, is referred to as digital marketing. It has become very easy to advertise your business according to your budget, time, area, group of people and age group anything you name. Digital marketing has many forms of advertising platforms which are handled by three types of marketer:<br>

>Content marketer: They provide the best and unique quality content for websites that could stand through the market competition.<br>
>Social Media marketer: They marketize your product on the social media which is easily accessible to all the consumers.<br>
>Email marketer: They connect and advertise your product directly and individually to the consumer which is nowadays a very trending and valuable way of digital advertisement.<br>
Marketing your product is very easy and affordable nowadays, it is not important to do it yourself you could get it done on a commission basis also. Variety of marketing options for a variety of products. Some digital marketing ways are:<br>

>SEO: SEO or Search Engine Optimization ranks your website higher among the competition in this digital market. A higher ranking means it will show higher on Google search results and hence traffic will generate on your website.<br>
>Content marketing: Content is the backbone of your website SEO works well on the uniqueness of your content.<br>
>Social Media market: Almost every 7 out of 10 person uses some sort of social media to stay connect and aware hence targeting that platform is a must where there is so much approach of your would b consumer.</p>
										   <p>It is a vast platform these are only a few examples of platforms that are most common and widely accepted. Marketing your product digitally would work far better the advertising it physically. So if you are planning to advertise your business go for digital marketing.</p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                                                     

                            <!--Leave Comment Form-->
                            <div class="leave-comments">
                                <div class="comments-title">
                                    <h3>Leave a Comment</h3>
                                </div>
                                <div class="default-form comment-form">
                                    <form method="post" action="contact.html">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Phone Number"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Subject" required="">
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Your Comments"></textarea>
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Submit Comment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">
                           

                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Recent Posts</h4>
                                    </div>

                                    <div class="post">
                                        <h5 class="text"><a href="blog1">GLOBAL PANDEMIC -COVID-19</a></h5>
                                    </div>

                                    <div class="post">
                                       <h5 class="text"><a href="blog2">Best SEO Service in Mohali | NorthPole Web Service</a></h5>
                                    </div>

                                    <div class="post">
                                       <h5 class="text"><a href="blog3">Future of PHP Development in India | Scope of PHP development</a></h5>
                                    </div>
									
									 <div class="post">
                                        <h5 class="text"><a href="blog4">Best WordPress Development Company in India | Northpole Web Service</a></h5>
                                    </div>

                                </div>
                            </div>
							
                        </aside>
                    </div>

                </div>
            </div>
        </div>
		@endsection