<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mhs;

    public function __construct() {
        $this->mhs = new MahasiswaModel() ;
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        return view("mahasiswa", $data);
    }
    public function tambah()
    {
        return view("tambah_mahasiswa");
    }
    public function ubah($id)
    {
        $data['item'] = $this->mhs->where("kode", $id)->first();
        return view("ubah_mahasiswa", $data);
    }
    public function hapus($id)
    {
        $this->mhs->delete($id);
        return redirect()->to(base_url("mahasiswa"));
    }
}
