<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq()
    {
        return view('pages.faq');
    }

    public function landing()
    {
        return view('pages.landing');
    }

    public function publications()
    {
        return view('pages.publications');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function team()
    {
        return view('pages.team');
    }
}
