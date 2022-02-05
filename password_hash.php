<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password_hash</title>
</head>
<body>
  <?php
  if(isset($_POST['password']))
  {
      $password = $_POST['password'];
      $hash = password_hash($password, PASSWORD_DEFAULT);
      echo "The hash for the password " . $password . " is " . $hash . "<br>";
  }
  ?>
  <form action="password_hash.php" method="post">
      Enter the password to hash
      <input type="text" name="password" id="password">
      <br>
      <input type="submit" value="submit">
</form>  
</body>
</html>