<?php
include("database.php");

if (isset($_POST['id'])) {
$name = htmlspecialchars($_POST['name']);
$class = htmlspecialchars($_POST['class']);
$age = htmlspecialchars($_POST['age']);
$major = htmlspecialchars($_POST['major']);
$keterangan = htmlspecialchars($_POST['keterangan']);
$id = htmlspecialchars($_POST['id']);

$sql = "UPDATE students SET name='$name', class='$class', age='$age', major='$major', keterangan='$keterangan' WHERE id=$id";

if($mysqli->query($sql)){
    header("location: http://localhost/siswa-df");

    die();
}

}
die();
$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";

$student = mysqli_query($mysqli, $sql);

$mysqli->close();