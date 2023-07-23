<?php
$conn = mysqli_connect("127.0.0.1", "root", "root", "todo");

if(!isset($_GET["id"])){
  header("Location: index.php");
  exit;
}

$id = $_GET["id"];
// hapus data
mysqli_query($conn, "DELETE FROM list WHERE id = $id");

header("Location: index.php");

?>