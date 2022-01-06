<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["signup"])) {
    include("connection.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      die( '<script>
        alert("invalid email ");
        window.location.href="signup.php";
        </script>');
    }
    $selectuseremail = "SELECT * FROM signup WHERE email = '$email'";
    $insertuserdata ="INSERT INTO signup (name, email, password, city) VALUES ('$name','$email','$password','$city')";
    $getrows1=$conn->query($selectuseremail);
    if ($getrows1->num_rows>0 ){
      echo '<script>
      alert("you already have an account try to log in");
      window.location.href="loginn.php";
      </script>';
    }
    elseif($conn->query($insertuserdata)){
      echo '<script>
      alert("account created succesfully");
      window.location.href="loginn.php";
      </script>';
    }
    else{
      echo ".";
    }
  }
}
?>

