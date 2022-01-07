<?php
    require 'db.php';
    $ky = query("SELECT * FROM karyawan");

    if( isset($_POST["submit"])){
        if(add($_POST, $ky) > 0) {
            echo 
            '<script>
                alert("Data Berhasil Disimpan");
                document.location.href = "page.php";
            </script>';
        } else {
            echo 
            "<script>
                alert('Data Berhasil Disimpan');
                document.location.href = 'page.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table style="padding-right: 25px;">
        <td>
        <h2 style="text-align: center;">Tambah Data</h2>
            <form action="" method="POST">
                <ul style="list-style-type:none;">
                    <label for="nim">Nama</label>
                    <li>
                        <input type="text" name="nama">
                    </li><br>
                    <label for="nama">Email</label>
                    <li>
                        <input type="text" name="email">
                    </li><br>
                    <label for="jurusan">Address</label>
                    <li>
                        <input type="text" name="address">
                    </li><br>
                    <label for="gender">Gender</label>
                    <li>
                        <select name="gender">
                            <option selected>Male</option>
                            <option>Female</option>
                        </select>
                    </li><br>
                    <label for="email">Position</label>
                    <li>
                        <input type="text" name="position">
                    </li><br>
                    <label for="status">Status</label>
                    <li>
                        <select name="status">
                            <option selected>Fulltime</option>
                            <option>Parttime</option>
                        </select>
                    </li><br>
                    <input type="button" value="Return" onclick="location.href = 'page.php'">
                    <button type="submit" name="submit">Submit</button>
                </ul>
            </form>
        </td>
    </table>
</body>
</html>