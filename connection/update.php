<?php
require '../inc/config.php';
$_POST = json_decode(file_get_contents("php://input"),true);
//  print_r($_POST);
$pass1 = htmlspecialchars(trim($_POST['cpass']));
$id=htmlspecialchars(trim($_SESSION["id"]));
// $find1=mysqli_query($conn,"UPDATE fnew SET pass= '$pass1' WHERE email='$email'");
// echo $email;
    // echo '<script>alert("email exists")</script>';
    // echo "email exists";
    $find1=mysqli_query($conn,"UPDATE admin SET pass= '$pass1' WHERE id=$id");
    if ($find1){
        //echo '<script>alert("not update")</script>';
    echo "successfully updated";
    // echo '<script>alert("update successfully")</script>';
    }
    else{
    echo '<script>alert("not update")</script>';
    // echo "not inserted";
}
mysqli_close($conn);
?>