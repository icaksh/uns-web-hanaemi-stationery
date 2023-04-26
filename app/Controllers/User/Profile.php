<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\JabatanModel;
use App\Models\DivisiModel;

class Profile extends BaseController
{
    protected $pegawaiModel;

    public function __construct(){
        $this->pegawaiModel = new UsersModel();
        $this->jabatanModel = new JabatanModel();
        $this->divisiModel = new DivisiModel();
    }

    public function read(){
        $data = [
            'title' => 'Edit Pegawai',
            'user' => $this->pegawaiModel->getWhere(['id' => user_id()])->getRow(),
            'divisis' => $this->divisiModel->get()->getResult(),
            'jabatans' => $this->jabatanModel->get()->getResult(),
        ];

        return view('users/profile/edit', $data);
    }

    public function update(){
        $data = [
            'fullname' => $this->request->getPost("fullname"),
            'address' => $this->request->getPost("address"),
            'phone' => $this->request->getPost("phone"),
        ];

        $this->pegawaiModel->update(user_id(), $data);
        session()->setFlashdata('flash', 'Berhasil Mengubah Data Pribadi');
        return redirect()->to(base_url('user/profile'));
    }

    public function auth(){
        $data = [
            'email' => $this->request->getPost("fullname"),
            'address' => $this->request->getPost("address"),
            'phone' => $this->request->getPost("phone"),
        ];

        $this->pegawaiModel->update(user_id(), $data);
        session()->setFlashdata('flash', 'Berhasil Mengubah Data Pribadi');
        return redirect()->to(base_url('profile/edit'));
    }

}
