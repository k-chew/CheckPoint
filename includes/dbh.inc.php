<?php

$servername = "sql3.freesqldatabase.com";
$dBUsername = "sql3338079";
$dBPassword = "ADqISnXFyu";
$dBName = "sql3338079";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}