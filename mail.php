<?php
$mail_to1="mukesh@ptiwebtech.com";
$mail_to="manvendra@ptiwebtech.com";
$sub="Contact Information";
$msg="manvendra sharma";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  $headers .="From: ".$_REQUEST['email'];

 
mail($mail_to,$sub,$msg,$headers);
mail($mail_to1,$sub,$msg,$headers);


//info@essveecollection.com
 ?> 

