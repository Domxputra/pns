<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTua extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'orangtua';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['orang_tua'];

}
