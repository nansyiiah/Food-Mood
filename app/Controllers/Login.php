<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Food Mood',
        ];
        $ModelUser = new \App\Models\ModelUser();
        $login = $this->request->getPost('login');
        if($login){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if($username == '' or $password == ''){
                $err = "Silahkan masukan username dan password !";
            }
            if(empty($err)){
                $dataUser = $ModelUser->where('username', $username)->first();
                if($dataUser['password']!= md5($password)){
                    $err = "Password tidak sesuai";
                }
            }
            if(empty($err)){
                $dataSesi = [
                    'user_id' => $dataUser['user_id'],
                    'username' => $dataUser['username'],
                    'firstname' => $dataUser['firstname'],
                    'lastname' => $dataUser['lastname'],
                    'password' => $dataUser['password'],
                    'role' => $dataUser['role']
                ];
                session()->set($dataSesi);
                return redirect()->to('dashboard');
            }
            if($err){
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('login');
            }
        }
        echo view('customer/login', $data);
    }
}
