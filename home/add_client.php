<?php
require "../inc/config.php"; 
include("../inc/header.php");
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .add{
        /* margin-top: 20px;
    margin-right: 0%;
    margin-bottom: 0px;
    margin-left: 5%;
    width: auto; */
    /* position: fixed; */
    padding: 10px 10px;
    border :2px solid black;
    background-color: white;
    height: 100%;
    width: 100%;
    box-shadow: 5px 10px 55px #888888;
    }
    input[type=TEXT]{
        border: 2px solid #ccc;
        width:60%;
        padding: 6px ;
        border-radius: 8px;
        align-items: center;
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
        <h1>Add Client</h1>
        Name :<br/> <input type="text" name="fname" id="fname"required><br/>
        <span class="error" id="name_err"> </span><br />
        Username :<br/> <input type="text" name="uname" id="uname"required><br/>
        <span class="error" id="u_err"> </span><br />
        Password :<br/> <input type="text" name="pass" id="pass"required><br/>
        <span class="error" id="pass_err"> </span><br />
        Company name :<br/> <input type="text" name="cname" id="cname"required><br/>
        <span class="error" id="c_err"> </span><br />
        Website : <br/> <input type="text" name="web" id="web"required><br/>
        <span class="error" id="w_err"> </span><br />
        Address :<br/> <input type="text" name="addr" id="addr"required><br/>
        <span class="error" id="addr_err"> </span><br />
        <button type="button" id="submitbtn1" class="btn2" >Add</button><br />
        <span class="error" id="msg"></span><br /><br/>
<span class="error" id="msg"></span><br /><br/>
    </div>
</from>
<!-- <script src="aclient.js"></script> -->
<script src="../controller/js/aclient.js"></script>
<?php include("../inc/footer.php");?>