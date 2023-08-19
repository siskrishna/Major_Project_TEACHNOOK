<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$msg = $_POST["msg"];
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
$sql = "INSERT INTO databse_table(First_name, Last_name, Email, Mobile,message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}','{$msg}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: https://majorrproject.siskrishna.repl.co/");
mysqli_close($conn);
?>
