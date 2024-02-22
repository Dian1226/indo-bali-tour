<?php

namespace App\Modules\manage_package\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'package';
    protected $allowedFields = ['title', 'discount', 'price', 'rundown', 'image', 'slug', 'stars', 'caption'];

    public function getPackage($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
