<?php


$conn = mysqli_connect("localhost","mytest","testtest","test");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected Database Successful";
echo '</br>';
?>