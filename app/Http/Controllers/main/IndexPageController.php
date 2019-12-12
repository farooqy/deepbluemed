<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;

class IndexPageController extends Controller
{
    //

    public function openIndexPage()
    {
        return view('homepage.indexPage');
    }
    public function openNewsIndexPage()
    {
        return view('news.newsIndex');
    }
    public function openAboutUsPage()
    {
        return view('aboutpage.aboutIndex');
    }
    public function openServiceIndexPage()
    {
        return view('servicespage.serviceIndex');
    }
}
