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
                                <li class="active">Best social media marketing services In Mohali</li>
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
                                                <li><span class="far fa-clock"></span> 05 June,2019</li>
                                               
                                            </ul>
                                        </div>
                                        <h4>Best social media marketing services In Mohali</h4>
                                        <div class="text">
                                           <p>Social media marketing is known as the process of gaining traffic or attention through social media sites on the internet platform. Social media marketing is the best medium for businesses of all sizes to reach prospects and customers in the market. When your customers are now interacting with brands through social media platforms, and if you’re not speaking or interacting directly to your audience through social platforms like Facebook, Twitter, Instagram, and Pinterest, you’re missing out the way to gain the business through it! Perfect marketing on social media can bring remarkable and high success to your business, creating a keen brand image and even driving leads and sales through the help of social media platforms.</p>
										   <p><b>How Are the Search & Social Media Marketing Related to each other?</b><p>
										   <p>Why the search marketer or a site about search engines care about social media marketing? These two are very closely related. Social media platforms also provide new content such as news stories, and “discovery” is a search action on social media. Social media can also help to form links that in turn support into Search engine optimization efforts. People do searches at social media sites to find social media content as well. Social connections may also influence the reliability of some search results, it can be within a social media network or at a ‘mainstream’ search engine as well.</p>
										   <p><b>Social Media Marketing At Marketing Land:</b>
The Marketing Land is the sister site to Search Engine Land that covers all sides of digital or internet marketing, which involves these popular topics within social media marketing:<br>
• Facebook<br>
• Instagram<br>
• Twitter<br>
• Pinterest<br>
• Linkedin<br>
• YouTube</p>
										   <p><b>Social Media and Marketing: Start with a Plan to reach your traffic:</b>

Before you are about to create social media marketing campaigns, always consider the business’s goals in your mind. Starting social media marketing campaign without a social policy plan in your mind is like wandering around a forest without a map, you might have fun in this, but you’ll probably get lost in the end.</p>
<p><b>How Social Media Marketing Can Help You Achieve Your Marketing Goals?</b>
Social media marketing can help with a numeral of goals, such as:<br>
• Increasing website traffic for the business.<br>
• Building conversions and leads.<br>
• Raising brand awareness in the audience.<br>
• Creating a brand identity and positive brand association as well.<br>
• Improving communication and interaction with key audiences.</p>
<p>The superior and more involved your audience is on social media networks, easier it will be for you to achieve every other marketing goal on your list for your business!<br>

To keep up with social media marketing, you can contact us for your business marketing, We are the one who can help you to achieve all your business goals with the help of our social media marketing experts.</p>
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