<?php
//get data from form
 $name = $_POST[ 'name'];
 $email= $_POST[ 'email'];
 $subject= $_POST[ 'subject'];
 $mobile= $_POST[ 'mobile'];
 $message = $_POST[ 'message'];
 $to = "support@teamsuperking.in";
 $xyz = "Team Superking Customer Details";
 $txt = "Name = ". $name ."\r\nEmail = ". $email . "\r\nMobile Number =" .$mobile." \r\nSubject =" .$subject."\r\nMessage =". $message ;
 $headers = "From: tsk_customer_detail@teamsuperking.com". "\r\n".
  "СС: ragautam2010@gmail.com";
 if($email!=NULL){
    mail ($to, $xyz, $txt, $headers);
  }
//redirect
header ("Location:thankyou.html");
 ?>