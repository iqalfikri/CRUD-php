<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Database</title>
</head>

<body>
    <center>
        <h2>Masukkan Data</h2>
        <form action="insert.php" method="post">
            <label><b>Nama</b></label><br>
            <input type="text" name="nama" />
            <br><br>

            <label><b>Alamat</b></label><br>
            <textarea name="alamat"></textarea>
            <br><br>

            <label><b>Umur</b></label><br>
            <input type="text" name="umur" />
            <br><br>

            <label><b>Jenis Kelamin</b></label><br>
            <select name="jenis_kelamin">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <br><br>

            <button type="submit">Insert Data</button>
        </form>
        <br>
        <button onclick="document.location='list.php'">Back</button>
    </center>
</body>

</html>
