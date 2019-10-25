<?php
$mysqli =  new mysqli("mysql.eecs.ku.edu", "alatif01", "Eev3seic", "alatif01");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$newPost = $_POST["newPost"];
$thisUser = $_POST["thisUser"];
$userExists = false;
$query = "SELECT * FROM Users where user_id = '$thisUser'";

if($result = $mysqli->query($query))
{
  if($row = $result->fetch_assoc())
  {
    printf("Username " .$thisUser. " exists <br>");
    $userExists = true;
  }
  else
  {
    printf("Username " .$thisUser. " does not exist");
  }

  $result->free();
}

if($userExists == true)
{
  if($newPost == "" || $newPost == NULL)
  {
    printf("Cannot create an empty post");
  }
  else
  {
    $query ="INSERT INTO Posts (content, author_id) VALUES ('$newPost', '$thisUser')";

    if($result = $mysqli->query($query))
    {
      printf("Post by " .$thisUser. " has been successfully posted");
    }
    $result->free();
  }
}

$mysqli->close();
?>
