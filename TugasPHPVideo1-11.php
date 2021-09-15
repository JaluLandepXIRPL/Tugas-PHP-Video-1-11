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

       echo '<br>';
       echo '<br>';

       //if
       $poin = 50;

        if ($poin <=100 && $poin >=0 ){
            echo 'Nilai Benar';
        } else {
            echo 'Nilai Error';
        }
        echo '<br>';
        echo '<br>';

        //switch case
        $pilihan='symbol';

        switch ($pilihan){
            case 'angka';
            echo 'Ini Angka';
            break;

            case 'huruf';
            echo 'Ini Huruf';
            break;

            case 'symbol';
            echo 'Ini Symbol';
            break;

            default;
            echo'Error';
        }

        echo '<br>';
        echo '<br>';

        //loop
        
        for ($i=1 ; $i<=15 ; $i++){
            echo $i .' ';
        }
        echo '<br>';
        for ($i=50 ; $i>0 ; $i-=5){
            echo $i .' '.'<br>';
        }

        echo'<br>';

        //array

        $nama= array('Jalu','Ghifran','Kaido','Shanks');
        
        for ($aa=0 ;$aa<4 ;$aa++){
            echo $nama[$aa]. ' ';

        }
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $nm= array(
        'Jalu' =>'Bumi',
        'Ghifran'=> 'Mars',
        'Kaido'=> 'Pluto',
        'Shanks'=> 'Bulan');
            
        foreach($nm as $key =>$value){
            echo $key . ' Tinggal Di ' . $value . '<br><br>'; 
        }

        echo "<br>";
        

        //require_once

        require_once 'nav.php';









    



    

    

    




















?>