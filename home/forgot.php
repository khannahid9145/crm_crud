<?php
require "../inc/config.php"; 
include("../inc/header.php");

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .forgot1{
        height: 100%;
        width: 80%;
        /* margin: 10px; */
        /* margin-top: 49px;
    margin-right: 0%;
    margin-bottom: 0px;
    margin-left: 5%; */
    /* width: auto; */
    /* position: fixed; */
border: 1px solid black;
background-color: white;
padding: 10px 10px;
box-shadow: 5px 10px 55px #888888;
    }
    input[type=TEXT]{
        border: 2px solid #ccc;
        width: 40%;
        padding: 6px ;
        border-radius: 8px;
        /* font-size: 21px; */
    }
    .btn1{
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
<form name="myform" method="post">
<div id="forgot1" class="forgot1">
<h1><i class="fa fa-key"></i> Change Password</h1>
<input type="hidden" name="userid" id="userid" >
Enter Password : <input type="text" name="pass" id="pass"require><br/><br/>
<span class="error" id="pass_err"> </span><br />
Confirm Password : <input type="text" name="cpass" id="cpass"require><br/><br/>
<span class="error" id="pass1_err"> </span><br />
<button type="button" id="submitbtn1" class="btn1">Change</button><br />
<span class="error" id="msg1"></span><br /><br/>
<span class="error" id="msg"></span><br /><br/>
</div>
</form>
<!-- <script src="frogot.js"></script> -->
<script src="../controller/js/frogot.js"></script>
<?php include("../inc/footer.php");?>

