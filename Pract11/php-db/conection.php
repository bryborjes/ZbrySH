<?php
$host = "127.0.0.1";$user = "root";$pass = "";
//conection
$conection = mysqli_connect($host, $user, $pass);
if (!$conection) {
    echo"<script>alert('No se pudo estableser comunicacion con SQL Server');</script>";
} else {
    echo('<br>');
    $datab = "4ap_instituto";
    $db = mysqli_select_db($conection, $datab);
    if (!$db) {
        echo "<script>alert('No se ha podido encontrar la Base de Datos</script>";
    } else {
    }
}
?>