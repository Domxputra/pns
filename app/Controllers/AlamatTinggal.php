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
        $data['alamat_tinggal'] = $this->at->findAll();
        return view("alamat_tinggal", $data);
    }
    public function tambah()
    {
        return view("tambah_alamat_tinggal");
    }
    public function ubah($id)
    {
        $data['item'] = $this->at->where("kode", $id)->first();
        return view("ubah_alamat_tinggal", $data);
    }
    public function hapus($id)
    {
        $this->at->delete($id);
        return redirect()->to(base_url("alamat_tinggal"));
    }
}
