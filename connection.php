<?php

//connect database
$connect = mysqli_connect('localhost', 'admin', 'whoami2002', 'Latihan');

//pengecekan connect database
// if ($connect) {
//     echo "Database success added";
// } else {
//     echo "Database cannot added";
// }

// gagal koneksi
if (!$connect)
    exit("Database connection failed");

// <div style=position : absolute; top:0; bottom:0; left:0; right:0; background-color:black; font-size:100px; color:red; text-align:center;>HAHAHAHAHA ANDA TELAH DI HACK</div>
