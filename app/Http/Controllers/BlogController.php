<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function whichThoughtLeadershipContentWorks()
    {
        return view('pages.blogs.1');
    }

    public function howToMasterThoughtLeadershipIn2023()
    {
        return view('pages.blogs.2');
    }
}
