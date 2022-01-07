<?php

require 'db.php';

$id = $_GET["id"];

if( del($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'page.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('E R R O R !');
            document.location.href = 'page.php';
        </script>
    ";
}
?>