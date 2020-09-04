<?php 

    //pengujian 1
    $tanggal = -1;

    $hasil = $tanggal < 32;

    if ($hasil) {
      echo 'Benar';
    }else {
        echo 'Salah';
    }

    echo '<br>';

    //pengujian 2
    if ($tanggal < 32) {
        if ($tanggal > 0) {
           echo 'Benar';
        }else {
            echo 'Salah';
        }
    }else {
        echo 'Salah';
    }

    echo '<br>';

    //pengujian 3
    $nilai = 5;

    if ($nilai <= 100) {
       if ($nilai >= 0) {
           echo 'Nilai Benar';
       }else {
           echo 'Nilai Salah';
       }
    }else {
        echo 'Nilai Salah';
    }

    echo '<br>';

    //pengujian 4
    if ($nilai >= 0 && $nilai <= 100) {
       echo 'Nilai Benar';
    }else {
        echo 'Nilai Salah';
    }

    echo '<br>';

    //pengujian 5
    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Nilai Salah';
     }else {
         echo 'Nilai Benar';
     }
?>