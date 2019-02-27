<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MadLibs</title>
</head>

<body>
  <h1>MADLIBS</h1>
  <hr>
  <form action="madlibs.php" method="get">
    Color: <input type="text" name="color">
    <br>
    Plural Noun: <input type="text" name="pluralNoun">
    <br>
    Food: <input type="text" name="food">
    <br>
    <input type="submit">
  </form>
  <?php
  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $food = $_GET["food"];
    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $food <br>";
  ?>
</body>

</html>