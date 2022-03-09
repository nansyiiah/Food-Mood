<?php

namespace App\Controllers;

class Docs extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Docs',
        ];
        return view('pages/docs', $data);
    }
}
