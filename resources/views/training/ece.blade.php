@extends('layouts.master')

@section('content')

 <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(assets/images//ece.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>ELECTRONICS & COMMUNICATION ENGINEERING</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a>Training</a></li>
                                <li class="active">ECE/EE/EEE</li>
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
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-es-tab" data-toggle="pill" href="#v-pills-es" role="tab" aria-controls="v-pills-es" aria-selected="true">
                      <span class="font-weight-bold small text-uppercase">EMBEDDED SYSTEM</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-mat-tab" data-toggle="pill" href="#v-pills-mat" role="tab" aria-controls="v-pills-mat" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">MATLAB</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-auto-tab" data-toggle="pill" href="#v-pills-auto" role="tab" aria-controls="v-pills-auto" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">AUTOMATION</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-plc-tab" data-toggle="pill" href="#v-pills-plc" role="tab" aria-controls="v-pills-plc" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">PLC SCADA</span></a>
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-eh-tab" data-toggle="pill" href="#v-pills-eh" role="tab" aria-controls="v-pills-eh" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">ETHICAL HACKING</span></a>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-es" role="tabpanel" aria-labelledby="v-pills-es-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">EMBEDDED SYSTEM</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">As its name embedded, itself represents connected or attached to something, so it is computer hardware that has software application in it. An Embedded system is a microcontroller as well as a microprocessor designed to perform a specific task. It has three components:<br>• Hardware<br>• Software application<br>• Real Time Operating System that defines the way, a system works.<br>It is a price efficient, easily customizable and low power utilizing software that provides enhanced outcomes. We believe that proper training will help us in generating a more technical future generation and thus we serve with professional guidance to the students.</p>
                    </div>                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-mat" role="tabpanel" aria-labelledby="v-pills-mat-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">MATLAB</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">MATLAB stands for Matrix Laboratory, it is computing and visualizing software used for matrix manipulations, algorithm, function plotting, and many other high-level mathematical problems. It helps to create a visual representation on a huge data that could not be defined numerically. So basically MATLAB is a software that is used in computation and algorithm of large data In the form of visual representation. Some features of MATLAB are:<br>• Computation of large numeric data<br>• Graphical representation for the scientific purpose<br>• simulation and representation data<br>• Analysis of data<br>We at NorthPole Web Service provide training in MATLAB to the students willing to make their career in MATLAB.<br>• Hardware<br>• Software application<br>• Real Time Operating System that defines the way, a system works.<br>It is a price efficient, easily customizable and low power utilizing software that provides enhanced outcomes. We believe that proper training will help us in generating a more technical future generation and thus we serve with professional guidance to the students.<br>• STAAD PRO.<br>• STAAD PRO. ADVANCED<br>• Structural Enterprise<br>These are the different options of STAAD Pro. It's up to your choice which one you are interested in, providing different functions like speed and efficiency. If you are a civil engineering pursuing student you must indulge in STAAD PRO. As it is the most demanded software in CE and NorthPole Web Service assures the best training and placement provision.</p>
                    </div>                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-auto" role="tabpanel" aria-labelledby="v-pills-auto-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">AUTOMATION</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Initially the technologies are designed, created and executed by human efforts, lately, Automation is the technology to control and coordinate the production and services. It is used in multiple areas such as manufacturing, transport, defense, utilities, facilities, operations, and information technologies.Automation is a highly demanded and business intelligence application which is a new version of high-quality automation. In the technical field, the demand for automation is increasing day by day in both the fields software/hardware and machine layer. No doubt the automation technology has improved a lot and is in high demand still a poised amount of manual efforts is required, we here train our students accordingly making them realize the value of automation as well as manual efforts.<br>• Hardware<br>• Software application<br>• Real Time Operating System that defines the way, a system works.<br>It is a price efficient, easily customizable and low power utilizing software that provides enhanced outcomes. We believe that proper training will help us in generating a more technical future generation and thus we serve with professional guidance to the students.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-plc" role="tabpanel" aria-labelledby="v-pills-plc-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">PLC SCADA</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">PLC is a Programmable Logic Controller is a hardware that contacts the physical instruments directly on the field. It is used to control the electromechanical procedure which is computer based. Whereas SCADA is Supervisory Control and Data Acquisition is the software which unlike PLC shows the visual output and feedback of the task. It controls and monitors the facilities of the infrastructure in the industries. NorthPole Web Services provide training in PLC SCADA to the ambitious students willing to pursue their career in PLC SCADA branches. We assure the placement facilities as well to the deserving candidates.<br>• Hardware<br>• Software application<br>• Real Time Operating System that defines the way, a system works.<br>It is a price efficient, easily customizable and low power utilizing software that provides enhanced outcomes. We believe that proper training will help us in generating a more technical future generation and thus we serve with professional guidance to the students.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-eh" role="tabpanel" aria-labelledby="v-pills-eh-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">ETHICAL HACKING</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Ethical hacker also known as White Hat Hacker is a security expert who ethically penetrates a computer system, network or application with the orders from its owner to check the security of the system from malicious hacker that could get into their system so it is kind of a technical guard from a technical thief that could destruct and damage the important functions and systems of the software. We provide this great and unique course to the willing students who would love to act as an information security chief.<br>• Hardware<br>• Software application<br>• Real Time Operating System that defines the way, a system works.<br>It is a price efficient, easily customizable and low power utilizing software that provides enhanced outcomes. We believe that proper training will help us in generating a more technical future generation and thus we serve with professional guidance to the students.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection