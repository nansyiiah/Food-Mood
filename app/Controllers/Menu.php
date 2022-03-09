<?php

namespace App\Controllers;
use App\Models\M_Menu;

class Menu extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Menu;
    }

    public function about()
    {
        $data = [
            'title' => 'About | Food Mood'
        ];
        echo view('pages/about', $data);
    }
    public function index()
    {
        $data = [
            'title' => 'Menu | Food mood',
            'menu' => $this->model->getAllMenu()
        ];
        return view('pages/menu', $data);
        echo view('layout/footer', $data);
    }
    public function detail()
    {
        $id = $this->request->getPost('namamenuu');
        $data = [
            'title' => 'Detail',
            'menu' => $this->model->getAllMenu()
        ];
        echo $id;
    }
}
