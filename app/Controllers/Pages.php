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
        return view('tours/tours');
    }
    public function toursUbud() : string
    {
        return view('tours/tourslide');
    }

    public function about() : string
    {
        return view('pages/about');
    }

    public function blogEvents() : string
    {
        return view('blog-events/index');
    }

    public function article() : string
    {
        return view('blog-events/article');
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
