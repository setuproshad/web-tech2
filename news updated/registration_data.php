<?php
include("config.php");
$us = $_POST['username'];
$pass = $_POST['password'];

$sql = "insert into users(username,passwrod) values ('dfsdf','dfsfsd')";

$result = mysqli_query($conn, $sql);

var_dump($result);




?>