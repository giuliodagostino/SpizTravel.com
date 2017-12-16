<?php


$linkok=$_GET['link'];





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hotels - Save Money On Your Dream Vacation Today!</title>
<meta name="description" content="Find The Best Prices For Hotels, Flights, Cruises & Car Rentals" />
<link rel="stylesheet" href="css/supersized.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



</head>

<body>

<div id="Top">
  <div id="InTop">
    <div id="Navi">
      <ul>
        <li><a href="contact.php" >CONTACT</a></li>
        <li><a href="about.php" >ABOUT US</a></li>
      
        <li><a href="rentalcars.php" >CARS</a></li>
        <li><a href="flights.php" >FLIGHTS</a></li>
        <li><a href="hotels.php"  id="Current">HOTELS</a></li>
        <li>  <a href="index.php" >HOME</a></li>
      </ul>
    </div> <a href="index.php"><img src="images/logo.png" alt="spiztravel.com" width="350" height="75" border="0" /></a></div>
</div>





<iframe id="tree" name="tree" src="http://hotels.spiztravel.com/<?php echo($linkok); ?>" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="2500" scrolling="auto"></iframe>













    <div class="clear"></div>
  </div>
  <div id="Logos"><img src="images/logos.png" alt="Popular Travel Brands" width="972" height="45" /></div>
  <div id="Subscribe">
    <div id="SubBox" style='height:5px;'>
     


 </div>
  </div>
  <?php include('footer.php'); ?>

</div>
</body>
</html>
