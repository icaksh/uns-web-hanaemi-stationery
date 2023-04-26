<?php

namespace App\Controllers\Admin;

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
        $cuti = $this->cutiModel;
        $data = [
            'title' => 'Manajemen Layanan Cuti',
            'dataCuti' => $cuti->getCutibyId(),
        ];

        if(empty($data['dataCuti'])){
            return redirect()->to(base_url('/'));
        }
        
        return view('admin/cuti/index', $data);
    }

    public function read($id)
    {
        return json_encode($this->cutiModel->getCutibyId($id));
    }

    public function update($id)
    {
        $data = [
            'status_cuti' => $this->request->getPost("status"),
        ];
        $this->cutiModel->update($id, $data);
        return json_encode(['success'=> true]);
    }

}
