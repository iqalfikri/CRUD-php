<?php

//add file database
include('connection.php');

//ambil data "edit.php"
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//insert ke database
$update = mysqli_query($connect, "UPDATE Karyawan SET nama='$nama', alamat='$alamat',
umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");

//pengecekan kondisi
if ($update) {
    //akan diarahkan ke list.php
    header('Location: list.php');
} else {
    echo"Failed to edit database";
}

?>