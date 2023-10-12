<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    protected $jrs;

    public function __construct() {
        $this->jrs = new JurusanModel() ;
    }
    public function index()
    {
        $data['jurusan'] = $this->jrs->findAll();
        return view("jurusan", $data);
    }
    public function tambah()
    {
        return view("tambah_jurusan");
    }
    public function ubah($id)
    {
        $data['item'] = $this->jrs->where("kode", $id)->first();
        return view("ubah_jurusan", $data);
    }
    public function hapus($id)
    {
        $this->jrs->delete($id);
        return redirect()->to(base_url("jurusan"));
    }
}
