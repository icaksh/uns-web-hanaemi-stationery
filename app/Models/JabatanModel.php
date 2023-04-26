<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = 'data_jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $returnType = 'object';
    protected $allowedFields = ['id_jabatan', 'nama_jabatan', 'gaji_pokok'];
}
