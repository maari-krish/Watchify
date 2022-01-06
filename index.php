<?php
include ("connection.php");
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "$email is not valid email address";
}else{
$insertuser ="SELECT * FROM `signup` WHERE email='$email' ";
$result=$conn->query($insertuser);
if($result->num_rows>0){
   echo"signin";
}
else if($result->num_rows == 0){
  echo "signup";
}
else{
    echo "";
}
}
?>