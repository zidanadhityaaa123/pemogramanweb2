<?php
    include "Orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
        <?php
        //proses instanisasi
        $mahasiswa = new Orang('Pak Vincent');

        //menggunakan setter dan getter
        $mahasiswa->setNama('Vincent');
        $mahasiswa->setTglLahir('2005-12-16');
        $mahasiswa->setAlamat('Kota Jambi');

        echo "<br>";
        echo "Data Mahasiswa". $mahasiswa->getNama(). "br";
        echo "Data Mahasiswa". $mahasiswa->getNama(). "<br>";
        echo "Nama : ". $mahasiswa->getNama() ."<br>";
        echo "Tgl Lahir : ". $mahasiswa->getTglLahir() ."<br>";
        echo "Alamat : ". $mahasiswa->getAlamat() ."<br>";

        //memanggil method
        $mahasiswa->ucapkanSalam();

        echo "<br>";
        $mahasiswa2 = new Orang('El Kecepatan');

        $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>