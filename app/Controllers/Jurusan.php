<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    protected $jurusan;

    public function __construct() {
        $this->jurusan = new JurusanModel();
    }
    public function index()
    {
        $data['jurusan'] = $this->jurusan->findAll();
        return view('jurusan');
    }

    function tambah(){

    }

    function edit(){

    }

    function hapus(){

    }
}
