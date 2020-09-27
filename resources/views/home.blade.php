@extends('layouts.app')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('../img/bg.jpg')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{asset('../img/AiSaturday.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h2 class="title" id="about">AI SATURDAY</h2>
                            <h3>WHAT WE DO ...</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi iste adipisci tenetur consequuntur earum 
                    vel, vitae odio laboriosam officiis quis in modi. Rerum optio explicabo facilis laudantium minima, suscipit 
                    nihil.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi iste adipisci tenetur consequuntur earum 
                    vel, vitae odio laboriosam officiis quis in modi. Rerum optio explicabo facilis laudantium minima, suscipit 
                    nihil.
                </p>
            </div>
            
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                            <img src="{{asset('../img/studio-1.jpg')}}" class="rounded">
                            <img src="{{asset('../img/studio-2.jpg')}}" class="rounded">
                        </div>
                        <div class="col-md-3 mr-auto">
                            <img src="{{asset('../img/studio-3.jpg')}}" class="rounded">
                            <img src="{{asset('../img/studio-4.jpg')}}" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-2" style="background: #9c27b0;">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="profile">
                        <div class="name">
                            <h3  id="mission">Mission ...</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center pt-3 pb-3" style="color: white;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi iste adipisci tenetur consequuntur earum 
                    vel, vitae odio laboriosam officiis quis in modi. Rerum optio explicabo facilis laudantium minima, suscipit 
                    nihil.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi iste adipisci tenetur consequuntur earum 
                    vel, vitae odio laboriosam officiis quis in modi. Rerum optio explicabo facilis laudantium minima, suscipit 
                    nihil.
                </p>
            </div>
        </div>

        <div class="section" id="carousel">
            <div class="container">
              <div class="row">
                <div class="col-md-8 mr-auto ml-auto">
                  <!-- Carousel Card -->
                  <div class="card card-raised card-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="{{asset('../img/studio-1.jpg')}}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h4>
                              <i class="material-icons">location_on</i>
                                Training Session At Unilag
                            </h4>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('../img/studio-2.jpg')}}" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h4>
                              <i class="material-icons">location_on</i>
                              Training Session At Unilag
                            </h4>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('../img/studio-3.jpg')}}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h4>
                              <i class="material-icons">location_on</i>
                              Training Session At Unilag
                            </h4>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Carousel Card -->
                </div>
              </div>
            </div>
        </div>

        <div class="container mt-lg-3 pb-3 mt-sm-0">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <h3 class="d-flex justify-content-center" id="contact">Contact Us ...</h3>
                </div>
            </div>
            <div class="description" style="text-align: center;">
                <div>
                    <p>Lorem ipsumtur consequuntur earum  </p>
                    <p><b>Email:</b> xyz@aisaturday.com </p>
                    <p><b>Address:</b> xyz, Lagos State, Nigeria </p>
                    <p><b>Phone:</b> 08000123456 </p>
                </div>
            </div>
        </div>

    </div>
  </div>

@endsection