<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function apply()
    {
        return view('pages.apply');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function insights()
    {
        return view('pages.insights');
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
