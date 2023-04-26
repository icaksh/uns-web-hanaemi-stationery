<?php

namespace App\Controllers;
use App\Models\HomeModel;
use App\Models\PresensiModel;
use App\Models\PresensiUserModel;

class Home extends BaseController
{
    protected $homeModel;

    public function __construct(){
        $this->homeModel = new HomeModel();
        $this->presensiModel = new PresensiModel();
        $this->presensiUserModel = new PresensiUserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'users' => $this->homeModel->getInfo(user_id()),
            'totalPresensi' => $this->presensiModel->where(['bulan_presensi' => date('m')])->countAll(),
            'presensiHadir' => $this->presensiUserModel->join('data_presensi', 'data_presensi.id_presensi = data_pegawai_presensi.id_presensi')->where(['bulan_presensi' => date('m'), 'data_pegawai_presensi.id_users' => user_id(), 'id_kondisi' => 1])->countAllResults(),
            'presensiIzin' => $this->presensiUserModel->join('data_presensi', 'data_presensi.id_presensi = data_pegawai_presensi.id_presensi')->where(['bulan_presensi' => date('m'), 'data_pegawai_presensi.id_users' => user_id(), 'id_kondisi' => 2])->countAllResults(),
        ];
        return view('dashboard', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
        ];

        return view('about', $data);
    }

    public function dokumentasi()
    {
        $data = [
            'title' => 'Dokumentasi',
        ];

        return view('dokumentasi', $data);
    }
}
