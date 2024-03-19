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
        return view('\App\Modules\member\Views\index');
    }

    public function team()
    {
        return view('\App\Modules\member\Views\team');
    }

    public function register()
    {
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'username' => [
                'rules' => 'required|is_unique[member.username]',
                'errors' => [
                    'is_unique' => 'Username tersebut telah terdaftar.',
                ]
            ],
            'password1' => [
                'rules' => 'required|matches[password2]',
                'errors' => [
                    'matches' => 'Password tidak sesuai.',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/member#form')->withInput()->with('validation', $validation);
        }

        $image = $this->request->getFile('img');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/member');
            $fileImage = $image->getName();
        }

        $pw = $this->request->getVar('password1');
        $password = password_hash($pw, PASSWORD_DEFAULT);
        $date = date('l, d M Y');

        $this->memberModel->save([
            'name' => $this->request->getVar('name'),
            'nationality' => $this->request->getVar('nationality'),
            'date_birth' => $this->request->getVar('date_birth'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $password,
            'img' => $fileImage,
            'created_at' => $date
        ]);

        session()->setFlashdata('pesan', 'Akun Anda berhasil didaftarkan');

        return redirect()->to('/member');
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
