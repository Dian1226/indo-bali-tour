<?php

namespace App\Modules\contact\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('\App\Modules\contact\Views\contactus');
    }

}