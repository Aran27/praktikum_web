<?php
        $db = mysqli_connect("localhost", "root", "", "praktikum_9");

        function query($q){
            global $db;
            $data = mysqli_query($db, $q);
            $karyawan = [];
            while( $ky = mysqli_fetch_assoc($data) ) {
                $karyawan[] = $ky;
            }
            return $karyawan;
        }

        function add($data, $id){
            global $db;

            $id = count($id) + 1;
            $nama = $data["nama"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];
            
            $q = "INSERT INTO karyawan
                    VALUES
                    ('$id', '$nama', '$email', '$address', '$gender', '$position', '$status')
                ";
            mysqli_query($db, $q);
            return mysqli_affected_rows($db);
        }

        function del($id){
            global $db;
            mysqli_query($db, "DELETE FROM karyawan WHERE id = $id");
            return mysqli_affected_rows($db);
        }
?>