<?php
require "../inc/config.php";
//print_r($_POST);
// Create connection
$_POST = json_decode(file_get_contents("php://input"), true);
$name = htmlspecialchars(trim($_POST['fname']));
$uname = htmlspecialchars(trim($_POST['uname']));
$pass = htmlspecialchars(trim($_POST['npass']));
$cname = htmlspecialchars(trim($_POST['cname']));
$id=htmlspecialchars(trim($_POST['userid']));
// $captcha= $_POST['captcha'];
// $ccaptcha= htmlspecialchars(trim($_POST['ccaptcha']));
$sql="UPDATE agency SET id=$id, name='$name',uname='$uname',pass='$pass',agname='$cname' WHERE id=$id";
// echo $sql;
    // $sql = "INSERT INTO agency(name,uname,pass,agname) VALUES ('$name','$uname','$pass','$cname')";
    if ($res = mysqli_query($conn, $sql))
     {
    echo "updated successfully";
    // header("Location:showagency.php");
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
    }
mysqli_close($conn);
?>