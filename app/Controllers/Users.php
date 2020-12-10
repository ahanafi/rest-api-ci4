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

    //untuk menambahkan data user baru
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

    //untuk mengupdate data users
    public function update($id = NULL)
    {
        $user = $this->model->find($id);

        if($user) {
            //DO update user
            $postData = $this->request->getRawInput();
            $update = $this->model->update($id, $postData);
            if($update) {
                $response = [
                    'status' => 'success',
                    'data' => $postData,
                    'message' => 'User was updated.'
                ];
                return $this->respondUpdated($response);
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Error while updating user.'
                ];
                return $this->respond($response);
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'User not found.'
            ];

            return $this->respond($response);
        }
    }

    //Untuk menghapus data user
    public function delete($id = NULL)
    {
        $user = $this->model->find($id);
        if($user) {
            $delete = $this->model->delete($id);
            if($delete) {
                $response = [
                    'status' => 'success',
                    'message' => 'User was deleted.'
                ];
                return $this->respondDeleted($response);
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Error while deleting user.'
                ];
                return $this->respond($response);
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'User was not found.'
            ];
            return $this->respond($response);
        }
    }
}