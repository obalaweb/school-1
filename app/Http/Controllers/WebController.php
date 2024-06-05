<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function front()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
    public function team()
    {
        return view('team.index');
    }
    public function contactUs()
    {
        return view('contactUs');
    }
    public function donate()
    {
        return view('donate');
    }
    public function history()
    {
        return view('history');
    }

    public function admissions()
    {
        return view('admissions');
    }
}
