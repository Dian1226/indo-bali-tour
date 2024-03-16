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
    public function index(): string
    {
        $data = [
            'faqs' => $this->faqModel->getFaq(),
            'transport' => $this->transportModel->getTransport(),
            'packages' => $this->packageModel->getPackage(),
            'tours' => $this->toursModel->getTours(),
            'gallery' => $this->galleryModel->getGallery(),
            'blogs' => $this->blogsModel->getBlog()
        ];
        return view('home/index', $data);
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

    public function about(): string
    {
        return view('About/About');
    }

    public function blogEvents(): string
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
