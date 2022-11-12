<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function whyStorytellingIsImportantToBrandStrategy()
    {
        return view('pages.articles.1');
    }

    public function brandTrustShouldBeAPriorityInYourStrategy()
    {
        return view('pages.articles.2');
    }

    public function howContentMarketingCanSupportThoughtLeadership()
    {
        return view('pages.articles.3');
    }
}
