<?php

namespace App\Controllers;
use App\Models\M_Edit;

class Customer extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Edit;
    }

    public function index()
    {
        $data = [
            'title' => 'Edit',
            'user' => $this->model->getAllMenu()
        ];


        $session_data = $this->session->userdata('sessiondata');
        $id = $session_data['user_id'];
        $this->load->model('image');
        $result = $this->Model_name->get_user_data($id);

        if($result==0)
        {
            echo 'No user Found';
        }
        else
        {
            $data['user_id']=$result;
            $this->load->view("dashboard/index", $data);
        }
        // echo view('dashboard/index', $data);
    }

    public function ubah()
    {
        $id = $this->request->getPost('idedit');
        $dbId = $this->model->getDataById($id)['user_id'];
        $data = array(
            'username' => $this->request->getPost('usernameEdit'),
            'firstname' => $this->request->getPost('firstnameEdit'),
            'lastname' => $this->request->getPost('lastnameEdit'),
            'image' => $this->request->getPost('imageprofil'),
        );
        $success = $this->model->ubah($data, $id);
        if($success){
            session()->setFlashdata('message', 'Berhasil Diedit !');
            return redirect()->to('dashboard');
        }
    }
    
}
