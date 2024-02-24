<?php

namespace App\Modules\home\Controllers;

use App\Controllers\BaseController;
use App\Models\ToursModel;
use App\Modules\manage_blogsevents\Models\BlogModel;
use App\Modules\manage_faq\Models\FaqModel;
use App\Modules\manage_gallery\Models\GalleryModel;
use App\Modules\manage_package\Models\PackageModel;
use App\Modules\manage_transportation\Models\TransportModel;

class Home extends BaseController
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
            'blogs' => $this->blogsModel->getBlog(),
        ];
        return view('\App\Modules\home\Views\index', $data);
    }

    public function bookingForm($slug = false)
    {
        $package = $this->packageModel->getPackageS($slug);
        $data = [
            'place' => $this->request->getVar('place'),
            'guests' => $this->request->getVar('guest'),
            'dateArrival' => $this->request->getVar('dateArrival'),
            'dateLeaving' => $this->request->getVar('dateLeaving'),
        ];
        return view('form pemesanan/form', $data);
    }
}
