<?php

namespace App\Controllers;

use App\Models\CatBlogModel;

class Blog extends BaseController
{
    protected $catBlogModel;
    public function __construct()
    {
        $this->catBlogModel = new CatBlogModel();
    }

    public function category(): string
    {
        $data = [
            'title' => 'Category Blogs & Events',
            'categories' => $this->catBlogModel->getCatBlog()
        ];

        return view('/backoffice/blogs-events/category', $data);
    }
}
