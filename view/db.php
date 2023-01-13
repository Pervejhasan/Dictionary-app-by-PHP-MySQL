<?php

$servername="localhost";
$userName="pervej";
$password="12345";
$db="word_meaning";

$conn = new  mysqli($servername,$userName, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>