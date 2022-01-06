<?php
include_once 'connection.php';
$name =$_POST["name"];
$email =$_POST["email"];
$password=$_POST["password"];
$city =$_POST["city"];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}else{
  $sql ="SELECT * FROM signup WHERE email='$email'";
  $sql1="INSERT INTO signup (name,email,password,city) VALUES ('$name','$email','$password','$city')";
 
 
//  $notvalidmail ="SELECT * FROM signup WHERE email!='$email' and password='$password'";
//  $notvalidpassword ="SELECT * FROM signup WHERE email='$email' and password!='$password'";
 $getrows=($conn->query($sql));
 if($getrows->num_rows>0){
  echo "already exists";
}else{
  $conn->query($sql1);
  echo "row inserted";
 }
}
// $getrows1=$conn->query($notvalidmail);
// $getrows2=$conn->query($notvalidpassword);
// if ($conn->query($sql1) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql1 . "<br>" . $conn->error;
  
// if ($getrows->num_rows>0){
//     echo "Signup Successfully";
// }
// elseif($getrows1->num_rows>0 && $conn->query($notvalidmail)){
//     echo "Your Email is Wrong";
// }
//  elseif($getrows2->num_rows>0 && $conn->query($notvalidpassword)){
//     echo "Your Password is Wrong";
// }
// else {
// 	echo "signup failed";

?>
