<?php

namespace App\Modules\manage_tours\Models;

use CodeIgniter\Model;

class ToursModel extends Model
{
    protected $table = 'tours';
    protected $allowedFields = ['title', 'price', 'description', 'image', 'slug', 'stars', 'content'];

    public function getTours($id = false)
    {
        if ($id != false) {
            return $this->where(['id' => $id])->first();
        }
        return $this->findAll();
    }

    public function getToursID($id = false)
    {
        if ($id != false) {
            return $this->where(['id' => $id])->first();
        }
        return $this->findAll();
    }

    public function getToursSlug($slug = false)
    {
        if ($slug != false) {
            return $this->where(['slug' => $slug])->first();
        }
        return $this->findAll();
    }
}
