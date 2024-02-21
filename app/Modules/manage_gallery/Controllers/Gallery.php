<?php

namespace App\Modules\manage_gallery\Controllers;

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
            'title' => 'Gallery',
            'gallery' => $this->galleryModel->getGallery()
        ];
        return view('\App\Modules\manage_gallery\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data',
        ];

        return view('\App\Modules\manage_gallery\Views\add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[gallery.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Package tersebut sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/gallery/add')->withInput()->with('validation', $validation);
        }

        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/gallery');
            $fileImage = $image->getName();
        }

        $this->galleryModel->save([
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'image' => $fileImage,
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/gallery');
    }

    public function delete($id)
    {
        $this->galleryModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/gallery');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'gallery' => $this->galleryModel->getGallery($id),
        ];

        return view('\App\Modules\manage_gallery\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[gallery.title,id,' . $id . ']',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Judul tersebut sudah terdaftar',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/gallery');
            $fileImage = $image->getName();
        }

        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'image' => $fileImage,
        ];
        $this->galleryModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/gallery');
    }
}
