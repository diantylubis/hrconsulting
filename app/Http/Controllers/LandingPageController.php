<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function landingpage(){
        return view('pages.landing-page');
    }
}
