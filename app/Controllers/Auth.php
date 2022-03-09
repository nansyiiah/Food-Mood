<?php

namespace App\Controllers;
use App\Models\M_User;
use App\Models\AuthModel;
use App\Models\ModelUser;

class Auth extends BaseController
{
    public function register()
    {
        $rules = $this->validate(
            [
                'firstname' => 'required',
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !'
                    ]
                ],
                'password' => 'required|md5',
                'role' => 'required',
            ]
        );

        if(!$rules){
            $messagevalidation = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $messagevalidation);
        }

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getVar('password')),
            'role' => $this->request->getPost('role')
        ];
        $model = new ModelUser();
        $model->insert($data);
        session()->setFlashdata('message','Berhasil Daftar !, Silahkan Login');
        return redirect()->to('/login');
    }

}
