<?php

$mysqli = new mysqli("localhost", "root", "","daftar_siswa");


if ($mysqli -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  