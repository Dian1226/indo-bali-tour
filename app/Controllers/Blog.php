<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CatBlogModel;

class Blog extends BaseController
{
    protected $catBlogModel;
    protected $blogModel;
    public function __construct()
    {
        $this->catBlogModel = new CatblogModel();
        $this->blogModel = new BlogModel();
    }

    public function index(): string
    {
        $blogs = $this->blogModel->getBlog();
        $data = [
            'title' => 'Blogs & Events',
            'blogs' => $blogs
        ];

        return view('/backoffice/blogs-events/index', $data);
    }

    public function add() : string 
    {
        $categories = $this->catBlogModel->getCatBlog();
        $data = [
            'title' => 'Add Blog',
            'categories' => $categories
        ];

        return view('backoffice/blogs-events/add', $data);
    }

    public function save() 
    {
        if (!$this->validate([
            'created_at' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Date wajib diisi'
                ]
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Title wajib diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('backoffice/blogsevents/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->blogModel->save([
            'category' => $this->request->getVar('category'),
            'created_at' => $this->request->getVar('created_at'),
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'image' => $this->request->getVar('image'),
            'caption_image' => $this->request->getVar('caption'),
            'tags' => $this->request->getVar('tags'),
            'meta_keywords' => $this->request->getVar('meta'),
            'hit' => $this->request->getVar('hit'),
            'status' => $this->request->getVar('status'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Blog baru telah ditambahkan');

        return redirect()->to('/backoffice/blogsevents');
    }

    public function delete($id)
    {
        $this->blogModel->delete($id);

        session()->setFlashdata('pesan', 'Blog telah dihapus');

        return redirect()->to('/backoffice/blogsevents');
    }

    public function category(): string
    {
        $data = [
            'title' => 'Category Blogs & Events',
            'categories' => $this->catBlogModel->getCatBlog()
        ];

        return view('/backoffice/blogs-events/category', $data);
    }

    public function addCat()
    {
        $data = [
            'title' => 'Add Category'
        ];

        return view('backoffice/blogs-events/addCat', $data);
    }

    public function saveCat()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[category_blogsevents.title]',
                'errors' => [
                    'required' => 'Bagian title harus diisi',
                    'is_unique' => 'Kategori ini telah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/category-blogsevents/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $this->catBlogModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Kategori baru berhasil ditambahkan');

        return redirect()->to('/backoffice/category-blogsevents');
    }

    public function delCat($id)
    {
        $this->catBlogModel->delete($id);

        session()->setFlashdata('pesan', 'Kategori berhasil dihapus');

        return redirect()->to('/backoffice/category-blogsevents');
    }

    public function editCat($slug): string
    {
        $category = $this->catBlogModel->getCatBlog($slug);
        $data = [
            'title' => 'Edit Category',
            'category' => $category
        ];

        return view('/backoffice/blogs-events/editCat', $data);
    }

    public function updateCat($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[category_blogsevents.title,id.' . $id . ']',
                'errors' => [
                    'required' => 'Bagian title harus diisi',
                    'is_unique' => 'Kategori ini telah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/backoffice/category-blogsevents/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);

        $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $slug
        ];
        $this->catBlogModel->update($id, $data);

        session()->setFlashdata('pesan', 'Kategori berhasil diubah');

        return redirect()->to('/backoffice/category-blogsevents');
    }
}
