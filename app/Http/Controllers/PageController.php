<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
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
    public function Industrial_Solutions()
    {
        return view('Industrial_Solutions');
    }
    public function News_Articles()
    {
        return view('News_Articles');
    }
    public function case_study()
    {
        return view('case_study');
    }
    public function exhibitions()
    {
        return view('exhibitions');
    }
    public function about()
    {
        return view('about');
    }
    public function investors()
    {
        return view('investors');
    }
    public function suppliers()
    {
        return view('suppliers');
    }
    public function contact_information()
    {
        return view('contact_information');
    }
    public function  gallery_foto()
    {
        return view('gallery_foto');
    }
    public function  gallery_video()
    {
        return view('gallery_video');
    }
    public function  select_country()
    {
        return view('select_country');
    }
    public function  careers()
    {
        return view('careers');
    }
    public function  halaman_article()
    {
        return view('halaman_article');
    }
    public function  halaman_case_study()
    {
        return view('halaman_case_study');
    }
}
