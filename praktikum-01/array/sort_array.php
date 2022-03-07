<?php 
    //Array buah
    $array_buah = [
        'p' => 'Pisang', 
        'j' => 'Jeruk', 
        'a' => 'Apel', 
        'm' => 'Mangga'
    ];

    //Menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key.' - '.$value.'</li>';
    }
    echo '</ol>';

    echo '<hr>';
    echo 'Menampilkan dengan sort array';
    sort($array_buah);

    //Menampilkan array dengan foreach list
    echo '<ol>';
    foreach ($array_buah as $key => $value) {
        echo '<li>'.$key.' - '.$value.'</li>';
    }
    echo '</ol>';


?>