<?php
session_start();
if(isset($_POST['FieldData0']) )
{
$name=$_POST['FieldData0'];
$umail=htmlspecialchars($_POST['FieldData1']);
$myem=$umail;
$tel=htmlspecialchars($_POST['FieldData10']);

if(trim($name)=='')
{
header('Location: contact.php?cop=3');
exit;
}

elseif (trim($umail)=='')
{
header('Location: contact.php?cop=10');
exit;
}

elseif (trim($tel)=='')
{
header('Location: contact.php?cop=12');
exit;
}


$sub='Message From Spiztravel Contact Form';
$mess=$_POST['FieldData3'];




$adddate = mktime(0,0,0,date("m"),date("d"),date("Y"));
      
$dated=date("d-m-Y", $adddate);




$message="


<p>
<span style='color:darkred;'>Full Name:</span> $name <br>
<span style='color:darkred;'>Subject:</span> $sub <br>
<span style='color:darkred;'>Message:</span> $mess <br>
<span style='color:darkred;'>From: </span>$umail<br>

<span style='color:darkred;'>Phone No: </span>$tel<br>


Message was sent from The spiztravel.com contact form.


</p>

";



$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers = "From: ".$myem; 

$headers.= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\""; 


$email_message= "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$message . "\n\n";  







$done=mail("giuliodagostino1978@gmail.com", $sub, $email_message, $headers);



if($done)
{
header('Location: contact.php?success=yes');
exit;
}

else
{
header('Location: contact.php?success=error');
exit;
}


}

?>