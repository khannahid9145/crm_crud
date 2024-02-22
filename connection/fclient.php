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
// $captcha= $_POST['captcha'];
// $ccaptcha= htmlspecialchars(trim($_POST['ccaptcha']));
// echo "SELECT * FROM addclient where username ='$uname' || company='$cname'";
$find=mysqli_query($conn,"SELECT * FROM addclient where username ='$uname' || company='$cname'");
// echo $find;
if(mysqli_num_rows($find)>0){
    echo '<script>alert("Username And Company Name Already exists")</script>';
}
else{
    // $sql = mysqli_query($conn,"INSERT INTO addclient(name,username,pass,company,website,address) VALUES ('$name','$uname','$pass','$cname','$web','$addr'");
    $sql ="INSERT INTO addclient (name,username,pass,company,website,address) VALUES ('$name','$uname','$pass','$cname','$web','$addr')";
    if ($res = mysqli_query($conn, $sql))
    // if($res=!$sql)
     {
    echo "inserted successfully";  
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
    }
}
// else{
//     echo '<script>alert("Username And Company Name Already exists")</script>';
// }
mysqli_close($conn);
?>