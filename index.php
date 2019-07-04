<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
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
  <a class="active" href="index.php">Now Playing</a>
  <a href="soon.php">Coming Soon</a>
  <a href="cart.php">Booking List</a>
</div>
<div class="row" style="margin-top: 10px;">
	<font color="indianred">
    <h2 align="center">I CINEMA</h2>
    <h2 align="center">NOW PLAYING</h2>
		<br>
	<?php
	$i = 0;
	$movie_id = array();
    $movie_quantity = array();
	$result = $mysqli->query('SELECT * FROM movie');
	if ($result === FALSE){
		die (mysql_error());
	}
	if($result){
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->movie_title.'</h3></p>';
              echo '<img src="images/movie/'.$obj->image_name.'"/>';
              echo '<p><strong>Movie Code</strong>: '.$obj->movie_code.'</p>';
              echo '<p><strong>Price (Per Movie)</strong>: Rp.'.$obj->price.'.</p>';
              if($obj->qty > 0){
                echo '<p><a href="upcart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Booking List" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }
          }
          $_SESSION['movie_id'] = $movie_id;
          echo '</div>';
          echo '</div>';
          ?>

        </font>
        <footer>
        	<p style="text-align:center; font-size:0.8em;clear:both;">&copy; I CINEMA. All Rights Reserved.</p>
        </footer>
</div>
</body>
</html>