<?php

namespace App\Controllers;
use App\Models\M_Menu;

class About extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Menu;
    }

    public function index()
    {
        $data = [
            'title' => 'About | Food Mood'
        ];
        echo view('pages/about', $data);
    }
}
