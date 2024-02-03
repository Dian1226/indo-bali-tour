<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function tours() : string
    {
        return view('pages/tours');
    }

    public function about() : string
    {
        return view('pages/about');
    }

    public function blogEvents() : string
    {
        return view('pages/blogEvents');
    }
}
