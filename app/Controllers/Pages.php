<?php

namespace App\Controllers;
use App\Models\M_Menu;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Menu;
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Food Mood',
        ];
        echo view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Food Mood'
        ];
        echo view('pages/about', $data);
    }
    public function menu()
    {
        $data = [
            'title' => 'Menu | Food mood',
            'menu' => $this->model->getAllMenu()
        ];
        return view('pages/menu', $data);
        echo view('layout/footer', $data);
    }
    public function detail($id = null)
    {
        // $id = $this->request->getPost('namamenuu');
        $data = [
            'title' => 'Detail',
            'menu' => $this->model->getWhere(['id_menu' => $id])->getResult()
        ];
        return view('layout/card', $data);
    }
}
