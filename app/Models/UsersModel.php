<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['fullname', 'id_divisi', 'id_jabatan', 'address', 'phone'];

    public function get(){
        $builder = $this->db->table('users');
        $builder->select('id, fullname, phone, email, address, nama_divisi, nama_jabatan');
        $builder->join('data_divisi', 'users.id_divisi = data_divisi.id_divisi');
        $builder->join('data_jabatan', 'users.id_jabatan = data_jabatan.id_jabatan');
        return $builder->get()->getResult();
    }
}
