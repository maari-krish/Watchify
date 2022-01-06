<?php
session_start();
include_once 'connection.php';
$email =$_POST["email"];
$password=$_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
}
else {
    $_SESSION["email"]="$email";
 $sql ="SELECT * FROM signup WHERE email='$email' and password='$password'";
 $notvalidmail ="SELECT * FROM signup WHERE email!='$email' and password='$password'";
 $notvalidpassword ="SELECT * FROM signup WHERE email='$email' and password!='$password'";
$getrows=$conn->query($sql);
$getrows1=$conn->query($notvalidmail);
$getrows2=$conn->query($notvalidpassword);
if ($getrows->num_rows>0){
    echo "Logged In Successfully";
}
elseif($getrows1->num_rows>0 && $conn->query($notvalidmail)){
    echo "Your Email is Wrong";
}
 elseif($getrows2->num_rows>0 && $conn->query($notvalidpassword)){
    echo "Your Password is Wrong";
}
else {
	echo "EmailId doesn't Exists, Please Signup";

}
}
?>