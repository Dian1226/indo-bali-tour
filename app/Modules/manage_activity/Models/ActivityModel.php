<?php

namespace App\Modules\manage_activity\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activity';
    protected $allowedFields = ['title', 'caption', 'description', 'image', 'slug', 'category'];

    public function getActivity($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getActivityS($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getAdvPrev()
    {
        return $this->where(['category' => 'adventure'])->paginate(3);
    }

    public function getFunPrev()
    {
        return $this->where(['category' => 'fun'])->paginate(8);
    }
}
