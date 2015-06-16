<?php 
  $email = trim($_POST["email"]);
  
  if ($email == "")                // if the user didn't enter email
    echo "fail"; 
  else if ($email == "demo@demo.com")     // if the email is already exist
    echo "email exists";
  else                              // if the email is available
    echo "success";
?>

 