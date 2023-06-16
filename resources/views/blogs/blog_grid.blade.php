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
                                <li class="active">Blog Posts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">

                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog1"><img src="{{asset('public/assets/images/news-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                               <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 18 March,2020</li>
                                    </ul>
                                </div>
                                <h5><a href="blog1">GLOBAL PANDEMIC -COVID-19</a></h5>
                                <div class="text">COVID-19, currently this word is creating panic among the people and the global pandemic is announced.People are…</div>
                                <div class="link-box"><a class="theme-btn" href="blog1" style="padding:3px;"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog2"><img src="{{asset('public/assets/images/news-2.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 29 July,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog2">Best SEO Service in Mohali | NorthPole Web Service</a></h5>
                                <div class="text">Optimization of a website is important for any web-site to achieve the desired results.It is vital for…</div>
                                <div class="link-box"><a class="theme-btn" href="blog2"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog3"><img src="{{asset('public/assets/images/news-3.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                               <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 08 July,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog3">Future of PHP Development in India | Scope of PHP development</a></h5>
                                <div class="text">The mostly used HTML embedded server-side scripting language is the Hypertext Preprocessor (PHP) which is used for the…</div>
                                <div class="link-box"><a class="theme-btn" href="blog3"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog4"><img src="{{asset('public/assets/images/news-4.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 05 June,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog4">Best social media marketing services In Mohali</a></h5>
                                <div class="text">Social media marketing is known as the process of gaining traffic or attention through social media sites on…</div>
                                <div class="link-box"><a class="theme-btn" href="blog4"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog5"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 21 June,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog5">Best WordPress Development Company in India | Northpole Web Service</a></h5>
                                <div class="text">Do you want your website to look attractive with best themes, impressive and totally customized? Required functioning with…</div>
                                <div class="link-box"><a class="theme-btn" href="blog5"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog6"><img src="{{asset('public/assets/images/news-6.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                 <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 27 May,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog6">Future and Scope of Software Testing</a></h5>
                                <div class="text">The Software testing is the medium by which application brilliance is enhanced. Software testing is used to do in…</div>
                                <div class="link-box"><a class="theme-btn" href="blog6"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog7"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 29 April,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog7">Services At Northpole</a></h5>
                                <div class="text">https://northpolewebservice.com/wp-content/uploads/2019/06/services-blog-post.mp4 NorthPole Web Service is a company that believes in services as its priority. To build a healthy…</div>
                                <div class="link-box"><a class="theme-btn" href="blog7"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog8"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 16 May,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog8">How to Build an Audience that Builds Your Business with content writing.</a></h5>
                                <div class="text">If you’re interested in marketing of your business online (and who isn’t at this point obviously?), you can’t…</div>
                                <div class="link-box"><a class="theme-btn" href="blog8"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog9"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 09 May,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog9">Best hybrid Mobile application services in Mohali</a></h5>
                                <div class="text">Are you looking for the best mobile application for your business? A mobile application which can be friendly…</div>
                                <div class="link-box"><a class="theme-btn" href="blog9"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog10"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 24 April,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog10">Graphic UI/UX Designing</a></h5>
                                <div class="text">Initially when we hear the word ‘design’, graphic design is the second word that comes to our minds.…</div>
                                <div class="link-box"><a class="theme-btn" href="blog10"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog11"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 17 April,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog11">Web Development</a></h5>
                                <div class="text">Web Development itself explained the development of the website. Creating a website does not finishes your task maintenance…</div>
                                <div class="link-box"><a class="theme-btn" href="blog11"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog12"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 15 April,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog12">Web Designing</a></h5>
                                <div class="text">WEB DESIGNING is designing a website that is published on the internet for the people to approach and…</div>
                                <div class="link-box"><a class="theme-btn" href="blog12"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
					 <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog13"><img src="{{asset('public/assets/images/news-5.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 12 April,2019</li>
                                    </ul>
                                </div>
                                <h5><a href="blog13">Digital Marketing</a></h5>
                                <div class="text">Advertisement is the initial step towards a successful business. How a business would reflect itself in the market…</div>
                                <div class="link-box"><a class="theme-btn" href="blog13"><span><i class="fas fa-chevron-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>

       @endsection