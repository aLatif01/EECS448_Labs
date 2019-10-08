<?php
$a1 = $_POST["whatClass"];
$a2 = $_POST["schoolName"];
$a3 = $_POST["mammal"];
$a4 = $_POST["prof"];
$a5 = $_POST["word"];
$answersCorrect = 0;

if($a1 == "EECS268")
{
  echo "<br>Question 1: What class is this?<br>";
  echo "You answered: $a1<br>";
  echo "Correct Answer: EECS448<br>";
}
else if($a1 == "EECS210")
{
  echo "<br>Question 1: What class is this?<br>";
  echo "You answered: $a1<br>";
  echo "Correct Answer: EECS448<br>";
}
else if($a1 == "EECS388")
{
  echo "<br>Question 1: What class is this?<br>";
  echo "You answered: $a1<br>";
  echo "Correct Answer: EECS448<br>";
}
else if($a1 == "EECS448")
{
  echo "<br>Question 1: What class is this?<br>";
  echo "You answered: $a1<br>";
  echo "Correct Answer: EECS448<br>";
  $answersCorrect += 1;
}

//-----------------------------------------------------------------//

if($a2 == "MIT")
{
  echo "<br>Question 2:What school is this?<br>";
  echo "You answered: $a2<br>";
  echo "Correct Answer: KU<br>";
}
else if($a2 == "JCCC")
{
  echo "<br>Question 2:What school is this?<br>";
  echo "You answered: $a2<br>";
  echo "Correct Answer: KU<br>";
}
else if($a2 == "KU")
{
  echo "<br>Question 2:What school is this?<br>";
  echo "You answered: $a2<br>";
  echo "Correct Answer: KU<br>";
  $answersCorrect+=1;
}
else if($a2 == "KUMC")
{
  echo "<br>Question 2:What school is this?<br>";
  echo "You answered: $a2<br>";
  echo "Correct Answer: KU<br>";
}

//-----------------------------------------------------------------//

if($a3 == "Monkey")
{
  echo "<br>Question 3: What mammal are you?<br>";
  echo "You answered: $a3<br>";
  echo "Correct Answer: Human<br>";
}
else if($a3 == "Whale")
{
  echo "<br>Question 3: What mammal are you?<br>";
  echo "You answered: $a3<br>";
  echo "Correct Answer: Human<br>";
}
else if($a3 == "Horse")
{
  echo "<br>Question 3: What mammal are you?<br>";
  echo "You answered: $a3<br>";
  echo "Correct Answer: Human<br>";
}
else if($a3 == "Human")
{
  echo "<br>Question 3: What mammal are you?<br>";
  echo "You answered: $a3<br>";
  echo "Correct Answer: Human<br>";
  $answersCorrect += 1;
}

//-----------------------------------------------------------------//

if($a4 == "Yung")
{
  echo "<br>Question 4: What is the last name of EECS 448's professor?<br>";
  echo "You answered: $a4<br>";
  echo "Correct Answer: Gibbons<br>";
}
else if($a4 == "Gibbons")
{
  echo "<br>Question 4: What is the last name of EECS 448's professor?<br>";
  echo "You answered: $a4<br>";
  echo "Correct Answer: Gibbons<br>";
  $answersCorrect+=1;
}
else if($a4 == "Brennan")
{
  echo "<br>Question 4: What is the last name of EECS 448's professor?<br>";
  echo "You answered: $a4<br>";
  echo "Correct Answer: Gibbons<br>";
}
else if($a4 == "Miller")
{
  echo "<br>Question 4: What is the last name of EECS 448's professor?<br>";
  echo "You answered: $a4<br>";
  echo "Correct Answer: Gibbons<br>";
}

//-----------------------------------------------------------------//

if($a5 == "lhsdfb")
{
  echo "<br>Question 5: Which one is an english word?<br>";
  echo "You answered: $a5<br>";
  echo "Correct Answer: Quiz<br>";
}
else if($a5 == "oajiaji")
{
  echo "<br>Question 5: Which one is an english word?<br>";
  echo "You answered: $a5<br>";
  echo "Correct Answer: Quiz<br>";
}
else if($a5 == "ooooooooo")
{
  echo "<br>Question 5: Which one is an english word?<br>";
  echo "You answered: $a5<br>";
  echo "Correct Answer: Quiz<br>";
}
else if($a5 == "Quiz")
{
  echo "<br>Question 5: Which one is an english word?<br>";
  echo "You answered: $a5<br>";
  echo "Correct Answer: Quiz<br>";
  $answersCorrect+=1;
}

echo "You got $answersCorrect right";
?>
