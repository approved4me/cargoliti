<?php

$db_host = 'localhost';
$db_name = 'cargoliti';
$db_user = 'root';
$db_password = '';

try {
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
