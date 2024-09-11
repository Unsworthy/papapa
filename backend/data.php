<?php

include("database.php");
$students = [];

$sql = "SELECT * FROM students";

$students = mysqli_query($mysqli, $sql);

$mysqli->close();