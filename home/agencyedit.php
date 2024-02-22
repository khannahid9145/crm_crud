<?php
require "inc/config.php";
$id=$_GET['id'];
// echo $id;
$sql1= "SELECT * FROM agency WHERE id=$id";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0) {
    // $sn=1;
    while($rows=mysqli_fetch_array($result)){
$name=$rows['name'];
$uname=$rows['uname'];
$pass=$rows['pass'];
$agname=$rows['agname'];
}
}
else{
echo "data not found";
}
?>
<?php include("header.php");?>
<style>
    .add{
        margin-top: 20px;
    margin-right: 0%;
    margin-bottom: 0px;
    margin-left: 15%;
    width: auto;
    position: fixed;
    border :#ccc
    }
    input[type=TEXT]{
        border: 2px solid #ccc;
        width: 80%;
        padding: 6px ;
        border-radius: 8px;
        /* font-size: 21px; */
    }
    .btn2{
        margin-top: 21px;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 35px;
            width: 250px;
            padding: 12px 45px;
            text-align: center;
            border-radius: 10px;
            color:white;
            background-color: black;
            font-size: 15px;
            cursor:pointer;

    }
</style>
<from name="add_agency" method="post">
    <div class="add">
        <h1><i class="fa fa-edit">Update Agency Details</i></h1>
        <input type="hidden" id="userid" name="userid" value=<?php echo $_GET['id'];?>>
        Full Name : <input type="text" name="fname" id="fname"  value=<?php echo $name; ?>><br/>
                <span class="error" id="name_err"> </span><br />

        Username :<input type="text" name="uname" id="uname"  value=<?php echo $uname; ?>><br/>
        <span class="error" id="u_err"> </span><br />

        Password :<input type="text" name="pass" id="pass"  value=<?php echo $pass; ?>><br/>
                <span class="error" id="pass_err"> </span><br />

        Agency Name :<input type="text" name="aname" id="aname"  value=<?php echo $agname; ?>><br/>
                <span class="error" id="aname_err"> </span><br />

                <button type="button" id="submitbtn2" class="btn2" >update</button><br />
<!-- <span class="error" id="msg1"></span><br /><br/> -->
<span class="error" id="msg"></span><br /><br/>
    </div>
</from>
<!-- <script src="editagency.js"></script> -->
<script src="controller/js/editagency.js"></script>
<?php include("inc/footer.php");?>