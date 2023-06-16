@extends('layouts.master')

@section('content')

 <!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(assets/images/bba.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>BBA/MBA</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a>Training</a></li>
                        <li class="active">BBA/MBA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->
<section class="py-5 header">
    <div class="container py-4">
        <h2><center>BBA/MBA</center></h2>
       <p style="font-size: 25px;">Bachelors/Masters of business administration is a management course for three years and two years respectively. Some colleges offer an integrated course for five years to the students willing to pursue it. BBA/MBA courses provide a vast knowledge of business administration deeply and specifically. BBA is the foundation of the management coursed which provide the knowledge of how a business is planned, managed and executed. MBA is just an upgraded version of BBA which helps to specify the interesting fields of business administration.<br>This program or course helps the students to work on their practical, management, communication as well as decision making skills. With the continued growth of the business industries, the demand for skilled business managing administrative is also increasing. BBA/MBA students are business professionals that could perform and handle all the functional aspects of business management.</p><br><br>

        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-hr-tab" data-toggle="pill" href="#v-pills-hr" role="tab" aria-controls="v-pills-hr" aria-selected="true">
                      <span class="font-weight-bold small text-uppercase">HUMAN RESOURCES</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-fin-tab" data-toggle="pill" href="#v-pills-fin" role="tab" aria-controls="v-pills-fin" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">FINANCE</span></a>
                    </div>
            </div>

            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-hr" role="tabpanel" aria-labelledby="v-pills-hr-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">HUMAN RESOURCES</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">HR or Human Resource Management is the most intrusive course of MBA it required a lot of efforts to gain knowledge in HR. A business could be started with a lot of capital but if remains unmanaged will not run in the future. How a business would perform depend on the employees of the company. And to choose the apt and deserving candidate the responsibility is on the shoulders of the HR. So basically a ship in the mid of an ocean will sail through or sink, depends on the sailor that is HR for a company.<br>
                        An HR performs multiple roles for a company for example:<br>
                        * Brings the deserving and creative manpower to the company.<br>
                        * Keep the crowd indulged with creative and attractive offers and tasks.<br>
                        * Builds strong management and employee relations<br>
                        * Provides opportunities for the growth of management professionals.<br>
                        *Maintains the professional culture among the employees.<br>
                        *Maintains the decorum of the workplace and resolves the problems and conflicts of the employees.<br>
                        *Listens to the manpower and solves their problems, guides them and helps them.</p>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-fin" role="tabpanel" aria-labelledby="v-pills-fin-tab">
                        <h4 class="font-italic mb-4" style="font-size: 25px;">FINANCE</h4>
                        <p class="font-italic text-muted mb-2" style="font-size: 25px;">Finance is the most common and preferred field of MBA. Finance refers to not only the banking work but also all the money related aspects. Most of the students choose finance as their specialization. Money is the base of a working foundation, for continues flow of capital it needs to be earned, managed, spent and multiplied wisely. All of these criteria are fulfilled by the financial management of the company. When money is generated in a company how it used to meet all the expenses and then how the remaining money would b distributed according to the profit share, basically A-Z finance related work is done by a finance manager.<br>There are further choices in financial courses which the students want to do which includes commercial studies, real estate studies or investment studies.<br>The roles of a Financial manager are:<br>* Help management make financial decisions<br>* Controls and coordinates the financial expenses of the company.<br>* Maintains financial details to meet all the legal requirements.<br>* Keeps a check on the market financial situations to meet up the company requirements.<br>* Prepare financial statements, business reports and business forecasts for future planning.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection