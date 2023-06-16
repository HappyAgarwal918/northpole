@extends('layouts.master')

@section('content')

 <!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/ce.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>CIVIL ENGINEERING</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Training</a></li>
                        <li class="active">CE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<section class="py-5 header">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-ac-tab" data-toggle="pill" href="#v-pills-ac" role="tab" aria-controls="v-pills-ac" aria-selected="true">
                      <span class="font-weight-bold small text-uppercase">AUTO-CAD 2D/3D</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-sp-tab" data-toggle="pill" href="#v-pills-sp" role="tab" aria-controls="v-pills-sp" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">STAAD PRO</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-3ds-tab" data-toggle="pill" href="#v-pills-3ds" role="tab" aria-controls="v-pills-3ds" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">3DS MAX</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-revit-tab" data-toggle="pill" href="#v-pills-revit" role="tab" aria-controls="v-pills-revit" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">REVIT</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-prim-tab" data-toggle="pill" href="#v-pills-prim" role="tab" aria-controls="v-pills-prim" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">PRIMAVERA</span></a>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-ac" role="tabpanel" aria-labelledby="v-pills-ac-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">AUTO-CAD 2D/3D</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">CAD is a computer technology used for designing and designing documentation. 2D CAD allows only two-dimensional drawing that is hight and width whereas 3D CAD works on every dimension called a three-dimensional model, which makes it physically present and real. These programs allow us to explore the design ideas and visual concepts through photorealistic renderings. At NorthPole Web service we have the best trainers for CAD in both dimensional fields.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-sp" role="tabpanel" aria-labelledby="v-pills-sp-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">STAAD PRO</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Structural Analysis and Designing Program is the software used in civil engineering. STAAD PRO automatically converts the physical models into analytical models. It easily designs steel, concrete, timber, aluminum, and cold form steel structures all over the world using the analytical codes. There are three types of STAAD PRO. Options<br>• STAAD PRO.<br>• STAAD PRO. ADVANCED<br>• Structural Enterprise<br>These are the different options of STAAD Pro. It's up to your choice which one you are interested in, providing different functions like speed and efficiency. If you are a civil engineering pursuing student you must indulge in STAAD PRO. As it is the most demanded software in CE and NorthPole Web Service assures the best training and placement provision.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-3ds" role="tabpanel" aria-labelledby="v-pills-3ds-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">3DS MAX</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">3DS MAX software program used to design 3D graphical imaged and designs, 3D models and animations. It is often used for character modeling and animation used to design different architectural representations. 3DS Max is the greatest, easiest and fastest software when it comes to 3D modeling. It can handle several aspects of animation such as modeling, texturing, rigging, cameras, layouts, pre-visualization, animation, lighting, etc. This is the software used in3D movies that create a visual impact on our minds. 3D games are also their creation. Civil engineering required 3D modeling of constructive sites, buildings, and other architectural aspects. We at NorthPole Web Services provide 3DS MAX training under professional guidance in order to generate the best out of our students.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-revit" role="tabpanel" aria-labelledby="v-pills-revit-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">REVIT</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Revit architecture is a sturdy designing and documentation software used by architectures and building professionals. It is specially created to support building information modeling (BIM) workflow. Revit Architecture has a special hold on designing the complex designs with utmost ease and perfection, it creates an entire product and saves it in a single database, if any changes are made in a particular part of the product it automatically executes in the entire project and thus saves the time for the workflow of a Revit user. NorthPole Web Service provides Revit software training for interested students with proper training and placement advantage.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-prim" role="tabpanel" aria-labelledby="v-pills-prim-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">PRIMAVERA</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Primavera project management is used for planning, managing and executing projects and programs. It provides the control key to the managers of high scale projects, multifunctional and complicated projects. The uses of Primavera are:<br>• Plan, organize and control the projects.<br>• Arrange the requirements and keep a check on the performance of the tasks.<br>• Monitors and visualizes the physical performances of the task that were planned.<br>• Allows schedule updates from multiple users side by side.<br>• Generates the resources and updates reports in the form of graphical representation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection