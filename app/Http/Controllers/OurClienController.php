<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurClienController extends Controller
{
    function ourclient(){
        return view('pages.our-client');
      }
}
