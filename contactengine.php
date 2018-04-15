<?php

$EmailFrom = "tingforassessor@gmail.com";
$EmailTo = "dominikting@gmail.com";
$Subject = "Dominik's php contact form practice";

$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Address = Trim(stripslashes($_POST['Address']));
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  alert("Thank you for signing up, I will be in touch!");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
					}
}
else{
  alert("Oops, something went wrong. Please try again!");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>