<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function Home(){
        return view('index');
       // return "from site contrller";
    }
}
