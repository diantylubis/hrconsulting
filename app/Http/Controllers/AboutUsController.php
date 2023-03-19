<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller

{
    function aboutus(){
        return view('pages.about-us');
    }
    
}
