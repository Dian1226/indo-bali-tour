<?php

namespace App\Modules\tours\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_tours\Models\ToursModel;

class Tours extends BaseController
{
    protected $toursModel;
    public function __construct()
    {
        $this->toursModel = new ToursModel();
    }

    public function index() : string {
        $data = [
            'tours' => $this->toursModel->getTours()
        ];
        return view('App\Modules\tours\Views\index', $data);
    }

    public function detail($slug) : string {
        $data = [
            'tour' => $this->toursModel->getToursSlug($slug),
            'tours' => $this->toursModel->getToursSlug()
        ];

        return view('App\Modules\tours\Views\tourDetail', $data);
    }
}