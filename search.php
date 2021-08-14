<?php

//koneksi ke database
include('connection.php');

//mengambil data'keyword'
$keyword = $_GET['keyword'];

//add queri ke database
$query = mysqli_query($connect,"SELECT * FROM Karyawan WHERE nama LIKE '%$keyword%'");
//simpan dalam bentuk array
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Database</title>
    <style>
    table,
    th,
    td {
        border: 1px solid #ddd;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 13px;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    a:link,
    a:visited {
        background-color: #f44336;
        color: white;
        padding: 3px 7px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: red;
    }

    </style>
</head>

<body>
    <center>
        <h2>Tabel Data Karyawan</h2>

        <form action="search.php" method="get">
            <input type="text" name="keyword" placeholder="Search" value="<?php echo $_GET['keyword']?>" />
            <button type="submit">Search</button>
        </form>
        <br>
        
        <table>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Manage</th>
            </tr>
            <?php foreach ($results as $key): ?>
            <tr>
                <td>
                    <center><?php echo $key['nama'];?></center>
                </td>
                <td>
                    <center><?php echo $key['alamat'];?></center>
                </td>
                <td>
                    <center><?php echo $key['umur'];?></center>
                </td>
                <td>
                    <center><?php echo $key['jenis_kelamin'];?></center>
                </td>
                <td>
                    <center>
                        <button onclick="document.location='edit.php?id=<?php echo $key['id'];?>'">
                            Edit
                        </button>
                        <a href="delete.php?id=<?php echo $key['id'];?>"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                    </center>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        </br>
        <button onclick="document.location='add.php'">Add Data</button>
        <br><br>
        <button onclick="document.location='list.php'">Back</button>
    </center>
</body>

</html>