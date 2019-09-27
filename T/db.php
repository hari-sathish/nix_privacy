<?php

$conn = mysqli_connect("localhost", "root", "Password1234#@","users");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>