<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\CutiModel;

class Cuti extends BaseController
{
    protected $cutiModel;

    public function __construct()
    {
        $this->cutiModel = new CutiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Layanan Cuti',
            'dataCuti' => $this->cutiModel->getCutibyUserId(user_id()),
            'cutiTerbaru' => $this->cutiModel->getCutibyUserId(user_id(), true),
            'cutiTotal' => $this->cutiModel->hitungCutibyUserId(user_id()),
            'cutiDiajukan' => $this->cutiModel->hitungCutibyUserId(user_id(), 0),
            'cutiDiterima' => $this->cutiModel->hitungCutibyUserId(user_id(), 1),
            'cutiDitolak' => $this->cutiModel->hitungCutibyUserId(user_id(), 2),
        ];

        if(empty($data['cutiTerbaru'])){
            session()->setFlashdata('flash', 'Silakan Mengajukan Cuti Terlebih Dahulu');
            return redirect()->to(base_url('user/cuti/create/'));
        }

        return view('users/cuti/index', $data);
    }

    public function createIndex()
    {
        $cuti = $this->cutiModel;
        $data = [
            'title' => 'Ajukan Cuti',
            'data' => $cuti->getCutibyId(),
        ];
        
        return view('users/cuti/create', $data);
    }

    public function read($id)
    {
        return json_encode($this->cutiModel->getCutibyId($id));
    }

    public function create()
    {
        $this->cutiModel->save([
            'id_user' => user_id(),
            'nama_cuti' => $this->request->getPost('nama_cuti'),
            'mulai_cuti' => $this->request->getPost('mulai_cuti'),
            'selesai_cuti' => $this->request->getPost('selesai_cuti'),
        ]);

        session()->setFlashdata('flash', 'Berhasil Menambahkan Data');
        return redirect()->to(base_url('user/cuti/'));
    }
}
