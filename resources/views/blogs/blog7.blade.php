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
                                <li class="active">Services At Northpole</li>
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
                                                <li><span class="far fa-clock"></span> 29 Apr,2019</li>

                                            </ul>
                                        </div>
                                        <h4>Services At Northpole</h4>
                                        <div class="text">
                                            <p>NorthPole Web Service is a company that believes in services as its priority. To build a healthy consumer and supplier relationship the initial rule that has to be followed is it’s service elements. Here at NorthPole Web Service we provide ‘n’ number of services for our customer satisfaction and not only provide but also maintain that decorum which makes us different from others. Join us and we will assure your decision of joining us a numero uno decision. Come let’s explore about us a more and understand what services we provide here:</p>
											<p>>Web Designing: If you are thinking to commence a business then the first step that we need to follow is designing a website for your business so that anyone from anywhere could access your business anytime. We design the websites by keeping all the points into consideration, how it would be designed how it would be advertised and how it would rise on Google search.<br>
>Web Development: Website designing is the initial step, everything requires preservation, web development performs the maintaining agent of the website. To keep a further check on the activity of the website, it’s smooth working, market updates, debugging, customer related queries and any sort of maintenance. Our experts provide all kind of development services for your websites.<br>
>Digital Marketing: A masterpiece is considered as a masterpiece only when its values are acknowledged by the experts. Similarly, a website would be worth if accessed by the consumers and for that, suitable marketing is a must. Physical marketing is now the unfavorable way of marketing, digital marketing is now a best-preferred way of marketing and we provide the best and unique ways of digital marketing.<br>
>Content Marketing: A website is an initial step in communicating with the consumer. Anyone anywhere and anytime could access your website with just a few clicks. The backbone of a website is its content, that content helps you to raise your website up on the Google search index. We have the best and skilled content writers and bloggers for the content marketing of your website.<br>
>SEO/PPC: SEO means search engine optimization. It helps your website to rise in the Google search table, that means if you are a restaurant owner and your website is been SEOed then whenever someone would search ‘best restaurants near me’ then your website would b shown above on the pages of Google. PPC is the paid advertising of your website on some other platform so that whenever your advertisement is clicked you have to pay to that person who is the owner of that platform.<br>
>Training Programs: We have always believed in not only enlightening within but also others and hence whatever we do professionally we believe in training and education the future scope of this digital industry also. We provide numerous options for training programs including • CSE/IT • CE • ME • ECE/EE/EEE • BBA/MBA</p>
											<p>For multiple streams we have multiple options of training programs. Join us and chose the courses according to your interest and passion.</p>
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