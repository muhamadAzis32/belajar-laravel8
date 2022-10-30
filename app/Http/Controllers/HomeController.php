<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    // VIEW DATA
    public function index()
    {
        return view('welcome');
    }

}
