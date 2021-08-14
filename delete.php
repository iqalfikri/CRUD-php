<?php

//add file database
include('connection.php');

//cukup ambil data "id" saja 
$id = $_GET['id'];

    
//insert ke database
$delete = mysqli_query($connect, "DELETE FROM Karyawan WHERE id='$id'");

//pengecekan kondisi
if ($delete) {
    //akan diarahkan ke list.php
    header('Location: list.php');
} else {
    echo"Failed to delete database";
}
