<?php

namespace App\Modules\manage_faq\Controllers;

use App\Modules\manage_faq\Models\FaqModel;
use App\Controllers\BaseController;

class FAQ extends BaseController
{
    protected $faqModel;
    public function __construct()
    {
        $this->faqModel = new FaqModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'FAQ',
            'faqs' => $this->faqModel->getFaq()
        ];
        return view('\App\Modules\manage_faq\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data'
        ];

        return view('\App\Modules\manage_faq\Views\/add', $data);
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
            return redirect()->to('/backoffice/faq/add')->withInput()->with('validation', $validation);
        }

        $this->faqModel->save([
            'question' => $this->request->getVar('question'),
            'answer' => $this->request->getVar('answer'),
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/faq');
    }

    public function delete($id)
    {
        $this->faqModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/faq');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'faq' => $this->faqModel->getFaq($id)
        ];

        return view('\App\Modules\manage_faq\Views\edit', $data);
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
        $this->faqModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/faq');
    }
}
