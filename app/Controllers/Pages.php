<?php

namespace App\Controllers;

use App\Models\ToursModel;
use App\Modules\manage_blogsevents\Models\BlogModel;
use App\Modules\manage_faq\Models\FaqModel;
use App\Modules\manage_gallery\Models\GalleryModel;
use App\Modules\manage_package\Models\PackageModel;
use App\Modules\manage_transportation\Models\TransportModel;

class Pages extends BaseController
{
    protected $faqModel;
    protected $transportModel;
    protected $packageModel;
    protected $toursModel;
    protected $galleryModel;
    protected $blogsModel;
    public function __construct()
    {
        $this->faqModel = new FaqModel();
        $this->transportModel = new TransportModel();
        $this->packageModel = new PackageModel();
        $this->toursModel = new ToursModel();
        $this->galleryModel = new GalleryModel();
        $this->blogsModel = new BlogModel();
    }

    public function tours(): string
    {
        $data = [
            'tours' => $this->toursModel->getTours()
        ];

        return view('tours/tours', $data);
    }
    public function toursDetail($slug): string
    {
        $data = [
            'tour' => $this->toursModel->getTours($slug),
            'tours' => $this->toursModel->getTours()
        ];

        return view('tours/tourDetail', $data);
    }

    public function blogEvents(): string
    {
        return view('pages/blogEvents');
    }

    public function footer(): string
    {
        return view('layout/footer');
    }
}
