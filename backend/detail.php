<?php
include("database.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$student = mysqli_query($mysqli, $sql);