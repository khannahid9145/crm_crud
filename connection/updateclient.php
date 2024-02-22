<?php
require "../inc/config.php";
//print_r($_POST);
// Create connection
$_POST = json_decode(file_get_contents("php://input"), true);
$name = htmlspecialchars(trim($_POST['fname']));
$uname = htmlspecialchars(trim($_POST['uname']));
$pass = htmlspecialchars(trim($_POST['npass']));
$cname = htmlspecialchars(trim($_POST['cname']));
$web = htmlspecialchars(trim($_POST['web']));
$addr = htmlspecialchars(trim($_POST['addr']));
$id = htmlspecialchars(trim($_POST['userid']));
$sql="UPDATE addclient SET name='$name',username='$uname',pass='$pass',company='$cname',website='$web',address='$addr'WHERE id=$id";
// echo $sql;
    // $sql = "INSERT INTO addclient(name,username,pass,company,website,address) VALUES ('$name','$uname','$pass','$cname','$web','$addr')";
    if ($res = mysqli_query($conn, $sql))
     {
    echo "updated successfully";  
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
    }
// }
mysqli_close($conn);
?> 