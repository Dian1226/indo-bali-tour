<?php

namespace App\Modules\manage_member\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';
    protected $allowedFields = ['gmail', 'username', 'password', 'name', 'nationality'];
    
    public function getmember($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
