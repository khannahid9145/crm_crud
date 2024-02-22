<?php
require "../inc/config.php";
// include("login2.php");
// $result=mysqli_query();
$id= $_GET['id'];
// echo $id;
// print_r($id);
$sql="DELETE from addclient WHERE id=$id";
if($res=mysqli_query($conn,$sql)){
    echo "deleted successfully";
    // header("Location:showclient.php");
    // echo '<script>alert( "record deleted successfully")</script>';
}else{
    echo "not deleted";
}
mysqli_close($conn);
?>