<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';

$movie_id = $_GET['id'];
$action = $_GET['action'];

if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM movie WHERE id = ".$movie_id);

if($result){

  if($obj = $result->fetch_object()) {
    switch($action) {
      case "add":
      if($_SESSION['cart'][$movie_id]+1 <= $obj->qty)
        $_SESSION['cart'][$movie_id]++;
      break;
      case "remove":
      $_SESSION['cart'][$movie_id]--;
      if($_SESSION['cart'][$movie_id] == 0)
        unset($_SESSION['cart'][$movie_id]);
        break;
    }
  }
}
header("location:cart.php");
?>