<?php

namespace App\Modules\gallery\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_gallery\Models\GalleryModel;

class Gallery extends BaseController
{
    protected $galleryModel;
    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index(): string
    {
        $data = [
            'gallery' => $this->galleryModel->getGallery(),
        ];
        return view('\App\Modules\gallery\Views\index', $data);
    }

    public function photo(): string
    {
        return view('\App\Modules\gallery\Views\photo');
    }

    public function video(): string
    {
        return view('\App\Modules\gallery\Views\video');
    }
}
