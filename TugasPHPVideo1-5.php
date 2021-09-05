<?php 

    echo 'Saya Belajar PHP';

    echo '<br>';

    $sekolah='SMKN 2 BUDURAN';
    $tempat='SIDOARJO';
    $angka='2020';

    echo '<br>';

    echo $sekolah.$tempat.($angka+1);

    echo '<br>';
    echo '<br>';

    //var_dump($sekolah);

    var_dump($angka+1);

    echo '<br>';
    echo '<br>';

    function kali($a=4,$b=5){
        $c=$a*$b;

         return $c;
    }

       echo kali(10,10);

    

    

    




















?>