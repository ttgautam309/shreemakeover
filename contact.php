<?php
//get data from form
 $fname = $_POST[ 'fname'];
 $lname= $_POST[ 'lname'];
 $name=$fname+$lname;
 $email= $_POST[ 'email'];
 $mobile= $_POST[ 'mobile'];
 $message = $_POST[ 'message'];
 $to = "ttgautam309@gmail.com";
 $xyz = "Shree Make Over Studio Appointment";
 $txt = "Name = ". $name ."\r\nEmail = ". $email . "\r\nMobile Number =" . $mobile . "\r\nMessage =". $message ;
 $headers = "From: tsk_customer_detail@teamsuperking.com". "\r\n".
  "СС: ragautam2010@gmail.com";
 if($email!=NULL){
    mail ($to, $xyz, $txt, $headers);
  }
//redirect
header ("Location:thankyou.html");
 ?>
