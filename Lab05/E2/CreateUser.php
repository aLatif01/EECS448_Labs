<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "alatif01", "Eev3seic", "alatif01");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$newUsername = $_POST["newUsername"];
$query = "SELECT * FROM Users where user_id = '$newUsername'";
$result = $mysqli->query($query);

if($newUsername == NULL || $newUsername == "")
{
  printf("Enter a valid username");
}
else if(mysqli_num_rows($result) > 0)
{
  printf("This username has already been taken");
}
else
{
  $mysqli->query("INSERT INTO Users (user_id) VALUES ('$newUsername')");
  printf("Username was added successfully");
}
$mysqli->close();

 ?>
