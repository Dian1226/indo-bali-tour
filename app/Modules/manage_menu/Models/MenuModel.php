<?php

namespace App\Modules\manage_menu\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $allowedFields = ['title', 'target', 'status', 'slug'];
    
    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
