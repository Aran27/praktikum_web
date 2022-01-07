<?php 
    require 'db.php';
    $karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Daftar Karyawan</h1>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" class="show">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php foreach($karyawan as $ky) : ?>
        <tr>
            <td class="c"><?= $ky["id"] ?></td>
            <td><?= $ky["name"] ?></td>
            <td><?= $ky["email"] ?></td>
            <td><?= $ky["address"] ?></td>
            <td><?= $ky["gender"] ?></td>
            <td><?= $ky["position"] ?></td>
            <td class="c"><?= $ky["status"] ?></td>
            <td class="c"><a href="del.php?id=<?= $ky["id"]; ?>" style="color: white;">Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <button onclick="location.href = 'add.php'" class="ex">Tambah Data</button>
</body>
</html>