<?php

namespace App\Modules\member\Controllers;

use App\Modules\manage_member\Models\memberModel;
use App\Controllers\BaseController;

class Member extends BaseController
{
    protected $memberModel;
    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Form Register'
        ];
        return view('\App\Modules\member\Views\register', $data);
    }

    public function register()
    {
        if ($this->request->getPost()) {
            $name = $this->request->getVar('name');
            $nationality = $this->request->getVar('nationality');
            $receiver = $this->request->getVar('email');
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $email = \Config\Services::email();
            $email->setTo($receiver);
            $email->setFrom('arunafallian@gmail.com', 'Email Test');

            $email->setSubject('Email Verification');
            $email->setMessage("Halo, $username! Berikut adalah data anda: Nama = $name, Nationality = $nationality");

            if ($email->send()) {
                echo "Email sudah terkirim";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
        } else {
            $data = [
                'title' => 'register'
            ];
            return view('\App\Modules\member\Views\register', $data);
        }
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data'
        ];

        return view('\App\Modules\manage_member\Views\/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'question' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Question wajib diisi',
                ]
            ],
            'answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Answer wajib diisi',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/member/add')->withInput()->with('validation', $validation);
        }

        $this->memberModel->save([
            'question' => $this->request->getVar('question'),
            'answer' => $this->request->getVar('answer'),
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/member');
    }

    public function delete($id)
    {
        $this->memberModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/member');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'member' => $this->memberModel->getmember($id)
        ];

        return view('\App\Modules\manage_member\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'question' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Title wajib diisi',
                ]
            ],
            'answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Title wajib diisi',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'question' => $this->request->getVar('question'),
            'answer' => $this->request->getVar('answer'),
        ];
        $this->memberModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/member');
    }
}
