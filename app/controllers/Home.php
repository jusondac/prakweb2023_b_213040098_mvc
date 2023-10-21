<?php

class Home extends Controller {
    public function index() {
        // echo "home/index";
        $data['judul'] = 'Home';
        $this->views('templates/header', $data);
        $this->views('home/index');
        $this->views('templates/footer');
    }
}