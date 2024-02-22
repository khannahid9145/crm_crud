<?php
require "../inc/config.php";
//print_r($_POST);
// Create connection
$_POST = json_decode(file_get_contents("php://input"), true);
$name = htmlspecialchars(trim($_POST['fname']));
$uname = htmlspecialchars(trim($_POST['uname']));
$pass = htmlspecialchars(trim($_POST['npass']));
$cname = htmlspecialchars(trim($_POST['cname']));
// $captcha= $_POST['captcha'];
// $ccaptcha= htmlspecialchars(trim($_POST['ccaptcha']));
$find=mysqli_query($conn,"SELECT * FROM agency where uname ='$uname' || agname='$cname'");
// echo $find;
if(mysqli_num_rows($find)>0){
    echo '<script>alert("Username And Company Name Already exists")</script>';
}
else{
    $sql = "INSERT INTO agency (name,uname,pass,agname) VALUES ('$name','$uname','$pass','$cname')";
    
    if ($res = mysqli_query($conn, $sql))
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