<?php

namespace App\Modules\manage_activity\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_activity\Models\ActivityModel;

class Activity extends BaseController
{
    protected $activityModel;
    public function __construct()
    {
        $this->activityModel = new ActivityModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Activity',
            'activity' => $this->activityModel->getActivity()
        ];
        return view('\App\Modules\manage_activity\Views\index', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Add Data',
        ];

        return view('\App\Modules\manage_activity\Views\add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[activity.title]',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'activity tersebut sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/activity/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        if ($image->getError(4)) {
            $fileImage = '';
        } else {
            $image->move('backoffice/activity');
            $fileImage = $image->getName();
        }

        $this->activityModel->save([
            'title' => $this->request->getVar('title'),
            'category' => $this->request->getVar('category'),
            'caption' => $this->request->getVar('caption'),
            'description' => $this->request->getVar('description'),
            'image' => $fileImage,
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data baru berhasil ditambahkan');

        return redirect()->to('/backoffice/activity');
    }

    public function delete($id)
    {
        $this->activityModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/backoffice/activity');
    }

    public function edit($id): string
    {
        $data = [
            'title' => 'Edit Data',
            'activity' => $this->activityModel->getActivity($id),
        ];

        return view('\App\Modules\manage_activity\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[activity.title,id,' . $id . ']',
                'errors' => [
                    'required' => 'Title wajib diisi',
                    'is_unique' => 'Title tersebut sudah terdaftar',
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
            'category' => $this->request->getVar('category'),
            'caption' => $this->request->getVar('caption'),
            'description' => $this->request->getVar('description'),
            'image' => $fileImage,
            'slug' => $slug
        ];
        $this->activityModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/backoffice/activity');
    }
}
