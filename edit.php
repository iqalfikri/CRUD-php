<?php

//add file connection.php
include('connection.php');

//ambil id dengan $_GET
$id = $_GET['id'];

//add ke query
$query = mysqli_query($connect, "SELECT * FROM Karyawan WHERE id='$id' LIMIT 1");

//mengambil data dari query dan ubah ke array
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
</head>

<body>
    <center>
        <h2>Edit Data</h2>
        <form action="update.php" method="post">
            <!-- add id namun tidak perlu ditampilkan -->
            <input type="hidden" name="id" value="<?php echo $result[0]['id'];?>">

            <label><b>Nama</b></label><br>
            <input type="text" name="nama" value="<?php echo $result[0]['nama'];?>"/>
            <br><br>

            <label><b>Alamat</b></label><br>
            <textarea name="alamat"><?php echo $result[0]['alamat'];?></textarea>
            <br><br>

            <label><b>Umur</b></label><br>
            <input type="text" name="umur" value="<?php echo $result[0]['umur'];?>"/>
            <br><br>

            <label><b>Jenis Kelamin</b></label><br>
            <select name="jenis_kelamin">
                <option value="Pria" <?php echo ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : '';?>>
                    Pria
                </option>
                <option value="Wanita" <?php echo ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : '';?>>
                    Wanita
                </option>
            </select>
            <br><br>

            <button type="submit">Update Data</button>
        </form>
        <br>
        <button onclick="document.location='list.php'">Back</button>
    </center>
</body>

</html>
