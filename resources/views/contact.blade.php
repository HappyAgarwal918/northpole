@extends('layouts.master')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/contact.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="home">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        

        <div class="map-box">
            <iframe class="map-iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.184159292693!2d76.707554514461!3d30.71322279362512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefac0cdde2f7%3A0xd1cd161134686041!2sNorthPole%20Web%20Service!5e0!3m2!1sen!2sin!4v1597744881612!5m2!1sen!2sin"
                style="border:0;" aria-hidden="false" tabindex="0"></iframe>
        </div>
     
     
     <center> <div class="col-md-6 col-sm-6" style="padding:30px">
	<center><h2 style="margin-bottom: 25px">Get In Touch</h2>

		 @if (count($errors) > 0)
          <div class="alert alert-danger">
           <button type="button" class="close" data-dismiss="alert">×</button>
          <ul>
         @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
         @endforeach
          </ul>
          </div>
         @endif
        
		
        <form method="POST" autocomplete="off" name="google-sheet" >
          
          <input class="formstyle" type="text" name="name" placeholder=" Name *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="number" placeholder=" Number *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="email" placeholder=" E-mail *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="subject" placeholder=" Subject *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="message" placeholder=" Message " value="" style="height:150px;" >
          <br><br>
          <button  class="registerbutton" type="submit" name="submit">Submit</button>
        </form>
    </div></center></div></center>
            </div>
        </div>
    </div>
</section>

 
@endsection