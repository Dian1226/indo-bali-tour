<?php

namespace App\Modules\manage_gallery\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $allowedFields = ['title', 'description', 'image'];

    public function getGallery($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
