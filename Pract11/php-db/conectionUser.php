<?php
    $server="127.0.0.1";
    $usuario="root";
    $clave="";
    $base="4ap_instituto";
    $conection = new PDO("mysql:dbname=$base;host=$server", "$usuario","$clave", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>