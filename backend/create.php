<?php

include("database.php");

$name = htmlspecialchars($_POST['name']);
$class = htmlspecialchars($_POST['class']);
$age = htmlspecialchars($_POST['age']);
$major = htmlspecialchars($_POST['major']);
$keterangan = htmlspecialchars($_POST['keterangan']);


$sql = "INSERT INTO students(name, class, age, major, keterangan) VALUES
 ('$name', '$class', '$age', '$major', '$keterangan')";

if($mysqli->query($sql)) {
    header("location: http://localhost/siswa-df");

    die();
}
echo "ERROR: " . $sql . "<br/>" . $mysqli->error;
$mysqli->close();