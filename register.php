<?php

if(isset($_POST["register"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  if(empty($_POST["username"] || empty($_POST["password"])){
    $err = "Username/Password Harus Terisi!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  
  <?php if(isset($err)): ?>
    
  <?php endif; ?>
  
  <form action="" method="post">
  <ul>
    <li>
      <label for="username">Username:   </label>
      <input type="text" name="username" id="username">
    </li>
    <li>
      <label for="password">Password:   </label>
      <input type="text" name="password" id="password">
    </li>
    <li>
      <button type="register" name="register">Register</button>
    </li>
  </ul>
  </form>
  
</body>
</html>