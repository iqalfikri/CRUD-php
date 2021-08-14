<?php

//add file database
include('connection.php');

//ambil data "add.php"
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//insert ke database
$insert = mysqli_query($connect, "INSERT INTO Karyawan SET nama='$nama', alamat='$alamat',
umur='$umur', jenis_kelamin='$jenis_kelamin' ");

//pengecekan kondisi
if ($insert) {
    //akan diarahkan ke list.php
    header('Location: list.php');
} else {
    echo"Failed to input database";
}

?>