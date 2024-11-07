<?php

require_once "controler/bukucontroler.php";

$aplikasi = new BukuController();
// $aplikasi->jalankan();

// membaca url
$request = $_SERVER["REQUEST_URI"];
$request = parse_url($request, PHP_URL_PATH);

// mengarahkan request
switch ($request) {
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/simpan':
        $aplikasi->simpanBuku();
        break;
    case '/index.php/hapus':
        $aplikasi->hapusBuku();
        break;
    case '/index.php/edit':
        $aplikasi->editBuku();
        break;
    case '/index.php/update':
        $aplikasi->updateBuku();
        break;
}