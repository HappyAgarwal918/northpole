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
                                <li class="active">Best SEO Service in Mohali | NorthPole Web Service</li>
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
                                                <li><span class="far fa-clock"></span> 29 July,2019</li>
                                            </ul>
                                        </div>
                                        <h4>Best SEO Service in Mohali | NorthPole Web Service</h4>
                                        <div class="text">
                                            <p>Optimization of a website is important for any web-site to achieve the desired results. It is vital for organizations to have their websites listed at the top of the search list. There are various parameters that are involved to achieve the same. The benefits of this method are directly related to the success of the business activities which are live on-line. Based on the behavior of users, they are more likely to click on the web-pages that are listed on the ‘Top-5’ on their search result.</p>
                                          <p> Hence it is essential to have the website listed in that category to ensure a better business model. However, this shall not be limited to have the website listed in the top category of the search result, but also to achieve a sophisticated user-experience. This is another crucial aspect of it, as more people are likely to be attracted to it.</p>
										  <p>To achieve this, the role of the keyword is important; the appropriate usage of them will decide the traffic being directed to the intended page. Search Engine Optimization will also improve the ‘Trust’ on the page, as the users are more likely to click on the links that are considered to be trustworthy for their search. This will also be based upon the ranking of the page at the given level. As an exceeding number of the organization is competing for the top-few spots, the opportunity in the ‘SEO’ is higher than ever.</p>
										  <p>With more organic content and the relevant keywords which are constantly being scouted by search engine providers to list the page, the role of Search Engine Optimizer has become more important than ever. Understanding the various nuances such as the URL structure, Schema Markup, Body content which is further broken into Think and Unique Content, Engagement, and Shareability shall ensure an effective career option. Being a vital part of ‘Digital Marketing’, SEO is a skill that most of the employers are looking for. It will be the right step forward for those who are looking to establish their career on the same.</p>
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