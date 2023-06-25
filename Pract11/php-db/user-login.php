<?php
require("conectionUser.php");
//conection
//Recuperacion de datos
$user = $_POST['NameUser'];
$password = $_POST['Password'];

$sql = $conection->prepare("SELECT NameUser,Password FROM users WHERE NameUser=:NameUser and Password=:Password");
$sql->execute(array("NameUser" => $user, "Password" => $password));
if ($sql->rowCount() == 1) {
    session_start();
    $_SESSION['NameUser'] = $user;
    echo "correcta";
} else {
    echo "incorrecta";
}
?>