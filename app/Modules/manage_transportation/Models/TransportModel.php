<?php

namespace App\Modules\manage_transportation\Models;

use CodeIgniter\Model;

class TransportModel extends Model
{
    protected $table = 'transport';
    protected $allowedFields = ['brand', 'capacity', 'fee', 'extra', 'image', 'slug'];
    
    public function getTransport($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getPrev()
    {
        return $this->paginate(3);
    }

}
