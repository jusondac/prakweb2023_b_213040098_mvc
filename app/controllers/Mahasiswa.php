<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = "Daftar Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/index', $data);
        $this->views('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = "Detail Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        $this->views('templates/header', $data);
        $this->views('mahasiswa/detail', $data);
        $this->views('templates/footer');
    }
}