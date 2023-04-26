<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DivisiModel;

class Divisi extends BaseController
{
    protected $divisiModel;

    public function __construct(){
        $this->divisiModel = new DivisiModel();
    }

    public function index(){
        $data = [
            'data' => $this->divisiModel->get()->getResult(),
        ];

        if(empty($data['data'])){
            return redirect()->to(base_url('/'));
        }

        $data['title'] = 'Manajemen Divisi';
        return view('admin/divisi/index', $data);
    }

    public function create()
    {
        $this->divisiModel->save([
            'nama_divisi' => $this->request->getPost('nama_divisi'),
            'tunjangan_divisi' => $this->request->getPost('tunjangan_divisi'),
        ]);
        return json_encode(['success'=> true]);
    }

    public function read($id){
        return json_encode($this->divisiModel->getWhere(['id_divisi'=>$id])->getResult());
    }

    public function update($id){
        $data = [
            'nama_divisi' => $this->request->getPost("nama_divisi"),
            'tunjangan_divisi' => $this->request->getPost("tunjangan_divisi")
        ];

        $this->divisiModel->update($id, $data);
        return json_encode(['success'=> true]);
    }

    public function delete($id){
        $this->divisiModel->delete($id);
        return json_encode(['success'=> true]);
    }
}
