<?php

$servername = "http://mysql-forms-mthomas-forms.44fs.preview.openshiftapps.com";
$username = "admin";
$password = "password";
$databasename = "forms";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to $databasename@$servername";
}
catch(PDOException $e)
{
    echo "Connection failed to $databasename@$servername: " . $e->getMessage();
}

?>
