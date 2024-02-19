<?php

namespace App\Modules\manage_transportation\Controllers;

use App\Modules\manage_transportation\Models\TransportModel;
use App\Controllers\BaseController;

class Transport extends BaseController
{
    protected $transportModel;
    public function __construct()
    {
        $this->transportModel = new TransportModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Transportation',
            'transportations' => $this->transportModel->getTransport()
        ];
        return view('\App\Modules\manage_transportation\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data'
        ];

        return view('\App\Modules\manage_transportation\Views\/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'brand' => [
                'rules' => 'required|is_unique[transport.brand]',
                'errors' => [
                    'required' => 'Brand wajib diisi',
                    'is_unique' => 'Brand tersebut sudah terdaftar'
                ]
            ],
            'capacity' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Capacity wajib diisi',
                ]
            ],
            'fee' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fee wajib diisi',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/transportation/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('brand'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/transportation');
            $fileImage = $image->getName();
        }

        $this->transportModel->save([
            'brand' => $this->request->getVar('brand'),
            'capacity' => $this->request->getVar('capacity'),
            'fee' => $this->request->getVar('fee'),
            'extra' => $this->request->getVar('extra'),
            'image' => $fileImage,
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/transportation');
    }

    public function delete($id)
    {
        $this->transportModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/transportation');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'transport' => $this->transportModel->getTransport($id)
        ];

        return view('\App\Modules\manage_transportation\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'brand' => [
                'rules' => 'required|is_unique[transport.brand,id,' . $id . ']',
                'errors' => [
                    'required' => 'Brand wajib diisi',
                    'is_unique' => 'Brand tersebut sudah terdaftar'
                ]
            ],
            'capacity' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Capacity wajib diisi',
                ]
            ],
            'fee' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fee wajib diisi',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('brand'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/transportation');
            $fileImage = $image->getName();
        }

        $data = [
            'brand' => $this->request->getVar('brand'),
            'capacity' => $this->request->getVar('capacity'),
            'fee' => $this->request->getVar('fee'),
            'extra' => $this->request->getVar('extra'),
            'image' => $fileImage,
            'slug' => $slug
        ];
        $this->transportModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/transportation');
    }
}
