<?php

namespace App\Modules\contact\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_faq\Models\FaqModel;

class Contact extends BaseController
{
    protected $faqModel;
    public function __construct()
    {
        $this->faqModel = new FaqModel();
    }

    public function index(): string
    {
        $data = [
            'faqs' => $this->faqModel->getFaq(),
        ];
        return view('\App\Modules\contact\Views\index', $data);
    }
}
