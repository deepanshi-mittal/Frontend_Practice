<?php
  $conn = mysqli_connect("localhost","root","","dataofform");
  if(!$conn){
    die("connection error : ".$conn->connect_error);
  }
  echo "Connected ";
  $sql = "SELECT * FROM deepanshi";

  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0)
    while($row = mysqli_fetch_assoc($result))
      echo "<h2>" . $row['firstname'] . "</h2><br />";
mysqli_close($conn);
?>
