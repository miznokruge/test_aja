<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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

