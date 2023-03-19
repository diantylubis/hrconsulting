@extends('layouts/app')

@section('styling')
<link rel="stylesheet" href="{{ url('our-client1/style.css') }}">
@endsection

@section('title')
    Our Client
@endsection

@section('content')
    <!--section1 -->
    <div class="bagian1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mt-5 justify-content-center">
                    <div class="siadam">
                        <h3 style="font-weight: bold;">Our Client</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
                        <button type="button" class="btn btn-primary">Contact Us</button>
                    </div>
                </div>
                <div class="col-6">
                    <img src="our-client1/image/image5.png" class="img-image">
                </div>
            </div>
        </div>
    </div>

    <div class="bagian2">
        
            <div class="col-lg-6 col-sm-12">
            <div class="siadam1">
                <img src="our-client1/image/Group25.png" class="img-image" style="width: 100%;">
            </div>
        
        </div>
    </div>

<div class="bagian3">
    <div class="container mt-5">
        <div class="col">
        <div class="siadam2">
        <h2>What they said</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br>industry. Lorem Ipsum has been</p>
    </div>
</div>
    </div>
</div>

<div class="bagian">
    <div class="container mt-5 bagian4 ">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner ">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="bagian4-heading d-flex pb-2 p-2">
                        <div class="bagian4-image">
                            <img src="our-client1/image/ellipse15.png" class="d-block w-10" alt="...">
                        </div>
                        <div class="bagian4-text" style="height: 10px;">
                            <h2>Scarlet Witch</h2>
                            <p>Human Resource Departement</p>
                        </div>
                    </div>
                    <div class="bagian4-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting <br>industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                            text of the printing<br> and typesetting industry. Lorem Ipsum has been</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <div class="bagian4-heading d-flex pb-2 p-2">
                        <div class="bagian4-image">
                            <img src="our-client1/image/ellipse15.png" class="d-block w-10" alt="...">
                        </div>
                        <div class="bagian4-text" style="height: 10px;">
                            <h2>Scarlet Witch</h2>
                            <p>Human Resource Departement</p>
                        </div>
                    </div>
                    <div class="bagian4-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting <br>industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                            text of the printing<br> and typesetting industry. Lorem Ipsum has been</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <div class="bagian4-heading d-flex pb-2 p-2">
                        <div class="bagian4-image">
                            <img src="our-client1/image/ellipse15.png" class="d-block w-10" alt="...">
                        </div>
                        <div class="bagian4-text" style="height: 10px;">
                            <h2>Scarlet Witch</h2>
                            <p>Human Resource Departement</p>
                        </div>
                    </div>
                    <div class="bagian4-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting <br>industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                            text of the printing<br> and typesetting industry. Lorem Ipsum has been</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
    </div>
</div>

<div class="bagian5">
    <div class="container">
        <div class="row">
        <div class="siadam4">
            <img src="our-client1/image/image20.png" class="img-image">
        </div>
        </div>
    </div>
</div>


@endsection