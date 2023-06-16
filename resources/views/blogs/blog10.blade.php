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
                                                <li><span class="far fa-clock"></span> 24 Apr,2019</li>
                                              
                                            </ul>
                                        </div>
                                        <h4>Graphic UI/UX Designing</h4>
                                        <div class="text">
                                           <p>Initially when we hear the word ‘design’, graphic design is the second word that comes to our minds. As initially graphic designer was the one who held the monopoly for a long span of time but now it has got competitors in the market that holds the importance of their own. A normal person from outside the designing industry may get confused among the graphic UI/UX design or designer; let’s try to understand the difference.</p>
										   <p>1. Graphic design: Graphic designing means the virtual designing of the things that decide how things would look or represented. A graphic designer is a person that chooses the framework, color, fonts, backgrounds and all the things that are represented graphically. For digital as well as physical work that is either uploaded on the internet or printed on books, magazines, newspapers, etc.<br>
2. UX/UI (User Experience Design)/(User Interface Design): Both sounds same still are quite different. They belong to the same platform but play different roles in their distinguished fields. UX focuses on analytical and technical fields whereas UI is more related to graphical designing. UX design focuses on the physical and logical structures that are tangible to us. It works in two different dimensions research and analysis. First, the UX designer indulges in the research of the product for the better understanding of the user while in analysis, after launching the product its validation procedure is executed for analyzing the performance and output of the product. On the other hand UI design is the complex and delicate version of the designing, it focuses on the interactive parts of graphic designs such as styles of buttons, texts, drop down menus, animations, creative representations, etc.</p>
<h5><b>A career as a designer?</b></h5><br><br>
<h5><b>Want to become a graphic designer, but confused?</b></h5><br><br>
										   <p>If you are still thinking that which option is best suitable for you then you must keep some points into consideration, initially graphic designer was the only designer in the market but as the demand increased and market expanded the demand for more creativity increased and more complex designers got a hike, hence UI/UX designers were demanded over graphic designer. Better jobs better salaries and better incentives were offered to the UI/UX designers. Therefore we could judge the market demands and opt for the demanded fields.</p>
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