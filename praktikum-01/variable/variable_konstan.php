<?php 
//definisikan konstanta
define('PHI', 3.14);
define('DBNAME', 'db_mahasiswa');
define('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'aziz');

//deklarasi variabel
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

//menampilkan hasil
echo 'Luas Lingkaran : '.$luas.'<br>';
echo 'Keliling Lingkaran : '.$keliling;

echo '<hr>';

//menampilkan konstanta
echo 'Nama Database : '.DBNAME.'<br>';
echo 'Server Database : '.DBSERVER.'<br>';
echo 'Nama User Database : '.DBUSER.'<br>';
echo 'Password Database : '.DBPASS.'<br>';

?>