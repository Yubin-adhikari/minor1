<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'appointment';

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn)
{
    echo "Could not connect to the database";
}