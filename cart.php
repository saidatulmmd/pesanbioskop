<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Welcome To Hotel X</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Hotel X Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
          window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
      <link href="inicss.css" rel="stylesheet" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="inicss.css">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      <!-- //font-awesome icons -->
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
   <!-- Navigation -->
<header>
  <div class="top-nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="button ok" href="index.php">Back to Homepage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
  </div>
</header>
  <div class="row" style="margin-top:10px;">
        <?php
          echo '<p><h3>Your Booking List</h3></p>';
          if(isset($_SESSION['cart'])) {
            $total = 0;
            echo '<table align="center">';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Movie</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price</th>';
            echo '<th>Showtime</th>';
            echo '<th>Name</th>';
            echo '<th>Handphone Number</th>';
            echo '<th>Seat</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $movie_id => $quantity) {
            $result = $mysqli->query("SELECT movie_code, movie_title, qty, price FROM movie WHERE id = ".$movie_id);
            if($result){
              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity;
                $total = $total + $cost;
                echo '<tr>';
                echo '<td>'.$obj->movie_code.'</td>';
                echo '<td>'.$obj->movie_title.'</td>';                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="upcart.php?action=add&id='.$movie_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="upcart.php?action=remove&id='.$movie_id.'">-</a></td>';
                echo '<td>Rp'.$cost.'.000</td>';
                echo '<td><select name="showtime">';
                echo '<option value="kosong"> </option>';
                echo '<option value="1"> 12.00 </option>';
                echo '<option value="2"> 13.45 </option>';
                echo '<option value="3"> 15.00 </option>';
                echo '<option value="4"> 17.00 </option>';
                echo '<option value="5"> 21.00 </option>';
                echo '</td>';
                echo '<td><input type="text" name="name" size="17"></td>';
                echo '<td><input type="text" name="nohp" size="17"></td>';
                echo '<td><button style="background-color: white; border-color: grey; width: 300px; heigth: 25px;">MOVIE SCREEN</button></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<th>';
                echo '<ol>';
                echo '<li class="row">';
                echo '<ol class="seats">';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="1A" />';
                echo '<label for="1A">1A</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="1B" />';
                echo '<label for="1B">1B</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="1C" />';
                echo '<label for="1C">1C</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="1D" />';
                echo '<label for="1D">1D</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="1E" />';
                echo '<label for="1E">1E</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" disabled id="1F" />';
                echo '<label for="1F">Taken</label>';
                echo '</li>';
                echo '</ol>';
                echo '</li>';
                echo '</th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<th>';
                echo '<ol class="seats">';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="2A" />';
                echo '<label for="2A">2A</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="2B" />';
                echo '<label for="2B">2B</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" disabled id="2C" />';
                echo '<label for="2C">Taken</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="2D" />';
                echo '<label for="2D">2D</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="2E" />';
                echo '<label for="2E">2E</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="2F" />';
                echo '<label for="2F">2F</label>';
                echo '</li>';
                echo '</ol>';
                echo '</li>';
                echo '</th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<th>';
                echo'<ol class="seats">';
                echo '<li class="seat">';
                echo '<input type="checkbox" disabled  id="3A" />';
                echo '<label for="3A">Taken</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="3B" />';
                echo '<label for="3B">3B</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="3C" />';
                echo '<label for="3C">3C</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="3D" />';
                echo '<label for="3D">3D</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="3E" />';
                echo '<label for="3E">3E</label>';
                echo '</li>';
                echo '<li class="seat">';
                echo '<input type="checkbox" id="3F" />';
                echo '<label for="3F">3F</label>';
                echo '</li>';
                echo '</ol>';
                echo '</li>';
                echo '</th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<th>';
                echo'<ol class="seats">';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="4A" />';
                echo'<label for="4A">4A</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="4B" />';
                echo'<label for="4B">4B</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="4C" />';
                echo'<label for="4C">4C</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="4D" />';
                echo'<label for="4D">4D</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="4E" />';
                echo'<label for="4E">4E</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" disabled id="4F" />';
                echo'<label for="4F">Taken</label>';
                echo'</li>';
                echo'</ol>';
                echo'</li>';
                echo '</th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<th>';
                echo'<ol class="seats">';
                echo'<li class="seat">';
                echo'<input type="checkbox" disabled id="5A" />';
                echo'<label for="5A">Taken</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="5B" />';
                echo'<label for="5B">5B</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="5C" />';
                echo'<label for="5C">5C</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="5D" />';
                echo'<label for="5D">5D</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="5E" />';
                echo'<label for="5E">5E</label>';
                echo'</li>';
                echo'<li class="seat">';
                echo'<input type="checkbox" id="5F" />';
                echo'<label for="5F">5F</label>';
                echo'</li>';
                echo'</ol>';
                echo'</li>';
                echo '</th>';
                echo '</tr>';
                echo '</ol>';
                echo '</ol>';
                
              }
            }
          }
          echo '<tr>';
          echo '<td colspan="3" align="right">Total :</td>';
          echo '<td>Rp.'.$total.'.000</td>';
          echo '</tr>';
          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="upcart.php?action=empty" class="button alert">Cancel All</a>&nbsp;';
          echo '<a href="success.php" class="button alert" >Booking</a>';
          echo '</td>';
          echo '</tr>';
          echo '</table>';
        }
        else {
          echo "You have no items in your shopping cart.";
        }
          echo '</div>';
          echo '</div>';
          ?>
        </div>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; SAIDATUL MAHMUDA - 173140914111017. All Rights Reserved.</p>
        </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
