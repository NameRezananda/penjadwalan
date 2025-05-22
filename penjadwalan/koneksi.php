<?php
$con = mysqli_connect("localhost", "root", "", "penjadwalan");
// Check connection

if (mysqli_connect_errno()) {
    echo "gagal koneksi".mysqli_connect_error();
    exit();

}



?>