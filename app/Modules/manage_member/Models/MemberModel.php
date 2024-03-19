<?php

namespace App\Modules\manage_member\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $allowedFields = ['email', 'username', 'password', 'name', 'nationality', 'date_birth', 'img', 'created_at'];
    
    public function getMember($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
