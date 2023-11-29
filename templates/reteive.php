<!DOCTYPE html>
<html lang="en">
    <?php 
session_start();
$server = "localhost";
$username ="root";
$password = "";
$db ="bt_ad_detection";

$conn = mysqli_connect($server,$username,$password,$db);

if(isset($_POST['submit']))
{
    $eMail = $_POST['email'];
    $password = $_POST['pass'];
    // Hash the password before checking

    $insert = "SELECT  * FROM  user WHERE Email ='{$eMail}' AND Password='{$password}'";
    $result = mysqli_query($conn, $insert) or die("query unsuccessful");

    if(mysqli_num_rows($result))
    { 
        while($row = mysqli_fetch_assoc($result))
        { 
            $_SESSION['email'] = $eMail;
           
            echo ' <script type="text/javascript" src="script.js">';
            echo '</script>';
        }
    } else {
        header("location: invalid.php");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>