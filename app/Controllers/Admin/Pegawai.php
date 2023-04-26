<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\JabatanModel;
use App\Models\DivisiModel;

class Pegawai extends BaseController
{
    protected $pegawaiModel;

    public function __construct(){
        $this->pegawaiModel = new UsersModel();
        $this->jabatanModel = new JabatanModel();
        $this->divisiModel = new DivisiModel();
    }

    public function index(){
        $data = [
            'data' => $this->pegawaiModel->get(),
        ];

        if(empty($data['data'])){
            return redirect()->to(base_url('/'));
        }

        $data['title'] = 'Manajemen Pegawai';
        return view('admin/pegawai/index', $data);
    }

    public function read($id){
        $data = [
            'title' => 'Edit Pegawai',
            'user' => $this->pegawaiModel->getWhere(['id' => $id])->getRow(),
            'divisis' => $this->divisiModel->get()->getResult(),
            'jabatans' => $this->jabatanModel->get()->getResult(),
        ];

        return view('admin/pegawai/edit', $data);
    }

    public function update($id){
        $data = [
            'fullname' => $this->request->getPost("fullname"),
            'id_divisi' => $this->request->getPost("id_divisi"),
            'id_jabatan' => $this->request->getPost("id_jabatan"),
            'address' => $this->request->getPost("address"),
            'phone' => $this->request->getPost("phone"),
        ];

        $this->pegawaiModel->update($id, $data);
        session()->setFlashdata('flash', 'Berhasil Mengubah Data Pegawai');
        return redirect()->to(base_url('admin/pegawai/'));
    }
    
    public function delete($id){
        $this->pegawaiModel->delete($id);
        return json_encode(['success'=> true]);
    }
}
