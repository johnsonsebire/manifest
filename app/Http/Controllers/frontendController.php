<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    use Route; 
    public function index() {
        return view('frontend.home');
    }
}
