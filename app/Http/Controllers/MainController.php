<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function about() : View {
        return view('about');
    }

    function index() : View {
        return view('index');
    }

    function porfolio() : View {
        return view('porfolio');
    }
}
