<?php

namespace App\Modules\blogsevents\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_blogsevents\Models\BlogModel;
use App\Modules\manage_blogsevents\Models\CatblogModel;

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
        $data = [
            'category' => $this->catBlogModel->getCatBlog(),
            'blogs' => $this->blogModel->getBlog()
        ];
        return view('\App\Modules\blogsevents\Views\index', $data);
    }

    public function article($slug): string
    {
        $data = [
            'category' => $this->catBlogModel->getCatBlog(),
            'blog' => $this->blogModel->getBlog($slug)
        ];
        return view('\App\Modules\blogsevents\Views\article', $data);
    }

    public function category($slug): string
    {
        $data = [
            'category' => $this->catBlogModel->getCatBlog($slug),
            'blog' => $this->blogModel->getBlogC()
        ];
        return view('\App\Modules\blogsevents\Views\index', $data);
    }
}
