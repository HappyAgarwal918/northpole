@extends('layouts.master')

@section('content')

  	<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/register.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Register Now</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="home">Home</a></li>
                        <li><a>Services</a></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<center> 
<div class="col-md-6 col-sm-6" style="padding:30px">
	<center><h2 style="margin-bottom: 25px">Register Now</h2>

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
          
          <input class="formstyle" type="text" name="name" placeholder="Full Name *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="father" placeholder="Father's Name *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="number" placeholder="Contact Number *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="college" placeholder="College/University Name *" value="" required>
          <br><br>
          <input class="formstyle" type="text" name="email" placeholder="E-Mail *" value="" required>
          <br><br>
           <select class="formstyle" type="text" name="branch" placeholder="Branch *" value="" required>
                <option value="" selected>Select Branch *</option>
                <option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
                <option value="Bachelor of Computer Applications">Bachelor of Computer Applications</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Computer Science Engineering">Computer Science Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Master of Computer Application">Master of Computer Application</option>
                <option value="Master of Science (Information Technology)">Master of Science (Information Technology)</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronics &amp; Communication Engineering">Electronics &amp; Communication Engineering</option>
                <option value="Electrical &amp; Electronics Engineering">Electrical &amp; Electronics Engineering</option>
                <option value="Electronics Engineering">Electronics Engineering</option>
                <option value="Other">Other</option>
                </select>
          <br><br> 
                <select class="formstyle" type="text" name="semester" placeholder="Semester *" value="" required>
                <option value="" selected> Select Semester *</option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
                <option value="7th">7th</option>
                <option value="8th">8th</option>
                
                </select>                  <br><br>
           <input class="formstyle" type="text" name="questions" placeholder="Any Questions?" value="" >
          <br><br>
          <button  class="registerbutton" type="submit" name="submit">Register</button>
        </form>
    </div></center></div></center>

 
@endsection