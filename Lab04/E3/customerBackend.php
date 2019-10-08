<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

  $username = $_POST["email"];
  $password = $_POST["password"];
  $iPhones = $_POST["iPhone_99"];
  $Galaxys = $_POST["Galaxy"];
  $Nokias = $_POST["Nokia"];
  $shippingOption = $_POST["shippingMethod"];

  $iPhoneCost = $iPhones * 2;
  $GalaxyCost = $Galaxys * 5;
  $NokiaCost = $Nokias * 10;
  $shippingCost = 0;
  $totalCost = 0;

  if($shippingOption == "0")
  {
    $shippingCost = 0;
    $totalCost = $iPhoneCost + $GalaxyCost + $NokiaCost + $shippingCost;
    echo "<div align=center><br>Welcome to my store, $username<br>";
    echo "Your password is: $password<br><br>";
    echo "Here is your Receipt:<br><br>";
    echo "You purchased $iPhones iPhones for $2.00 each.<br>";
    echo "You purchased $Galaxys Galaxys $5.00 each.<br>";
    echo "You purchased $Nokias Nokias for $10.00 each.<br>";
    echo "You purchased Seven Day Shipping at a rate of $$shippingCost.00<br><br>";
    echo "Your Total Cost is $$totalCost.00<br></div>";
  }
  else if($shippingOption == "1")
  {
    $shippingCost = 5;
    $totalCost = $iPhoneCost + $GalaxyCost + $NokiaCost + $shippingCost;
    echo "<div align=center><br>Welcome to my store, $username<br>";
    echo "Your password is: $password<br><br>";
    echo "Here is your Receipt:<br><br>";
    echo "You purchased $iPhones iPhones for $2.00 each.<br>";
    echo "You purchased $Galaxys Galaxys $5.00 each.<br>";
    echo "You purchased $Nokias Nokias for $10.00 each.<br>";
    echo "You purchased 3-Day Shipping at a rate of $$shippingCost.00<br><br>";
    echo "Your Total Cost is $$totalCost.00<br></div>";
  }
  else if($shippingOption == "2")
  {
    $shippingCost = 50;
    $totalCost = $iPhoneCost + $GalaxyCost + $NokiaCost + $shippingCost;
    echo "<div align=center><br>Welcome to my store, $username<br>";
    echo "Your password is: $password<br><br>";
    echo "Here is your Receipt:<br><br>";
    echo "You purchased $iPhones iPhones for $2.00 each.<br>";
    echo "You purchased $Galaxys Galaxys $5.00 each.<br>";
    echo "You purchased $Nokias Nokias for $10.00 each.<br>";
    echo "You purchased Overnight Shipping at a rate of $$shippingCost.00<br><br>";
    echo "Your Total Cost is $$totalCost.00<br></div>";
  }
?>
