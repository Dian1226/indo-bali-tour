<?php

namespace App\Modules\manage_gallery\Controllers;

use App\Modules\manage_gallery\Models\GalleryModel;
use App\Controllers\BaseController;

class Gallery extends BaseController
{
    protected $galleryModel;
    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index(): string
    {
        $gallery = $this->galleryModel->findAll();
        $data = [
            'title' => 'Gallery',
            'galleries' => $gallery
        ];

        return view('\App\Modules\manage_gallery\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Gallery',
            'errors' => \Config\Services::validation()
        ];

        return view('\App\Modules\manage_gallery\Views\add', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('image');
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[gallery.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Title tersebut sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/gallery/add')->withInput()->with('validation', $validation);
        }

        // ambil gambar
        $image = $this->request->getFile('image');

        // pindahkan gambar
        $image->move('backoffice/gallery');

        // ambil nama file
        $fileImage = $image->getName();

        $this->galleryModel->save([
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'image' => $fileImage
        ]);

        return redirect()->to('/backoffice/gallery');
    }

    public function delete($id)
    {
        $this->galleryModel->delete($id);

        session()->setFlashdata('pesan', 'Gambar berhasil dihapus');

        return redirect()->to('/backoffice/gallery');
    }

}
