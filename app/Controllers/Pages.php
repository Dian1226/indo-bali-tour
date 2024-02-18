<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('home');
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

    public function contactus(): string
    {
        return view('contactus/contactus');
    }
}
