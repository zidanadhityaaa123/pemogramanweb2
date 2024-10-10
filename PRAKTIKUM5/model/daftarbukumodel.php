<?php

require_once "buku.php";

class daftarbukumodel{

public function getData(){
    $daftar_buku = array(
        new Buku('Belajar pemograman web', 'robert t.', 'informatika', '2024'),
        new Buku('matematika diskrit', 'rinaldi m.', 'andi publisher', '2017'),
        new Buku('kalkulus', 'emely s.', 'airlangga', '2024'),
        new Buku('metodologi penelitian', 'james w.', 'uin publisher', '2018'),
    );

    return $daftar_buku;
}

public function getKolomTabel(){
    $kolom_tabel = array(
        'nomor', 'judul', 'pengarang', 'penerbit', 'tahun'
    );

    return $kolom_tabel;
}


}