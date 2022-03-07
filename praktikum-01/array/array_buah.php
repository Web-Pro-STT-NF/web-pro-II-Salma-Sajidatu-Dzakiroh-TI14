<?php
    //deklarasi array
    $array_buah = ['Pisang', 'Jeruk', 'Apel', 'Mangga'];

    //menampilkan array
    echo 'Menampilkan data array 0 => '.$array_buah[0].'<br>';

    //menampilkan jumlah array
    echo 'Menampilkan jumlah data array => '.count($array_buah).'<br>';

    echo '<hr>';
    //Menampilkan array dengan foreach
    foreach ($array_buah as $key => $value) {
        echo 'Menambahkan data array ke-'.$key.' => '.$value.'<br>';
    }
    echo '<hr>';

    //Menampilkan array dengan list
    echo '<ol>';
    foreach ($array_buah as $value) {
        echo '<li>'.$value.'</li>';
    }
    echo '</ol>';    
    
?>