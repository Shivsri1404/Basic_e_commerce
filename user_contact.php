<?php
$con = mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$message=mysqli_real_escape_string($con,$_POST['message']);
$user_contact_query="insert into contact(name,email,message) values ('$name','$email','$message')";
$user_contact_submit=mysqli_query($con,$user_contact_query) or die(mysqli_error($con));
echo "<b>User successfully contact to E-store.After some days we will be reply your solution.<br>Thanking you!</b>";
?>