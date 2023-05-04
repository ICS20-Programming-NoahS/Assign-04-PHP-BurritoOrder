<?php

  const TAX = 0.13;

  // Get the size of the burrito
  $smallSize = floatval($_POST["small"]);
  $mediumSize = floatval($_POST["medium"]);
  $largeSize = floatval($_POST["large"]);
  
  $selectSize = floatval($_POST["size"]);
 $selectedSize = $selectSize.options[$selectSize.$selectedIndex];
  
  // If user orders a small burrito
  if ($selectedSize == "small") {
    $smallSize = 8.99;
    $mediumSize = 0;
    $largeSize = 0;
    $size = $smallSize;
  }
  
  // If user orders a medium burrito
  else if ($selectedSize == "medium") {
    $smallSize = 0;
    $mediumSize = 10.99;
    $largeSize = 0;
    $size = $mediumSize;
  }
  
  // If user orders a large burrito
  else {
    $smallSize = 0;
    $mediumSize = 0;
    $largeSize = 12.99;
    $size = $largeSize;
  }
  
  // Get the toppings
  $extraCheese = floatval($_POST["extra-cheese"]).checked;
  $extraGuacamole = floatval($_POST["extra-guacamole"]).checked;
  $extraSalsa = floatval($_POST["extra-salsa"]).checked;
  $bacon = floatval($_POST["bacon"]).checked;
  $extraTomato = floatval($_POST["extra-tomato"]).checked;
  $extraLettuce= floatval($_POST["extra-lettuce"]).checked;


  // Formula for the price of the toppings
  $toppings = $extraCheese + $extraGuacamole + $extraSalsa + $bacon + $extraTomato + $extraLettuce;
  
  // if user selects extra cheese
  if ($extraCheese != 0) {
    $extraCheese = 0.99;
  } 
  
  else {
    $extraCheese = 0;
  }
  
  // if user selects extra guacamole
  if ($extraGuacamole != 0) {
    $extraGuacamole = 0.99;
  }
  
  else {
    $extraGuacamole = 0;
  }
  
  // if user selects extra salsa
  if ($extraSalsa != 0) {
    $extraSalsa = 0.99;
  }
  
  else {
    $extraSalsa = 0;
  }

  // if user selects bacon
  if ($bacon != 0) {
    $bacon = 0.99;
  } 
  
  else {
    $bacon = 0;
  }

  // if user selects extra tomato
  if (extraTomato != 0) {
    $extraTomato = 0.99;
  } 
  
  else {
    $extraTomato = 0;
  }

  // if user selects extra lettuce
  if ($extraLettuce != 0) {
    $extraLettuce = 0.99;
  } 
  
  else {
    $extraLettuce = 0;
  }
  
  // Get sides
  // If user orders chips
  if floatval($_POST["chips"]);.checked {
    $chips = 1.99;
  }
  
  else {
    $chips = 0;
  }

  // If user orders a cookie
  if floatval($_POST["cookie"]).checked; {
    $cookie = 1.99;
  }
  
  else {
    $cookie = 0;
  }

  // Formula for the price of the sides
  $sides = $chips + $cookie;
  
  // Get drink size
  $selectDrink = document.getElementById("drink");
  $drinkSize = $selectDrink.options[$selectDrink.selectedIndex].value;

  // If user orders a small drink
  let $drink;
  if ($drinkSize == "small-drink") {
    $drink = 2.49;
  }
    
  // If user orders a large drink
  else {
    $drink = 3.49;
  }
  
  // Formulas to find the subtotal and tax
  $subtotal = $toppings + $size + $sides + $drink;
  $tax = $subtotal * TAX;
  $total = $subtotal + $tax
}
    echo "Your subtotal is $" + number_format($subtotal, 2) + ", your tax is $" + number_format($tax, 2) + ", your tax is $"  + number_format($total, 2) + ". Thank you for ordering at Noah's Burritos! It will be ready in about 20 minutes." 
      
?>
