@extends('layouts.master')

@section('content')

<!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(assets/images/cse.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>COMPUTER SCIENCE ENGINEERING</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a>Training</a></li>
                                <li class="active">CSE-IT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

    
<section class="py-5 header">
    <div class="container py-4">
       <h2><center>Computer Science Engineering</center></h2>
       <p style="font-size: 25px;">
Computer Science and Engineering is a stream of engineering that integrates the deep and vast knowledge of computer science and computer engineering. It inculcates the subjects like operating system, the theory of computation, design, and analysis of the algorithm, programming languages, programming designs, data structure, database system, software, and computer hardware. CSE/IT students willing to peruse their future in programming and languages could join us, and we ought to train them with best and professional training with the best quality of sources and infrastructure.</p><br><br>
        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <span class="font-weight-bold small text-uppercase">C/C++</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">HTML/CSS</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">PHP</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">JAVA</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-js-tab" data-toggle="pill" href="#v-pills-js" role="tab" aria-controls="v-pills-js" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">JAVASCRIPT</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-aj-tab" data-toggle="pill" href="#v-pills-aj" role="tab" aria-controls="v-pills-aj" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">ADVANCED JAVA</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-and-tab" data-toggle="pill" href="#v-pills-and" role="tab" aria-controls="v-pills-and" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">ANDROID</span></a>  
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-dn-tab" data-toggle="pill" href="#v-pills-dn" role="tab" aria-controls="v-pills-dn" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">DOT NET</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-py-tab" data-toggle="pill" href="#v-pills-py" role="tab" aria-controls="v-pills-py" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">PYTHON</span></a> 
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-bid-tab" data-toggle="pill" href="#v-pills-bid" role="tab" aria-controls="v-pills-bid" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">BIDDING</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-cc-tab" data-toggle="pill" href="#v-pills-cc" role="tab" aria-controls="v-pills-cc" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">CLOUD COMPUTING</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-cw-tab" data-toggle="pill" href="#v-pills-cw" role="tab" aria-controls="v-pills-cw" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">CONTENT WRITTING</span></a> 
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-ios-tab" data-toggle="pill" href="#v-pills-ios" role="tab" aria-controls="v-pills-ios" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">IOS DEVELOPMENT</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-ajs-tab" data-toggle="pill" href="#v-pills-ajs" role="tab" aria-controls="v-pills-ajs" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">ANGULAR JS</span></a>
                        
                     <a class="nav-link mb-3 p-3 shadow" id="v-pills-ror-tab" data-toggle="pill" href="#v-pills-ror" role="tab" aria-controls="v-pills-ror" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">RUBY ON RAILS</span></a>    
                    </div>
            </div>

            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">C</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">C is the most common and popular computer programming language used worldwide. Either it is microcontrollers or operating system, everything is written in C as it is very flexible and has a variety of commands.C is the most common and popular computer programming language used worldwide. Either it is microcontrollers or operating system, everything is written in C as it is very flexible and has a variety of commands.</p><br>
                         <h4 class="font-italic mb-4" style="font-size: 25px;">C++</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">C++ is also a programming language like C just the difference is it is more defined and object-oriented language. It is one of the most popular programming languages which is used for the graphical applications.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">HTML</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">HTML also was known as the Hypertext Markup Language is the foundation of the website building, it is the basic architectural design on which the whole website is designed. The whole body of the website is designed in HTML.</p><br>
                        <h4 class="font-italic mb-4" style="font-size: 25px;">CSS</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">CSS also was known as Cascading Style Sheet is the programming language used with HTML to create the representative side of the website that works on the fonts, layouts, colors, etc of the website.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">PHP</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">PHP is a widely preferred side-server language, which is the key feature for website development. It is free and an open source for the PHP language that could be used for the uplifting of your website and could help to improve your clientele. PHP codes and HTML codes could be combined and could b used for scripting purpose also.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">JAVA</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Java is an object-oriented programming language which is widely used in computers and not only in that but also in phones, database, laptops, internet and even in gaming programs also.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-js" role="tabpanel" aria-labelledby="v-pills-js-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">JAVASCRIPT</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">JAVASCRIPT is a form of java language which is again combined with HTML to give the website a more interactive and beautified look and make it eye catching.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-aj" role="tabpanel" aria-labelledby="v-pills-aj-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">ADVANCED JAVA</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Advanced Java is a form of java used for web-based applications and enterprise application. It is specialized in domains such as web, networking and database handling. It is a higher level of java with complex things. The topics that are covered under advance java are Regular expressions, Logging, Bit manipulation, Networking with Sockets, Remote method invocation, java database connectivity, etc.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-and" role="tabpanel" aria-labelledby="v-pills-and-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">ANDROID</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">An ANDROID is an open source operating system used in Cell phones, Tablets, Laptops, and Desktop as well. It is the base on which the smartphone works. It was developed by Google.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-dn" role="tabpanel" aria-labelledby="v-pills-dn-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">DOT NET</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">.NET is a free open source development program which helps in building many applications. It is used in a variety of languages, editors and in different libraries used in web, mobiles, laptops, desktops, etc.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-py" role="tabpanel" aria-labelledby="v-pills-py-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">PYTHON</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Python is a general-purpose programming language which is used for developing a website and many web applications. Python also allows itself to change into codes that help to reduce the coding procedure into fewer codes.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-bid" role="tabpanel" aria-labelledby="v-pills-bid-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">BIDDING</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">For generating online marketing business through freelancing bidding for your project is required that helps you to interact and negotiate with the client. A proper proposal and business strategy are prepared to stand out from the competition and get the projects.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-cc" role="tabpanel" aria-labelledby="v-pills-cc-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">CLOUD COMPUTING</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Cloud computing is a service that is provided through the internet. It provides applications and tools like data storage, servers, database, networking, and software.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-cw" role="tabpanel" aria-labelledby="v-pills-cw-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">CONTENT WRITTING</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Content is the backbone of your website, what is written on your website is what is expressed to the customer. A pen is mightier than a sword isn’t just a saying, it has a great value as the words attain a lot of power and hence for a website to be unique and efficient its content must be unique, and expressing with limited words but accurate and impactful is an art.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-ios" role="tabpanel" aria-labelledby="v-pills-ios-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">IOS DEVELOPMENT</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">IOS Development means iphone operating system development, as other devices use androids the company Apple used iOS in their gadgets such as iPhones, iPads, iPods etc. Swift is the programming language used in iOS. We provide the training in both the terms either it b android or iOS, with best training and placement guarantee.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-ajs" role="tabpanel" aria-labelledby="v-pills-ajs-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">ANGULAR JS</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Angular JS is kind of a JavaScript framework used for creating web applications. It is completely based on HTML and JAVASCRIPT, so there is no need to learn a new language. Angular JS is kind of a higher level of HTML that allows adding new attributes and components and also creates custom attributes using JavaScript. It supports single page application which makes it easy to extend and customize.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-ror" role="tabpanel" aria-labelledby="v-pills-ror-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">RUBY ON RAILS</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Ruby on Rails is a web development framework that allows a rail user a time-saving method for writing codes. These frameworks allow the user to access the code libraries in the software for a time-saving procedure. Hence except writing all the codes again and again they just have to access the pre-installed codes from the libraries on whatever website they are building. Proper training is required to access these kinds of absolutely amazing software, and hence we make you achieve your desired goals by providing you proper training under expert guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection