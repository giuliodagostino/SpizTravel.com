<?php
session_start();
if(isset($_POST['submit']) )
{
$name=$_POST['FieldData0'];
$umail=htmlspecialchars($_POST['FieldData1']);
$tel=htmlspecialchars($_POST['FieldData10']);


$sub=$_POST['FieldData2'];
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


</p>

";



$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers = "From: ".$umail; 

$headers.= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\""; 


$email_message= "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$message . "\n\n";  







$done=mail("m.qudrathulla@gmail.com", $sub, $email_message, $headers);






header('Location: contact.php');
exit;
}



?>