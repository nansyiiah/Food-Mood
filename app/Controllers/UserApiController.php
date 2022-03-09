<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ModelUser;

class UserApiController extends BaseController
{
    use ResponseTrait;
    //get all menu
    public function index()
    {
        $model = new ModelUser();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
    //get single menu

    public function show($id = null)
    {
        $model = new ModelUser();
        $data = $model -> getWhere(['user_id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No data found with id '.$id);
        }
    }

    public function create()
    {
        helper(['form', 'array']);
        $model = new ModelUser();
        $rules = 
            [
                'firstname' => 'required',
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan !'
                    ]
                ],
                'password' => 'required|md5',
            ];
        
        if(!$this->validate($rules)){
            return $this->fail($this->validator->getErrors());
        }else{

        
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getVar('password')),
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'role' => 'user'
        ];
        // $data = json_decode(file_get_contents("php://input"));
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data records created'
            ]
        ];
        return $this->respondCreated($response, 201);
        }
    }
    public function update($id = null)
    {
        helper(['form', 'array']);

        $model = new ModelUser();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'username' => $json->username,
                'password' => md5($json->password),
                'firstname' => $json->firstname,
                'lastname' => $json->lastname,
                'role' => 'user'
            ];
        }else{
            // $input = $this->request->getRawInput();
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => md5($this->request->getVar('password')),
                'firstname' => $this->request->getPost('firstname'),
                'lastname' => $this->request->getPost('lastname'),
                'role' => 'user'
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new ModelUser();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
         
    }
}
