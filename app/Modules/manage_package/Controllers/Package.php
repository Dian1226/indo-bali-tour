<?php

namespace App\Modules\manage_package\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_package\Models\PackageModel;
use App\Modules\manage_transportation\Models\TransportModel;

class Package extends BaseController
{
    protected $packageModel;
    protected $transportModel;
    public function __construct()
    {
        $this->packageModel = new PackageModel();
        $this->transportModel = new TransportModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Package',
            'packages' => $this->packageModel->getPackage()
        ];
        return view('\App\Modules\manage_package\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data',
            'transportation' => $this->transportModel->getTransport()
        ];

        return view('\App\Modules\manage_package\Views\/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[package.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Package tersebut sudah terdaftar'
                ]
            ],
            'fee' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fee wajib diisi',
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
            return redirect()->to('/backoffice/package/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/package');
            $fileImage = $image->getName();
        }

        $this->packageModel->save([
            'title' => $this->request->getVar('title'),
            'fee' => $this->request->getVar('fee'),
            'rundown' => $this->request->getVar('rundown'),
            'caption' => $this->request->getVar('caption'),
            'image' => $fileImage,
            'stars' => $this->request->getVar('stars'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/package');
    }

    public function delete($id)
    {
        $this->packageModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/package');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'package' => $this->packageModel->getPackage($id),
        ];

        return view('\App\Modules\manage_package\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[package.title,id,' . $id . ']',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Package tersebut sudah terdaftar',
                ]
            ],
            'fee' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fee wajib diisi',
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
            'fee' => $this->request->getVar('fee'),
            'rundown' => $this->request->getVar('rundown'),
            'caption' => $this->request->getVar('caption'),
            'image' => $fileImage,
            'stars' => $this->request->getVar('stars'),
            'slug' => $slug
        ];
        $this->packageModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/package');
    }
}
