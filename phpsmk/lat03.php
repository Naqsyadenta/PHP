<?php 

   

//function menampilkan
    function belajar() {
        echo "Saya Belajar PHP";
    }

    belajar();

    echo '<br>';


//function menghitung luas dan bisa diganti angka didalam kurung
    function luaspersegi($p = 5, $l = 3) {
        $luas = $p * $l;

        echo $luas;
    }

    luaspersegi();
    
    echo '<br>';

    luaspersegi(100,3);

    echo '<br>';

//function menghitung dengan return dan bisa dikalikan kembali
    function luas($p = 5, $l = 3) {
        $luas = $p * $l;

        return $luas;
    }

    echo luas (100, 3) * 5;

    echo '<br>';

    echo luas () * 5;

//function return
    function output() {
        return "belajar function";
    }

    echo '<h1>' . output() . '</h1>';

?>