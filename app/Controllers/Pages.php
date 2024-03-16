<?php

namespace App\Controllers;

use App\Models\ToursModel;
use App\Modules\manage_activity\Models\ActivityModel;
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
    protected $activityModel;
    public function __construct()
    {
        $this->faqModel = new FaqModel();
        $this->transportModel = new TransportModel();
        $this->packageModel = new PackageModel();
        $this->toursModel = new ToursModel();
        $this->galleryModel = new GalleryModel();
        $this->blogsModel = new BlogModel();
        $this->activityModel = new ActivityModel();
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

    public function funactivities(): string
    {
        return view('Activities/activities');
    }

    public function adventures(): string
    {
        $data = [
            'adventure' => $this->activityModel->getAdvPrev()
        ];
        return view('adventures/adventures', $data);
    }

    public function transport(): string
    {
        return view('\App\Modules\home\Views\transport');
    }

    public function airport(): string
    {
        return view('airport/airport');
    }

    public function destination(): string
    {
        $data = [
            'tours' => $this->toursModel->getTours()
        ];
        return view('destination/destinasi', $data);
    }

    public function package(): string
    {
        return view('package/package');
    }

    public function promo(): string
    {
        return view('\App\Modules\home\Views\promo');
    }

    public function bookingForm(): string
    {
        $data = [
            'packages' => $this->packageModel->getPackage()
        ];
        return view('form pemesanan/form', $data);
    }
}
