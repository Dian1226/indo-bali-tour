<?php

namespace App\Modules\manage_contact\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $allowedFields = ['name', 'email', 'comments'];
    
    public function getContact($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
