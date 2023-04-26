<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PresensiModel;
use App\Models\PresensiUserModel;

class Presensi extends BaseController
{
    protected $presensiModel, $presensiUserModel;

    public function __construct(){
        $this->presensiModel = new PresensiModel();
        $this->presensiUserModel = new PresensiUserModel();
    }

    public function index(){
        $data = [
            'data' => $this->presensiModel->orderBy('created_at DESC')->get()->getResult(),
        ];

        if(empty($data['data'])){
            return redirect()->to(base_url('/'));
        }

        $data['title'] = 'Manajemen Presensi';
        return view('admin/presensi/index', $data);
    }

    public function read($id){
        $data = [
            'title' => 'Manajemen Presensi',
            'data' => $this->presensiUserModel->getPresensibyId($id),
        ];

        if(empty($data['data'])){
            session()->setFlashdata('error', 'Belum Ada Data');
            return redirect()->to(base_url('admin/presensi/'));
        }
        return view('admin/presensi/info', $data);
    }

    public function create()
    {
        $this->presensiModel->save([
            'hari_presensi' => date('d'),
            'bulan_presensi' => date('m'),
            'tahun_presensi' => date('Y'),
        ]);
        return json_encode(['success'=> true]);
    }
}
