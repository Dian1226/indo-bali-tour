<?php

namespace App\Modules\manage_tours\Models;

use CodeIgniter\Model;

class ToursModel extends Model
{
    protected $table = 'tours';
    protected $allowedFields = ['title', 'price', 'description', 'image', 'slug', 'stars', 'content'];

    public function getTours($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
