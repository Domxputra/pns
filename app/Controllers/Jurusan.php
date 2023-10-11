<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Jurusan extends BaseController
{
    protected $jurusan;

    public function __construct() {
        $this->jurusan = $jurusanmodel;
    }
    }
    public function index()
    {
        $data['jurusan'] = $this->jurusan->findAll();
        return view['jurusan'];
    }

    function tambah(){

    }

    function hapus(){
        
    }

    function kurang(){
        
    }
}
