<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
</head>
<body>
  <?php
  // Variables
    $charName = "Gaba";
    $charDob = "March 3, 1987";
    echo "<h1>Hello World!</h1>";
    echo "<hr>";
    echo "<p>Hello, $charName! 😅</p>";
    echo "<p>Your birthday is $charDob</p>"; 
    // Data Types
    // 1. Text/String
    // 2. Numbers
    // 3. Boolean    
  ?>
  <?php
    // echo $charName;
    // echo "<br/>";
    $phrase = "What the PHP";
    $newPhrase = $phrase;
    // echo strrev($newPhrase);
    // echo strtoupper($phrase);  
  ?>

  
    <form action="site.php" method="get">
    Name: <input type="text" name="name"><br>
    Favorite Food: <input type="text" name="favfood"><br>
    <input type="submit">
    </form>
    <br>
    Welcome, <?php echo $_GET["name"]; ?>!
    <br>
    Your favorite food is <?php echo $_GET["favfood"]; ?>.
  
</body>
</html>