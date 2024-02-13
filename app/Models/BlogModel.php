<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'news_events';
    protected $allowedFields = ['category', 'created_at', 'title', 'content', 'image', 'caption_image', 'tags', 'meta_keywords', 'hit', 'status', 'slug'];

    public function getBlog($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
