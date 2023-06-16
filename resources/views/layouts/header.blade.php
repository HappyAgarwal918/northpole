<!-- Preloader -->
<div class="preloader">
    <div class="icon"></div>
</div>

<!-- Main Header -->
<header class="main-header header-style-one">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo">
                    <a href="home" title="Linoor - DIgital Agency HTML Template">
                        <img src="{{asset('assets/images/logo/north_logo.png')}}" id="thm-logo" alt="NorthPole Web Service" title="NorthPole Web Service">
                    </a>
                </div>
            </div>					
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <span><i class="fas fa-bars"></i></span>
                    <span class="txt">Menu</span>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li></li>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li class="dropdown"><a href="{{route('services')}}">Services</a>
                                <ul>
                                    <li><a href="{{route('web_designing')}}">Web Designing</a></li>
                                    <li><a href="{{route('web_development')}}">Web Development</a></li>
                                    <li><a href="{{route('graphic_designing')}}">Graphic UI/UX Designing</a></li>
                                    <li><a href="{{route('digital_marketing')}}">Digital Marketing</a></li>
                                    <li><a href="{{route('content_writting')}}"> Content Writting</a></li>
                                    <li><a href="{{route('mobile_applications')}}">Mobile Applications</a></li>
                                    <li><a href="{{route('software_testing')}}">Software Testing</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{route('training')}}">Training</a>
                                <ul>
                                    <li><a href="{{route('cse_it')}}">CSE/IT</a></li>
                                    <li><a href="{{route('ce')}}">CE</a></li>
                                    <li><a href="{{route('me')}}">ME</a></li>
                                    <li><a href="{{route('ece')}}">ECE/EE/EEE</a></li>
                                    <li><a href="{{route('bba')}}">BBA/MBA</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('register')}}">Register Now</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="other-links clearfix" style="padding-right:30px;">
                <!--Search Btn-->
                <div class="search-btn">
                    <button type="button" class="theme-btn search-toggler">
                        <span><i style="color:#f89d0e; font-size:30px;" class="fas fa-phone-alt" ></i></span>
                    </button>
                </div>
                <div class="link-box" >
                    <div class="call-us">
                        <a style="color:black;" href="tel:+91-8264790560">[+91]-8264790560,</a>
                        <a style="color:black;" href="tel:+91-9779127768">9779127768</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">
            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">
                    <a href="#" class="side-menu__toggler side-menu__close-btn">
                        <img src="images/icons/close-1-1.png" alt="">
                    </a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                <p><a href="mailto:npoleaman@gmail.com">npoleaman@gmail.com</a><br> 
                <a href="tel:+91-8264790560">[+91]-8264790560</a></p>
                <a href="tel:+91-9779127768">[+91]-9779127768</a></p>
                <div class="side-menu__social">
                    <a target="_blank" href="https://www.facebook.com/northpolewebservice/"><i class="fab fa-facebook-square"></i></a>
                    <a target="_blank" href="https://twitter.com/NorthpoleWeb"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://instagram.com/northpolewebservice/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://in.pinterest.com/northpolewebservice/"><i class="fab fa-pinterest-p"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/north-pole-0778b717b/"><i class="fab fa-linkedin-in"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UC6nwbHnyzCUlBQbzx0Vfz1A"><i class="fab fa-youtube"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->