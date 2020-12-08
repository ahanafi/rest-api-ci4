<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';

    //Untuk menampilkan semua data users
    public function index()
    {
        $data = [
            'status' => 'success',
            'data' => $this->model->findAll()
        ];

        return $this->respond($data, 200);
    }

    //Untuk menampilkan single data user
    public function show($id = NULL)
    {
        $user = $this->model->find($id);

        if ($user) {
            $data = [
                'status' => 'success',
                'data' => $user
            ];

            return $this->respond($data, 200);
        } else {
            $response = [
                'status' => 'error',
                'message' => 'User not found.'
            ];

            return $this->respond($response, 200);
        }
    }

    //untuk menambahkan data baru
    public function create()
    {
        $postData = $this->request->getRawInput();
        $save = $this->model->insert($postData);
        if ($save) {
            $response = [
                'status' => 'success',
                'data' => $postData
            ];
            return $this->respondCreated($response);
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Error while creating new user.'
            ];

            return $this->respond($response, 201);
        }
    }
}