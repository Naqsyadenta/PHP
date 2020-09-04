<?php 

    //pengulangan dengan for tambah 1
    for ($i=1; $i <= 12 ; $i++) { 
    echo $i. ', ';
    }

    echo '<br>';

     //pengulangan dengan for tambah 2
     for ($i=1; $i <= 12 ; $i=$i+2) { 
        echo $i. ', ';
    }

    echo '<br>';
    
    //pengulangan dengan for kurang 1
    for ($i=12; $i >=1 ; $i--) { 
       echo $i. ', ';
    }

    echo '<br>';

    //pengulangan dengan for kurang 2
    for ($i=12; $i >=1 ; $i=$i-2) { 
        echo $i. ', ';
     }

     echo '<br>';

     //pengulangan menggunakan while
     $a=1;
     while ($a <= 10) {
        echo $a. ', ';

        $a++;
     }

     echo '<br>';

      //pengulangan menggunakan do while
      $a=1;
    do {
        echo $a. ', ';
        
        $a++;
    } while ($a <= 10);
?>