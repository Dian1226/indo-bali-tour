<?php

namespace App\Modules\contact\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('\App\Modules\contact\Views\index');
    }
}
