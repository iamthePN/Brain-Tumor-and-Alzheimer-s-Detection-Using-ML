
<?php 

include('connect.php');

if(isset($_POST['submit']))
{
     $FNAME =$_POST['fname'];
     $LNAME =$_POST['lname'];
     $Uname =$_POST['user'];
     $Email =$_POST['email'];
     $Pass =$_POST['pass'];

 

    $insert = "INSERT INTO user(Fname,Lname,Username,Email,Password) VALUES('{$FNAME}','{$LNAME}','{$Uname}','{$Email}','{$Pass}') ";

    $ins = mysqli_query($conn, $insert);
    // if($ins)
    //     echo "<br>inserted successfully";
    // else
    //     echo "<br>Not inserted";
mysqli_close($conn);

 }
?>