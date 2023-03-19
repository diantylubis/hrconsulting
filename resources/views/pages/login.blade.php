@extends('layouts.login')

@section('styling')
<link rel="stylesheet" href="{{ url('login1/style.css') }}">
@endsection

@section('title')
    Login-Page
    @endsection

  @section('content')
  <!--to do header-->

        <div class="container">
            <div class="row">
                <div class="col-6 p-4">
                    <h6>Hi... There</h6>
                    <h3>Welcome back to our system</h3>
                    <form>
                        <div class="mb-3">
                      <label for="username" class="form-label mt-3">Username</label>
                      <input type="email" class="form-control" id="username" aria-describedby="emailHelp">
                      </div>
                    <div class=" mt-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password">
                      </div>
                      <div class="d-grid gap-2">
                        <button class="btn btn-primary mt-3" type="button">Login</button>
                      </div>
                    </form>
                </div>
                  <div class="col-6">
                        <img src="login1/background.png"  alt="">
                   </div>
            </div>
        </div>
@endsection
