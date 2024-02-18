<?php

namespace App\Modules\manage_faq\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
    protected $table = 'faq';
    protected $allowedFields = ['question', 'answer'];
    
    public function getFaq($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
