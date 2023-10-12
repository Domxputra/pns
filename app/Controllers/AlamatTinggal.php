<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlamatTinggalModel;

class AlamatTinggal extends BaseController
{
    protected $at;
    public function __construct() {
        $this->at = new AlamatTinggalModel();
    }

    public function index()
    {
        //
    }
}
