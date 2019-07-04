<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>I CINEMA</title>
	<link rel="stylesheet" type="text/css" href="inicss.css">
</head>
<body bgcolor="mistyrose">
<div class="nav">
  <a href="index.php">Now Playing</a>
  <a href="soon.php">Coming Soon</a>
  <a href="cart.php">Booking List</a>
</div>
  <font color="indianred">
    <br>
  <h2 align="center">SUCCESS!!</h2>
  <h3 align="center">YOU ALREADY BOOKING TICKET</h3>
  </font>
</body>
</html>
