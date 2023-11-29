<?php

$user_id  = $_SESSION['Email'];
if($user_id == true){
        header('location: index.php');
}
else{
  header('location: logout.php');
}
  
$Email = $_SESSION['Email'];
$Fname = $_SESSION['Fname'];
$Lname = $_SESSION['Lname'];
?>