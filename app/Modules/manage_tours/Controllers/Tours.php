<?php

namespace App\Modules\manage_tours\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_tours\Models\ToursModel;

class Tours extends BaseController
{
    protected $toursModel;
    public function __construct()
    {
        $this->toursModel = new ToursModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Tours',
            'tours' => $this->toursModel->getTours()
        ];
        return view('\App\Modules\manage_tours\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data',
        ];

        return view('\App\Modules\manage_tours\Views\/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[tours.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'tours tersebut sudah terdaftar'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga wajib diisi',
                ]
            ],
            'stars' => [
                'rules' => 'required|less_than_equal_to[5]',
                'errors' => [
                    'required' => 'Bintang wajib diisi',
                    'less_than_equal_to' => 'Angka tidak boleh lebih dari 5',
                ]

            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/tours/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/tours');
            $fileImage = $image->getName();
        }

        $this->toursModel->save([
            'title' => $this->request->getVar('title'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'content' => $this->request->getVar('content'),
            'image' => $fileImage,
            'stars' => $this->request->getVar('stars'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/tours');
    }

    public function delete($id)
    {
        $this->toursModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/tours');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'tours' => $this->toursModel->getTours($id),
        ];

        return view('\App\Modules\manage_tours\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[tours.title,id,' . $id . ']',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Title tersebut sudah terdaftar',
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'price wajib diisi',
                ]
            ],
            'stars' => [
                'rules' => 'required|less_than_equal_to[5]',
                'errors' => [
                    'required' => 'Bintang wajib diisi',
                    'less_than_equal_to' => 'Angka tidak boleh lebih dari 5',
                ]

            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/transportation');
            $fileImage = $image->getName();
        }

        $data = [
            'title' => $this->request->getVar('title'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'content' => $this->request->getVar('content'),
            'image' => $fileImage,
            'stars' => $this->request->getVar('stars'),
            'slug' => $slug
        ];
        $this->toursModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/tours');
    }
}
