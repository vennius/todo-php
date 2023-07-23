<?php

$conn = mysqli_connect("127.0.0.1", "root", "root", "todo");

function query($query){
  global $conn;
  $rows = [];
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

$data = query("SELECT * FROM list");
if(isset($_POST["add"])){
  $activity = $_POST["activity"];
  // menambahkan activity ke database
  mysqli_query($conn, "INSERT INTO list values (0, '$activity')");
  $data = query("SELECT * FROM list");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo List PHP</title>
</head>
<body>
  
  <form action="" method="post">
    <input type="text" name="activity" autocomplete="off">
    <button type="submit" name="add">ADD</button>
  </form>
  
  <ul>
    <?foreach($data as $act):?>
      <li><?= $act["activity"] ?>
      <a href="hapus.php?id=<?= $act["id"] ?>">Hapus</a></li>
    <?endforeach;?>
  </ul>
  
</body>
</html>