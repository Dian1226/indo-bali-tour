<?php

namespace App\Controllers;

use App\Modules\manage_faq\Models\FaqModel;

class Pages extends BaseController
{
    protected $faqModel;
    public function __construct()
    {
        $this->faqModel = new FaqModel();
    }
    public function index(): string
    {
        $data = [
            'faqs' => $this->faqModel->getFaq()
        ];
        return view('home/index', $data);
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

    public function footer(): string
    {
        return view('footer/footer');
    }

}
