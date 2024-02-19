<?php

namespace App\Modules\manage_contact\Controllers;

use App\Controllers\BaseController;
use App\Modules\manage_contact\Models\ContactModel;

class Contact extends BaseController
{
    protected $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel;
    }

    public function index(): string
    {
        return view('\App\Modules\contact\Views\contact');
    }

    public function send()
    {
        $email = \Config\Services::email();
        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser']  = 'nova.andini2411@gmail.com';
        $config['SMTPPass'] = 'pass1234';
        $config['SMTPPort'] = 465;
        $config['SMTPTimeout'] = 60;
        $config['SMTPCrypto'] = 'ssl';
        $config['mailType'] = 'html';

        $email->initialize($config);

        $email->setFrom('your@example.com', 'Your Name');
        $email->setTo('arunafallian@gmail.com');
        $email->setCC('another@another-example.com');
        $email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();

        die;
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'comments' => $this->request->getVar('comments')
        ];

        $this->contactModel->save([$data]);

        session()->setFlashdata('pesan', 'Komentar sudah terkirim');

        return redirect()->to('/contact');
    }

    public function getContact()
    {
        $data = [
            'title' => 'Contact',
            'contacts' => $this->contactModel->getContact()
        ];

        return view('\App\Modules\manage_contact\Views\index', $data);
    }
}
