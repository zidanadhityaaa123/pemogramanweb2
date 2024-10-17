<?php

require_once "model/daftarbukumodel.php";

class bukucontroler{

    public function jalankan(){
        //menggunakan model
        $dataModel = new daftarbukumodel();

        //mengirim datamodel ke bukuview dan menampilkannya
        include "view/bukuview.php";

        
    }
}