<?php

namespace App\Controllers;
use App\Models\M_Menu;
use App\Models\M_Edit;
use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Menu;
        $this->modelEdit = new M_Edit;
    }
    public function index()
    {
        $data = [
            'title' => 'Menu',
            'menu' => $this->model->getAllMenu()
        ];
        echo view('dashboard/index', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
    public function menu()
    {
        $data = [
            'title' => 'Menu',
            'user' => $this->modelEdit->getAllMenu()
        ];
        echo view('dashboard/menu', $data);
    }
    public function add()
    {
        $file = $this->request->getFile('image');
        if($file -> isValid() && !$file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('upload/', $imageName);
        }
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'deskripsi_menu' => $this->request->getPost('deskripsi_menu'),
            'foto' => $imageName
        ];

        //insert data

        $success = $this->model->add($data);
        if($success){
            session()->setFlashdata('message', 'Berhasil Ditambah !');
            return redirect()->to('dashboard');
        }
    }

    public function delete($id = null)
    {
        $user = new ModelUser();
        $user->delete($id);
        return redirect()->back()->with('status', 'Data has been deleted !');
    }

    public function ubah()
    {
        $id = $this->request->getPost('id');
        $dbId = $this->modelEdit->getDataById($id)['user_id'];
        $data = array(
            'username' => $this->request->getPost('username'),
            'firstname' => $this->request->getPost('namadepan'),
            'lastname' => $this->request->getPost('namabelakang'),
        );
        $success = $this->modelEdit->ubah($data, $id);
        if($success){
            session()->setFlashdata('message', 'Berhasil Diedit !');
            return redirect()->to('dashboard/ubah');
        }
    }
}
