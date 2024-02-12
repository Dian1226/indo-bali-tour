<?php

namespace App\Models;

use CodeIgniter\Model;

class CatBlogModel extends Model
{
    protected $table = 'category_blogsevents';
    protected $allowedFields = ['title', 'slug'];

    public function getCatBlog($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
