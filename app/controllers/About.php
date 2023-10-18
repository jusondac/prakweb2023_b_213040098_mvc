<?php

class About {
    public function index($nama = "Rejka", $pekerjaan="Ruby on Rails developer") {
        echo "Halo nama saya $nama, Saya seorang $pekerjaan";
    }
    public function page() {
        echo 'About/Page';
    }
}