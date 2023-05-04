<!DOCTYPE html>
<!-- Assign-04-HTML-BurritoOrder -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Burrito order">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!--Link to CSS file-->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!--Title-->
  	<title>Noah's Burritos</title>
  
  </head>
  <body>
      
    <!--JavaScript-->
  	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  	<script src="./js/script.js"></script>

    <h1><b>Noah's Burritos</b></h1>
   
    <img src="./images/burrito.png" alt="burrito" height="230" width="300">
    <img src="./images/logoburrito.png" alt="burritologo" height="230" width="300">
    <!--Mission statement-->
    <p>Here at Noah's Burritos, everything is made with the finest quality, made ethically and a a reasonable price. We want to establish a meaningful connection with our customers and we've been doing it for over 35 years.</p>
    <br>
    <!-- Enter order -->
    <h3><b>Put in your order:</b></h3>

    <!-- Choose your size of burrito-->
    <h6><b>Pick your burrito size:</b></h6>
    <form action="./results.php" method="post" target="results">
      <label for="size">Choose a size:</label>
      <select name="size" id="size">
        <option value="small">Small - 8.99 $</option>
        <option value="medium">Medium - 10,99 $</option>
        <option value="large">Large - 12.99 $</option>
      </select>
      <br>

    <!-- Choose your toppings-->
    <h6><b>Pick your burrito toppings (0.99 $ each):</b></h6>
      <input type="checkbox" id="extra-cheese" name="extra cheese" value="extra-cheese">
      <label for="extra cheese"> Extra cheese</label>
      <br>
      <input type="checkbox" id="extra-guacamole" name="extra guacamole" value="extra-guacamole">
      <label for="extra guacamole"> Extra guacamole</label>
      <br>
      <input type="checkbox" id="extra-salsa" name="extra salsa" value="extra-salsa">
      <label for="extra salsa"> Extra salsa</label>
      <br>
      <input type="checkbox" id="bacon" name="bacon" value="bacon">
      <label for="bacon"> Bacon</label>
      <br>
      <input type="checkbox" id="extra-tomato" name="extra tomato" value="extra-tomato">
      <label for="extra tomato"> Extra tomato</label>
      <br>
      <input type="checkbox" id="extra-lettuce" name="extra lettuce" value="extra-lettuce">
      <label for="extra lettuce"> Extra lettuce</label>
    
    <!-- select sides-->
    <h6><b>Choose your sides:</b></h6>
      <input type="checkbox" id="cookie" name="cookie" value="cookie">
      <label for="cookie"> Cookie - 1.99 $</label><br>
      <input type="checkbox" id="chips" name="chips" value="chips">
      <label for="chips"> Chips - 1.99 $</label>
      <br>

    <!-- select drink-->
    <h6><b>Choose your drink size:</b></h6>
      <label for="drink">Choose your drink size:</label>
      <select name="drink" id="drink">
        <option value="large-drink">Large drink - 3.49 $</option>
        <option value="small-drink">Small drink - 2.49 $</option>
      </select>
      <br>
      <br>
      <br>
      <input type="submit" value="Order!">
    </form>
      
    <!-- iframe for the results to show on the web page. -->
		<iframe id="user-total" name="user-total">			
			"Your subtotal is $" + $subtotal + ", your tax is $" + tax.toFixed(2) + " and your total is $" + (subtotal + tax).toFixed(2) + ". Thank you for ordering at Noah's Burritos! It will be ready in about 20 minutes."
	  </iframe>
  </body>
</html>