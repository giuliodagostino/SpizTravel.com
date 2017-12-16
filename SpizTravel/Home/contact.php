<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Us - Save Money On Your Dream Vacation Today!</title>
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
        <li><a href="contact.php" id="Current" >CONTACT </a></li>
        <li><a href="about.php" >ABOUT US</a></li>
      
        <li><a href="rentalcars.php" >CARS</a></li>
        <li><a href="flights.php" >FLIGHTS</a></li>
        <li><a href="hotels.php">HOTELS</a></li>
        <li>  <a href="index.php"  >HOME</a></li>
      </ul>
    </div> <a href="index.php"><img src="images/logo.png" alt="spiztravel.com" width="350" height="75" border="0" /></a></div>
</div>

<div id="Space"></div>
<div id="Con">
  <div id="Main3">
    <div id="Left2">
      <h2>CONTACT US</h2>
      <p>If you have any question, please contact us by completing the form below.</p>




<?php

if (isset($_GET['cop']) && $_GET['cop']==3) 
{

$errorMessage = 'Please enter your name!';
}

elseif (isset($_GET['cop']) && $_GET['cop']==10)  
{

$errorMessage = "Please enter your current email address!";
}

elseif (isset($_GET['cop']) && $_GET['cop']==12)  
{

$errorMessage = "Please enter your phone number!";
}

elseif (isset($_GET['cop']) && $_GET['cop']==15)  
{

$errorMessage = "image verification was entered  wrongly.Please try again!";
}


else 
{
$errorMessage='';
}

?>





<?php

if(isset($_GET['success']) && $_GET['success']==yes )
{

echo "<span  class='errMsg' style='width:420px;'>Thank you for filling the form.</span><br>";
}
?>



<?php


if ($errorMessage != '') 
{
echo "<span class='errMsg' style='width:480px;'>$errorMessage</span><br>"; 
}

?>









      <form action="check2.php" method="post" name="freecontactform" id="freecontactform" onsubmit="return validate.check(this)">
        <table width="550" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top" class="formdesc">YOUR NAME:</td>
          </tr>
          <tr>
            <td valign="top" class="formtd"><input name="FieldData0" type="text" class="formtxt" id="Full_Name" /></td>
          </tr>
          <tr>
            <td valign="top" class="formdesc">YOUR EMAIL ADDRESS:</td>
          </tr>
          <tr>
            <td valign="top" class="formtd"><input name="FieldData1" type="text" class="formtxt" id="Email_Address" maxlength="100" /></td>
          </tr>
          <tr>
            <td valign="top" class="formdesc">YOUR PHONE NUMBER:</td>
          </tr>
          <tr>
            <td valign="top" class="formtd"><input name="FieldData10" type="text" class="formtxt" id="Telephone_Number" maxlength="100" /></td>
          </tr>
          <tr>
            <td valign="top" class="formdesc">YOUR MESSAGE:</td>
          </tr>
          <tr>
            <td valign="top" class="formtd"><textarea name="FieldData3" class="formtxt" id="Your_Message" style="height:160px" maxlength="2000"></textarea></td>
          </tr>
          <tr>
            <td><input name="AntiSpam" type="hidden" id="AntiSpam"  value="25" maxlength="100" />
              <div class="otherbutton"><a href="#" onclick="document.forms['freecontactform'].submit();">SEND EMAIL</a></div></td>
          </tr>
        </table>
      </form>
    </div>
    <div id="Right2">
      <div id="SideAd"><a href="hotels.php"><img src="images/ad.jpg" alt="Travel Advert" width="300" height="250" border="0" /></a></div>
      <h2>WHY CHOOSE US?</h2>
      <div class="tick">Find the lowest hotel rates</div>
      <div class="tick">Search over 200k hotels</div>
      <div class="tick">Search hundreds of airlines</div>
      <div class="tick">Best prices for your next cruise</div>
      <div class="tick">Save money on your rental car</div>
    </div>

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
