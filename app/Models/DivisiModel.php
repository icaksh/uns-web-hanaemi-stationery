<?php

namespace App\Models;

use CodeIgniter\Model;

class DivisiModel extends Model
{
    protected $table = 'data_divisi';
    protected $primaryKey = 'id_divisi';
    protected $returnType = 'object';
    protected $allowedFields = ['id_divisi', 'nama_divisi', 'tunjangan_divisi'];
}
