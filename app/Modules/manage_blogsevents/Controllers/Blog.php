<?php

namespace App\Modules\manage_blogsevents\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_blogsevents\Models\BlogModel;
use App\Modules\manage_blogsevents\Models\CatBlogModel;

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

        return view('\App\Modules\manage_blogsevents\Views\index', $data);
    }

    public function add(): string
    {
        $categories = $this->catBlogModel->getCatBlog();
        $data = [
            'title' => 'Add Blog',
            'categories' => $categories
        ];

        return view('\App\Modules\manage_blogsevents\Views\add', $data);
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
                    'required' => 'Title wajib diisi',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('backoffice/blogsevents/add')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        $image->move('backoffice/blog');
        $fileImage = $image->getName();

        $this->blogModel->save([
            'category' => $this->request->getVar('category'),
            'created_at' => $this->request->getVar('created_at'),
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'image' => $fileImage,
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

    public function edit($slug): string
    {
        $blog = $this->blogModel->getBlog($slug);
        $categories = $this->catBlogModel->getCatBlog();

        $data = [
            'title' => 'Edit Blogs & Events',
            'blog' => $blog,
            'categories' => $categories
        ];

        return view('\App\Modules\manage_blogsevents\Views\edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'created_at' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal wajib diisi'
                ]
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul wajib diisi',
                ]
            ]
        ])) {
            return redirect()->to('/backoffice/blogsevents/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $image = $this->request->getFile('image');
        $image->move('backoffice/blog');
        $fileImage = $image->getName();

        $data = [
            'category' => $this->request->getVar('category'),
            'created_at' => $this->request->getVar('created_at'),
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'image' => $fileImage,
            'caption_image' => $this->request->getVar('caption'),
            'tags' => $this->request->getVar('tags'),
            'meta_keywords' => $this->request->getVar('meta'),
            'hit' => $this->request->getVar('hit'),
            'status' => $this->request->getVar('status'),
            'slug' => $slug
        ];
        $this->blogModel->update($id, $data);

        session()->setFlashdata('pesan', 'Blog berhasil diubah');

        return redirect()->to('/backoffice/blogsevents');
    }

    public function category(): string
    {
        $data = [
            'title' => 'Category Blogs & Events',
            'categories' => $this->catBlogModel->getCatBlog()
        ];

        return view('\App\Modules\manage_blogsevents\Views\category', $data);
    }

    public function addCat()
    {
        $data = [
            'title' => 'Add Category'
        ];

        return view('\App\Modules\manage_blogsevents\Views\addCat', $data);
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

        return view('\App\Modules\manage_blogsevents\Views\editCat', $data);
    }

    public function updateCat($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[category_blogsevents.title,id,' . $id . ']',
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
