<?php

$servername = "http://mysql-forms-mthomas-forms.44fs.preview.openshiftapps.com";
$username = "admin";
$password = "password";
$databasename = "forms";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
