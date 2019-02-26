<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Calculator!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <h1>Calculator</h1>
  <hr>
  <form action="calc.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form>

  <?php 
  echo $_GET["num1"] + $_GET["num2"];
  ?>

</body>

</html>