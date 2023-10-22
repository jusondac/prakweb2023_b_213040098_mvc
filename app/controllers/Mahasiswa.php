<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = "Dafftar Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/index', $data);
        $this->views('templates/footer');
    }
}