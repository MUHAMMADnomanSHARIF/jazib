@extends('layout')
@section('title') Ouction About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')

<div align="center" style="background:#1CD5E8;padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">About US</h3>
<p class="white-text" style="font-weight:bold;">    JOURNEY OF Ouction FROM IDEATION TO STARTUP</p>


</div>

<div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5">
        <div   class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/logo (2).jpg')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Welcome to <a href="https//ouction.pk/" style="list-style: none; color:black;">Ouction.pk</a>, the online destination for ladies shoes that are made in Pakistan by local artisans. We are a family-owned business that started in 2020 with a passion for footwear and a vision to empower local talent. Our mission is to provide you with high-quality shoes that are stylish, comfortable, and affordable.</p>
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At Ouction.pk, we believe that shoes are not just accessories, but expressions of your personality and mood. That’s why we offer a wide range of shoes for every occasion, from casual flats to elegant heels, from trendy sneakers to classic pumps. Whether you are looking for something simple or something glamorous, we have something for you.

    We source our shoes from local craftsmen who use premium materials and traditional techniques to create unique and durable products. We also ensure that our shoes are ethically made and environmentally friendly. We care about our community and our planet, and we want you to feel good about your purchase.</p>

<h1 class="black-text" style="font-weight:bold;"> What we Deliverd</h1>

    <div align="center">
               <p class="col-md-4">
                    <img src="{{url('Img/About/1.jpg')}}" class="img-fluid">
                </p>
    </div>


<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    We are committed to delivering the best customer service and shopping experience to you. You can browse our website and order your shoes with ease and convenience. We offer fast and free shipping across Pakistan, as well as easy returns and exchanges. We also have a friendly and helpful customer support team that is ready to assist you with any queries or issues.

    We invite you to join our Ouction.pk family and discover the joy of wearing shoes that are made in Pakistan by local market. Thank you for choosing us and supporting our vision. We hope you enjoy your shoes as much as we enjoy making them for you.


</p>

        </div>
        <div align="center" class="col-md-12">
        <div class="col-md-8  ">

<h1 align="center" class="black-text" style="font-weight:bold;">GALLARY</h1>

                                    <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                          <!--Indicators-->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                          </ol>
                          <!--/.Indicators-->
                          <!--Slides-->
                              <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/1.jpg')}}"
                                      alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                  </div>
                                </div>


                                  <div class="carousel-item">
                                  <!--Mask color-->
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/2.jpg')}}"
                                      alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                  </div>
                                </div>
                              </div>

                          <!--/.Slides -->
                          <!--Controls-->
                          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
                <span class="black-text" style="font-weight:bold;font-size:25px;">Mission:</span>Ouction.pk: Empowering local talent, delivering quality shoes. <br>

            <span class="black-text" style="font-weight:bold;font-size:25px;">Vision:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

        </div>
    </div>
 <br><br>

</div>


@endsection
