<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Password Demo</title>
</head>

<body>
  <form action="password.php" method="post">
    New Password: <input type="password" name="password">
    <br>
    <input type="submit">
    <br>
  </form>

  <?php
  $password = $_POST["password"];
   echo $password;
  ?>
</body>

</html>