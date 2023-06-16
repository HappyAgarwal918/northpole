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
                                                <li><span class="far fa-clock"></span> 15 Apr,2019</li>
                                         
                                            </ul>
                                        </div>
                                        <h4>Web Designing</h4>
                                        <div class="text">
                                           <p>WEB DESIGNING is designing a website that is published on the internet for the people to approach and visit to gain your services. A person sitting a thousand miles away from a place could approach someone with their website either it is for business, general knowledge, food, fun, hospital, schools, hotels, flights and ‘n’ number of options. Nowadays people first sit on their chair relaxed and approach through internet rather than visiting directly to a service they want to attain, for that we need to provide a better, different and unique website so that they can understand why to choose us over others, this is the objective behind every website to attract more and more crowd to them. A website is designed by a WEB DESIGNER that works on the layouts, appearance, fonts, blogs, and content of a website.</p>
										   <p>• The layout is the overall structure of a website that how it is planned and organized.<br><br>

• Appearance means the texts, colors, images, backgrounds, etc that improves the appearance of the website which leaves an impression on your mind.<br><br>

• Fonts are a suitable text style that is used to enhance the attraction of the website.<br><br>

• Blogs and contents are the most important feature of the website that delivers the complete info about the website which a reader would read and then gets complete knowledge of your company.</p>
										   <p>A website is designed systematically which involves some steps to be followed:<br>

1. Gathering Info What a website is all about? This is the first information you need, complete knowledge is must then only you could create a valuable website.<br>
2. Planning provides a direction in which you need to work and design your ideas that are needed to be executed in order to achieve the desired goal.<br>
3. Designing Creative design for a website is created so that it could stand out of the competition and it could attract and influence the consumer to prefer you rather than others.<br>
4. Content Content is the soul of a website how it would perform and rise high on the Google search result is decided by the uniqueness of the content. It also helps your customer to understand you better.<br>
5. Coding Codes are the numerical, alphabetical and symbolic representations that are used in HTML to design your website and CSS is the software that provides it a unique and attractive look.<br>
6. Testing The manual and automatic testing is done to check the flaws in a website that could be corrected for the smooth performance of the website.<br>
7. Launching After all the above steps are completed then the website is launched on the internet for the consumer to be accessed.</p>
										   <p>After finishing all the above steps your website is used by a consumer but regular maintenance is required by each and every consumer product. A regular check is must for the website so that if any kind of bugging is detected it could b improved there only.</p>
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