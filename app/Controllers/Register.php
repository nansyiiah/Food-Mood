<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'title' => 'Register',
            'validate' => \Config\Services::validation()
        ];
        
        return view('customer/register', $data);
    }
}
