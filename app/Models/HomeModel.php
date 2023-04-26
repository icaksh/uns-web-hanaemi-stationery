<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function getInfo($id){
        $builder = $this->db->table('users');
        $builder->select('fullname, phone, email, address, nama_divisi, nama_jabatan, gaji_pokok, tunjangan_divisi');
        $builder->join('data_divisi', 'users.id_divisi = data_divisi.id_divisi');
        $builder->join('data_jabatan', 'users.id_jabatan = data_jabatan.id_jabatan');
        return $builder->getWhere(['users.id' => $id ])->getRow();
    }
}
