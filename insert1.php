<?php
  $conn = new mysqli("localhost","root","","dataofform");
  if($conn->connect_error){
    die("connection error : ".$conn->connect_error);
  }
  echo "Connected "."<br>";
  $first= $_POST['first'];
  $email = $_POST['email'];
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "INSERT INTO deepanshi (firstname, email, username, password) values ('$first','$email','$user', '$pass')";
  if($conn->query($sql) == TRUE) {
    echo "<h2 style='color:#abcd12;'>" . 'Connected successfully' . "</h2>";
  }
  else {
    echo "Error occured : ".$conn->error;
  }

  $conn->close();
?>
