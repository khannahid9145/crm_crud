<?php
require '../inc/config.php';
$_POST = json_decode(file_get_contents("php://input"), true);
$fname = htmlspecialchars(trim($_POST['fname']));
$npass = htmlspecialchars(trim($_POST['npass']));
$sql =mysqli_query($conn,"SELECT * FROM admin WHERE name = '$fname' AND pass='$npass'");
if (mysqli_num_rows($sql)>0){
    $row= mysqli_fetch_assoc($sql);
    
    if($npass== $row["pass"]){
                echo "login successfully";
                $_SESSION["username"]=$row["name"];
                $_SESSION["id"]=$row["id"];
                // header("Location : login.php");
    }
    else{
        echo "wrong password"; 
    }
    }
    else{
    echo '<script>alert( "incorrect username & password")</script>';
    }
mysqli_close($conn);
?>