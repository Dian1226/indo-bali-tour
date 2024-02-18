<?php

namespace App\Modules\manage_gallery\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $allowedFields = ['title', 'image', 'description'];
}
