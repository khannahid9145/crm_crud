<?php
require '../inc/config.php';
if(isset($_SESSION["id"])){
    header("Location: profile.php");
}
?>
<!DOCTYPE html>
<head>
<title>
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<style>
    body{
        width: 100%;
  /* height: 100vh; */
  background: linear-gradient(
    to top,
    white 0%,
    white 10%,
    black 50%,
    black 100%
  );
  background-repeat: no-repeat;
    }
    .img{
        margin-top:-10%;
    margin-left: 28%;
        height: 50%;
        width: 23%;
        padding: 10%;
        /* padding: 10px 30px; */
        background-image: url(/img/meraki.png);
        background-repeat: no-repeat;
        background-position: 100px;
    background-position-x:  50%;
    background-position-y: 205px;
    }
    .container{
        position: relative;
    margin-right: 4%;
    margin-bottom: 4%;
    margin-left: 40%;
        background-color: white;
        box-shadow: 5px 10px 55px #888888;
        border-radius: 10px;
        border: 2px solid #ccc;
        height: 455px;
        width: 17%;
        padding: 9px;
    }
    .btn{
        margin-top: 21px;
    margin-right: 16px;
    margin-bottom: 16px;
    margin-left: 14px;
            width: 250px;
            padding: 12px 45px;
            text-align: center;
            border-radius: 10px;
            color:white;
            background-color: black;
            font-size: 15px;
            cursor:pointer;

    }
    input[type=text]{
        border: 2px solid #ccc;
        width: 80%;
        padding: 6px ;
        border-radius: 8px;
        /* font-size: 21px; */
    }
    input[type=password]{
        border: 2px solid #ccc;
        width: 80%;
        padding: 6px ;
        border-radius: 8px;
        /* font-size: 21px; */
    }
    .U{
        text-align: center;
    }
</style>
</head>
<body>
<form name="myform" method="post">
    <div class="img">
    <!-- <label type="text1" name="captcha" id="captcha" > -->
    </div>
    <div class="container">
        <h2 style="text-align:center">SIGN IN</h2>
        <U style="color:grey">_____________________________________</U>
        <h3 style="color:black;">USERNAME:</h3>
        <input type="text" id="name" name="name" required><br />
        <span class="error" id="name_err"> </span><br />
        <h3 style="color:black;">PASSWORD:</h3>
        <input type="password" id="pass" name="pass" required><br/>
        <span class="error" id="pass_err"> </span><br />
        <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span> <br/> -->
        <button type="button" id="submitbtn" class="btn " >SUBMIT</button><br />
        <span class="error" id="message"></span><br /><br/>
    </div>
</form>
<!-- <script src="loginj.js"></script> -->
<script src="../controller/js/loginj.js"></script>
</body>
</html>