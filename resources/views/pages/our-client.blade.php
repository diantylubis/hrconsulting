@extends('layouts/app')

@section('styling')
<link rel="stylesheet" href="{{ url('our-client1/style.css') }}">
@endsection

@section('title')
    HR Consulting
@endsection

@section('content')
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Logo.png" alt="" />Logoispum</a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navbar-link me-5" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link me-5" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link me-5" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-link me-3" href="#">Our Client</a>
                        </li>
                    </ul>
                </div>
            </div>
            <li>
                <button type="button" class="btn btn-primary">Get started</button>
            </li>
        </div>
    </nav>
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
                    <img src="image 5.png" class="img-image">
                </div>
            </div>
        </div>
    </div>

    <div class="bagian2">
        <div class="container">
            <div class="col-lg-6 col-sm-12">
            <div class="siadam1">
                <img src="Group 25.png" class="img-image" style="width: 100%;">
            </div>
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

<div class="bagian4">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12 ">
             <div class="siadam3">
            <a style="text-decoration: none; color: aliceblue;">
                <img src="Ellipse 15.png" alt="padding-left: 20px;">Scarlet Witch </a>
            <h6 style="padding-left: 80px;  padding-top: -20px;">Human Resource Departement</h6>
            <p style="padding-left: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting <br>industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing<br> and typesetting industry. Lorem Ipsum has been</p>
            </div>
            </div>
        </div>
    </div>
</div>


<div class="bagian5">
    <div class="container">
        <div class="row">
        <div class="siadam4">
            <img src="image 20.png" class="img-image">
        </div>
        </div>
    </div>
</div>


@endsection