<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ModelMenu;

class MenuApiController extends BaseController
{
    use ResponseTrait;
    //get all menu
    public function index()
    {
        $model = new ModelMenu();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
    //get single menu

    public function show($id = null)
    {
        $model = new ModelMenu();
        $data = $model -> getWhere(['id_menu' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No data found with id '.$id);
        }
    }

    public function create()
    {
        
        $file = $this->request->getFile('foto');
        if(!$file->isValid())
        {
            return $this->fail($file->getErrorString());
        }
        $imageName = $file->getRandomName();
        $file->move('upload/', $imageName);
        $model = new ModelMenu();
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'deskripsi_menu' => $this->request->getPost('deskripsi_menu'),
            'foto' => $file->getName()
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
        return $this->respondCreated($data, 201);
    }
    public function update($id = null)
    {
        helper(['form', 'array']);

        $rules = [
            'nama_menu' => 'required',
            'deskripsi_menu' => ''
        ];

        $fileName = dot_array_search('foto.name', $_FILES);
        if($fileName!=''){
            $img = ['foto' => 'uploaded[foto]|max_size[foto, 1024]|is_image[foto]' ];
            $rules = array_merge($rules, $img);
        }
        $file = $this->request->getFile('foto');

        $model = new ModelMenu();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'nama_menu' => $json->nama_menu,
                'deskripsi_menu' => $json->deskripsi_menu,
                'foto' => $json->foto
            ];
        }else{
            // $input = $this->request->getRawInput();
            $data = [
                'nama_menu' => $this->request->getPost('nama_menu'),
                'deskripsi_menu' => $this->request->getPost('deskripsi_menu'),
                // 'foto' => $input['foto']
            ];
            if($fileName != ''){
                $file = $this->request->getFile('foto');
                if(!$file->isValid())
                {
                    return $this->fail($file->getErrorString());
                }
                $imageName = $file->getRandomName();
                $file->move('upload/', $imageName);
                $data['foto'] = $file->getName();
            }
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
        $model = new ModelMenu();
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
