<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Menu Manager',
            'menus' => $this->menuModel->findAll()
        ];
        return view('backoffice/menu-manager/index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data'
        ];

        return view('backoffice/menu-manager/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[menu.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Menu tersebut sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/menu-manager/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->menuModel->save([
            'title' => $this->request->getVar('title'),
            'target' => $this->request->getVar('target'),
            'status' => $this->request->getVar('status'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Menu baru berhasil ditambahkan');

        return redirect()->to('/backoffice/menu-manager');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);

        session()->setFlashdata('pesan', 'Menu berhasil dihapus');

        return redirect()->to('/backoffice/menu-manager');
    }

    public function edit($slug): string
    {
        $data = [
            'title' => 'Edit Data',
            'menu' => $this->menuModel->getMenu($slug)
        ];

        return view('backoffice/menu-manager/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[menu.title,id,' . $id . ']',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Menu tersebut sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/menu-manager/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $data = [
            'title' => $this->request->getVar('title'),
            'target' => $this->request->getVar('target'),
            'status' => $this->request->getVar('status'),
            'slug' => $slug
        ];
        $this->menuModel->update($id, $data);

        session()->setFlashdata('pesan', 'Menu berhasil diubah');

        return redirect()->to('/backoffice/menu-manager');
    }
}
