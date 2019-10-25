<?php

$mysqli =  new mysqli("mysql.eecs.ku.edu", "alatif01", "Eev3seic", "alatif01");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$delete = $_POST["checkbox"];

if($delete)
{
  foreach($delete as $value)
  {
    $query = "DELETE FROM Posts WHERE post_id = '$value'";
    if($mysqli->query($query) === TRUE)
    {
      echo "Post id: " .$value. " has been deleted";
      echo "<br>";
    }
    else
    {
      echo "ERROR: " .$sql. "<br>" .$mysqli->error;
    }
  }
}
else {
  echo "ERROR: No checkbox was selected";
}


$mysqli->close();
 ?>
