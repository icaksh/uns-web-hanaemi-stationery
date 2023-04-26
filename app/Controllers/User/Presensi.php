<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PresensiModel;
use App\Models\PresensiUserModel;

class Presensi extends BaseController
{
    protected $presensiModel, $presensiUserModel;

    public function __construct()
    {
        $this->presensiModel = new PresensiModel();
        $this->presensiUserModel = new PresensiUserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Presensi Kehadiran',    
            'dataPresensiTerbaru' => $this->presensiModel->orderBy('created_at DESC')->first(),
            'dataPresensi' => $this->presensiUserModel->getPresensibyUserId(user_id()),
        ];
        
        return view('users/presensi/index', $data);
    }

    public function create()
    {
        $this->presensiUserModel->save([
            'id_presensi' => $this->request->getPost('id_presensi'),
            'id_users' => $this->request->getPost('id_users'),
            'waktu_masuk' => date("Y-m-d h:i:s"),
            'id_kondisi' => $this->request->getPost('id_kondisi')
        ]);

        return json_encode(['success'=> true]);
    }
}
