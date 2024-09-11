<?php
include("database.php");

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if($mysqli->query($sql)) {
header("location: http://localhost/siswa-df");

die();
}
echo "ERROR: " . $sql . "<br/>" . $mysqli->error;
$mysqli->close();