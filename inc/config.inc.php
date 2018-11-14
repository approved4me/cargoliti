<?php

$db_host = 'localhost';
$db_name = 'cargoliti';
$db_user = 'root';
$db_password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

try {
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password, $options);
echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
