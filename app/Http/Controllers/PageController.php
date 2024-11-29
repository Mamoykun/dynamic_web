<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function portals()
    {
        return view('portals');
    }

    public function marine_shipbuilding()
    {
        return view('marine_shipbuilding');
    }
    public function power_generation()
    {
        return view('power_generation');
    }
    public function oil_gas()
    {
        return view('oil_gas');
    }
    public function News_Articles()
    {
        return view('News_Articles');
    }
    public function case_study()
    {
        return view('case_study');
    }
}
