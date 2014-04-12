<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'sekolah';
//step 1:koneksi ke server
$konek = mysqli_connect($host, $user, $pass) or die(mysql_error());  //mysql_connect =>true/false (bool)
if (!$konek) {
    echo 'koneksi ke server :' . $host . ' tidak dapat dilakukan';
    exit();
}
//step 2:koneksi ke database
$konek_db = mysqli_select_db($konek, $database);
if (!$konek_db) {
    echo 'koneksi ke database :' . $database . ' tidak dapat dilakukan';
    exit();
}
//step3 : query (insert, update, delete dll)
$perintah = "select*from vnilai";
$query = mysqli_query($konek, $perintah);
while ($hasil = mysqli_fetch_array($query)) {
    echo 'Nama mapel : ' . $hasil['nama_mata_pelajaran'];
    echo '|';
    echo 'Nilai : ' . $hasil['nilai'];
    echo '<br>';
    #start debug information
    //echo '<pre>';
    //print_r($hasil);
    //echo '</pre>';
    #end debug info
}