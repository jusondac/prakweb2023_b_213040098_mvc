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

    public function tambah(){
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            header('Location: '.BASEURL.'/Mahasiswa');
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            exit;
        } else {
            header('Location: '.BASEURL.'/Mahasiswa');
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        }
    }

    public function getubah() {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah() {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } 
    }
}