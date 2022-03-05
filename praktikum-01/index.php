<?php
// membuat variabel
//$nameVaribel = nilaiVariabel;
$name = "Salma Sajidatu Dzakiroh";
$age = 20;
$weight = 45.5;

// menampilkan variabel
// echo "isi yang ingin ditampilkan";
echo "Name : " . $name;
echo "<br>Age : $age";
echo "<br>Weight : $weight";

// menampilkan variabel sistem
echo "<br>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variabel constant : variabel yang nilainya tetap, tidak bisa di ubah.
// Define('NamaVariabel', 'nilaiVariabel');
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
$kll = 2 * PHI * $r;
echo "<br>Luas Lingkaran : $luas";
echo "<br>Keliling Lingkaran : $kll";


Define('DBNAME', 'db_covid');
echo "<br>Name database : " . DBNAME;