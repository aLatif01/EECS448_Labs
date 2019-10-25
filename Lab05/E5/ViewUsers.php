<?php
$mysqli =  new mysqli("mysql.eecs.ku.edu", "alatif01", "Eev3seic", "alatif01");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$thisSQL = "SELECT * FROM Users";
$result = $mysqli->query($thisSQL);

if(($result->num_rows) > 0)
{
  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>" .$row["user_id"]. "</td></tr> <br>";
  }
}
else
{
  echo "0 results";
}

$mysqli->close();
 ?>
