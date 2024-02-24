<?php

namespace App\Modules\about\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index(): string
    {
        return view('\App\Modules\about\Views\index');
    }
}
