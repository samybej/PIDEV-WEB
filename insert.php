<?php
require_once('connect.php');

$path=$_GET['path'];
$sql = "INSERT INTO images (path) VALUES ( '$path')";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>