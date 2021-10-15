<?php
$hostName	= "localhost"; //nama hostname server, secara default kebanyakan hosting 
//online ataupun server apache dari xampp menggunakan "localhost"
$username	= "root"; //nama user dari server localhostnya, secara default/bawaan username akan
//berupa "root".
$password	= ""; //password user dari server localhostnya, secara default/bawaan password
//kosong, sehingga kita hanya perlu menuliskan "" yg berarti kosong.
$dbName		= "app-sekolah"; //nama database yang telah dibuat di phpmyadmin

$connect = mysqli_connect($hostName, $username, $password, $dbName);//$connect merupakan variable koneksi dgn fungsi adapter mysqli, variable ini lah yg akan mengkoneksikan file-file lain untuk terkoneksi dgn database
