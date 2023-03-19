@extends('layouts/app')

@section('style')
<link rel="stylesheet" href="{{ url('service/style.css') }}">
@endsection

@section('title')
    HR Consulting
@endsection

@section('content')
    <!-- todo header -->

    <div class="section1 mt-5">
        <div class="container">
            <div class="row inti-section1">
                <div class="col-6">
                    <h1>HR Outsourcing</h1>
                    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </h5>
                    <button type="button" class="btn btn-primary">Consult Now</button>
                </div>
                <div class="col-6">
                    <img src="service/images/image10.png">
                </div>
            </div>
        </div>
    </div>

    <!--section2-->
    <div class="section2 mt-5">
        <div class="container">
            <div class="row inti-section2">
                <div class="col-6 left">
                    <img src="service/images/image11.png">
                </div>
                <div class="col-6 ps-5">
                    <h2>About service</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                </div>
            </div>
        </div>
    </div>


    <!--section3-->
    <div class="section3">
        <div class="container">
            <div class="row inti-section3">
                <h1>Why should our sources?</h1>
                <div class="col-6 ">

                    <h6><img class="gambarduit" src="service/images/image15.png">Cuts cost</h6>
                    <p>Operational and labour costs are significantly reduced when you start outsourcing. You don’t have to fork out a fortune of your hard-earned money to develop and establish a department in your company. Through outsourcing, you can minimise
                        on unnecessary expenditures and inject your capital more in other aspects of your business</p>
                </div>
                <div class="col-6">

                    <h6><img class="gambarduit" src="service/images/image15.png">Access to professionals</h6>
                    <p>Just by outsourcing, you will short-cut your way into the pool of global knowledge and have the best experts in the field working alongside you and your company. Complex tasks will be operated by professionals with extensive knowledge
                        and vast experience. Outsourcing helps you to increase efficiency in your business.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">

                    <h6><img class="gambarduit" src="service/images/image15.png">Save time and energy</h6>
                    <p>You thought that you’ll only save time, right? Well, more good news coming your way! Outsourcing also saves you a ton of your time and energy. You will be doing yourself a favour by freeing up your schedule, which will allow you to
                        focus on improving and scaling your business to the next level. </p>
                </div>
                <div class="col-6">

                    <h6><img class="gambarduit" src="service/images/image15.png">Save time and energy</h6>
                    <p>Outsourcing with a notable firm will help you to mitigate the risks in your company. Instead of pouring time, energy and money into creating areas of professional skills and development such as HR or ITs, it is much better to outsource
                        these responsibilities. </p>
                </div>
            </div>
        </div>
    </div>

    <!--section4-->
    <center>
        <h6 class="lorem">“ Let us supply you with trained professionals in that area who can help <br>you to smoothly iron out these critical duties ”</h6>
    </center>


    <!--section5-->
    <div class="section5">
        <div class="gelombang py-5">
            <div class="container fluit my-5 py-5">
                <h1>Check our ther services</h1>
                <div class="row mt-5">
                    <div class="col-4 ">
                        <div class="services-1" style="background-color: #0D1C37; color: white; padding: 30px;">
                            <img src="service/images/image13.png" alt="">
                            <br>
                            <p>Development <br> Human Capital Program 1</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="services-2" style="background-color: #0D1C37; color: white; padding: 30px;">
                            <img src="service/images/image14.png" alt="">
                            <br>
                            <p>Development <br> Human Capital Program 2</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="services-3" style="background-color: #0D1C37; color: white; padding: 30px;">
                            <img src="service/images/image12.png" alt="">
                            <br>
                            <p>Development <br> Human Capital Program 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--section6-->
    <div class="section6 mt-7 mb-7">
        <div class="container">
            <div class="row inti-section6 ">
                <h2>Consult Now</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Company name</label>
                        <input type="text" class="form-control" id="text" aria-describedby="text">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Company address</label>
                        <input type="text" class="form-control" id="text" aria-describedby="text">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">PIC number</label>
                        <input type="number" class="form-control" id="number" aria-describedby="number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Need description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="button" class="btn btn-primary">Consult Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

  

    