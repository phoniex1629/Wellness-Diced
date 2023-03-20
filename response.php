<?php
$name=$_POST['name'];
$email=$_POST['Email'];
$Ph_no =$_POST['number'];
$Message =$_POST['message'];

$to = "wellnessdiced@gmail.com";
$subject = "Mail from Website";

$txt = "Name = ".$name."/r/n Email = ".$email."/r/n Phone Number = ".$Ph_no."/r/n Message = ".$message.;
$headers = "From:noreply@wellnessdiced.com";
if ($email!=null) {
    mail($to,$subject,$txt,$headers);
}


?>