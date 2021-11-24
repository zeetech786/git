<?php

$server = 'webhosting-db';
$user = 'zeeshan';
$password = '294ba42325e3';
$dbname = 'zeeshan_php';

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}

$query = 'SELECT * FROM profile';

$result = mysqli_query($conn,$query);

