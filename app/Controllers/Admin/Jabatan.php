<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    protected $jabatanModel;

    public function __construct(){
        $this->jabatanModel = new JabatanModel();
    }

    public function index(){
        $data = [
            'data' => $this->jabatanModel->get()->getResult(),
        ];

        if(empty($data['data'])){
            return redirect()->to(base_url('/'));
        }

        $data['title'] = 'Manajemen Jabatan';
        return view('admin/jabatan/index', $data);
    }

    public function create()
    {
        $this->jabatanModel->save([
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            'gaji_pokok' => $this->request->getPost('gaji_pokok'),
        ]);
        return json_encode(['success'=> true]);
    }

    public function read($id){
        return json_encode($this->jabatanModel->getWhere(['id_jabatan'=>$id])->getResult());
    }

    public function update($id){
        $data = [
            'nama_jabatan' => $this->request->getPost("nama_jabatan"),
            'gaji_pokok' => $this->request->getPost("gaji_pokok")
        ];

        $this->jabatanModel->update($id, $data);
        return json_encode(['success'=> true]);
    }

    public function delete($id){
        $this->jabatanModel->delete($id);
        return json_encode(['success'=> true]);
    }
}
