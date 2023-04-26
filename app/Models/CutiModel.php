<?php

namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    protected $table = 'data_cuti';
    protected $primaryKey = 'id_cuti';
    protected $useTimestamps = true;
    protected $returnType = 'object';
    protected $allowedFields = ['id_user', 'nama_cuti', 'status_cuti', 'mulai_cuti', 'selesai_cuti', 'keterangan_cuti'];

    public function getCutibyId($id = false){
        $builder = $this->db->table('data_cuti');
        $builder->join('users', 'users.id = data_cuti.id_user');
        if($id){
            return $builder->getWhere(['id_cuti' => $id])->getResult();
        }
        $query = $builder->orderBy('data_cuti.created_at DESC')->get();
        return $query->getResult();
    }
    
    public function getCutibyUserId($id, $first = false, $slug=false){
        if($first){
            return $this->where('id_user', $id)->orderBy('created_at DESC')->first();
        }
        if($slug){
            return $this->where(['id_user' => $id, 'id' => $slug])->findAll();
        }
        return $this->where('id_user', $id)->findAll();
    }

    public function hitungCutibyUserId($id, $status = null){
        if($status == null) {
            return $this->where('id_user',$id)->countAllResults();
        }
        return $this->where(['id_user' => $id, 'status_cuti' => $status])->countAllResults();
    }

}
