<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatTinggalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'alamattinggal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'asal_sma', 'email_mhs_baru', 'no_tlp', 'status', 'kode_pos', 'id_orang_tua', 'sumber_biaya', 'informasi'];

    
}
