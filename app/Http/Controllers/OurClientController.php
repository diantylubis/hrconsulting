<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurClientController extends Controller
{
    function ourclient(){
        return view('pages.our-client');
    }
}

