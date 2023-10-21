<?php

class About extends Controller {
  public function index($nama = "Rejka", $pekerjaan="Ruby on Rails developer", $umur=23) {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->views('templates/header', $data);
    $this->views('about/index', $data);
    $this->views('templates/footer');
  }
  public function page() {
    $this->views('templates/header');
    $this->views('about/page');
    $this->views('templates/footer');
    // echo "about/page";
  }
}