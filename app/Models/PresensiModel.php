<?php

namespace App\Models;

use CodeIgniter\Model;

class PresensiModel extends Model
{
    protected $table = 'data_presensi';
    protected $primaryKey = 'id_presensi';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = ['hari_presensi', 'bulan_presensi', 'tahun_presensi'];
}

class PresensiUserModel extends Model
{
    protected $primaryKey = 'id_data';
    protected $table = 'data_pegawai_presensi';
    protected $returnType = 'object';
    protected $allowedFields = ['id_presensi', 'id_users', 'waktu_masuk', 'waktu_keluar', 'id_kondisi'];

    public function getPresensibyId($id = false){
        $builder = $this->db->table('data_pegawai_presensi');
        $builder->join('users', 'users.id = data_pegawai_presensi.id_users');
        $builder->join('data_presensi', 'data_presensi.id_presensi = data_pegawai_presensi.id_presensi');
        $builder->join('data_potongan', 'data_potongan.id_potongan = data_pegawai_presensi.id_kondisi');
        if($id){
            return $builder->getWhere(['data_pegawai_presensi.id_presensi' => $id])->getResult();
        }
        $query = $builder->groupBy('waktu_masuk')->get();
        return $query->getResult();
    }

    public function getPresensibyUserId($id){
        $builder = $this->db->table('data_pegawai_presensi');
        $builder->join('data_presensi', 'data_presensi.id_presensi = data_pegawai_presensi.id_presensi');
        $builder->join('data_potongan', 'data_potongan.id_potongan = data_pegawai_presensi.id_kondisi');
        return $builder->orderBy('id_data DESC')->getWhere(['data_pegawai_presensi.id_users' => $id])->getResult();
    }
    
}