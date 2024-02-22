<?php

namespace App\Models;

use CodeIgniter\Model;

class ToursModel extends Model
{
    protected $table = 'tours';
    protected $allowedFields = ['title', 'description', 'image', 'price', 'rate', 'slug'];
    
    public function getTours($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
