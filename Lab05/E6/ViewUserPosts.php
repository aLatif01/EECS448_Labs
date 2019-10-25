<?php
$mysqli =  new mysqli("mysql.eecs.ku.edu", "alatif01", "Eev3seic", "alatif01");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["user"];


if($user == "")
{
  //should only reach here if drop down list is empty
  echo("There are no users registered in this data base");
  exit();
}

$query = "SELECT content from Posts WHERE author_id = '$user'";
$results = $mysqli->query($query);

if($results->num_rows == 0)
{
  echo("No posts were found");
  exit();
}

echo("<h4>Posts:</h4>");
echo("<table>");
while($row = $results->fetch_assoc()) {
  $post = $row["content"];
  echo("<tr><td>" .$post. "</tr></td>");
}
echo("</table>");

$mysqli->close();
?>
