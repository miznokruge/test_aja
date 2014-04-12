<?php

require 'koneksi.php'; //
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
