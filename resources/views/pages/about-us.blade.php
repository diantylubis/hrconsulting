@extends('layouts/app')

@section('styling')
<link rel="stylesheet" href="{{ url('about-us1/style.css') }}">
@endsection

@section('title')
    About Us
@endsection


@section('content')
    <!-- todo header -->

    <div class="section1 mt-5">
        <div class="container">
            <div class="row inti-section1">
                <div class="col-6">
                    <h1>About Us</h1>

                </div>
                <div class="col-6">
                    <img class="img-fluid" src="about-us1/image 5.png">
                </div>
            </div>
        </div>
    </div>

    <!--body-->
    <div class="section2 mt-5 my-5">
        <div class="container">
            <div class="row inti-section2 mt-5 pt-5 px-5">
                <div class="col-6 mt-5 pt-5">
                    <h1>Our Mission</h1>
                    <p>Isinya adalah penjelasan & pemaparan dari visi dan misi</p>
                </div>
                <div class="col-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section3 mt-5">
        <div class="container">
            <div class="row inti-section3">
                <div class="col-4">
                    <h2>Lorem Ipsum Dumet</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                </div>
                <div class="col-4">
                    <h2>Lorem Ipsum Dumet</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                </div>
                <div class="col-4">
                    <h2>Lorem Ipsum Dumet</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section4 mt-5">
        <div class="container">
            <div class="row inti-section4">
                <div class="col-6">
                    <h2>Why Choose Us</h2>
                    <div class="row">
                        <div class="col-2">
                            <img src="about-us1/image 6.png" alt="">
                        </div>
                        <div class="col-10">
                            <h2>Secure</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="about-us1/image 7.png" alt="">
                        </div>
                        <div class="col-10">
                            <h2>Valueable</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section5 mt-5">
        <div class="container">
            <div class="row inti-section4">
                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="about-us/image 8.png" alt="">
                        </div>
                        <div class="col-10">
                            <h2>Trusted</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="about-us/image 9.png" alt="">
                        </div>
                        <div class="col-10">
                            <h2>Manageable</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section7 mt-5">
        <div class="container">
            <h2 class="text-center">Our Team</h2>
            <div class="row inti-section3">
                <div class="col-4">
                    <img src="about-us1/Rectangle 46.png" alt="">
                    <h5>Valerie Agatha</h5>
                    <h6>HR Consultant</h6>
                </div>
                <div class="col-4">
                    <img src="about-us1/Rectangle 47.png" alt="">
                    <h5>Charlie</h5>
                    <h6>HR Consultant</h6>
                </div>
                <div class="col-4">
                    <img src="about-us1/Rectangle 48.png" alt="">
                    <h5>Edward Hellen</h5>
                    <h6>HR Consultant</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="section7 mt-5 mb-5">
        <div class="container">
            <div class="row inti-section3">
                <div class="col-4">
                    <img src="about-us1/Rectangle 46.png" alt="">
                    <h5>Valerie Agatha</h5>
                    <h6>HR Consultant</h6>
                </div>
                <div class="col-4">
                    <img src="about-us1/Rectangle 47.png" alt="">
                    <h5>Charlie</h5>
                    <h6>HR Consultant</h6>
                </div>
                <div class="col-4">
                    <img src="about-us1/Rectangle 48.png" alt="">
                    <h5>Edward Hellen</h5>
                    <h6>HR Consultant</h6>
                </div>
            </div>
        </div>
    </div>

    
@endsection