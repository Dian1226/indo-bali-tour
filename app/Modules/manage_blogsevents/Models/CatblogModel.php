<?php

namespace App\Modules\manage_blogsevents\Models;

use CodeIgniter\Model;

class CatblogModel extends Model
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
