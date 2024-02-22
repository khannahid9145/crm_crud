<?php
 include("../inc/header.php");
$sql1= "SELECT * FROM addclient";
$result1=mysqli_query($conn,$sql1);
$crows= mysqli_num_rows( $result1 );
$sql2= "SELECT * FROM agency";
$result2=mysqli_query($conn,$sql2);
$arows= mysqli_num_rows( $result2);

?>
<div class="head">
    <h1><i class="app-menu__icon fa fa-dashboard"> Dashboard</i></h1>
</div>
<div class="tab1">
<div class="main" id="mclient">
<i class='fa fa-users' ></i>
<div class="pr1">
<br/><a href="showclient.php">CLIENTS</a><br/>
<a><?php echo $crows ?></a>
</div>
</div>
<div class="main" id="agency">
<i class='fa fa-cubes' ></i>
<div class="pr2">
<br/><a href="showagency.php">AGENCY</a><br/>
<a><?php echo $arows?></a>
</div>
</div>
</div>
<style>
    .tab1{
        margin: -37px 0px 0px 0px;
    }
    .head{
        margin: -47px 0px 0px -54px;
        text-align: left;
        width: 100%;
    background-color: white;
    font-family: 'Brush Script MT', cursive;
    height: 50px;
    }
    .pr1{
    width: 500px;
    height: 80px;
    font-size: 20px;
    margin: -113px 3px 2px 23px;
    border: 1px solid #ccc;
    border-radius: 10px;
background-color: white;
background: linear-gradient(
    to left,
    white 0%,
    white 78%,
    black 50%,
    black 100%
  )
}
.pr1 a{
    text-align: center;
    margin: 1px 26px -10px 133px;
    text-decoration: none;
}
.pr2{
    width: 500px;
    height: 80px;
    font-size: 20px;
    margin: -121px 3px 2px 595px;
    border-radius: 10px;
background-color: white;
background: linear-gradient(
    to left,
    white 0%,
    white 78%,
    orange 50%,
    orange 100%
  );
      border: 1px solid #ccc;
}
.pr2 a{
    text-align: center;
    margin: 1px 26px -10px 133px;
    text-decoration: none;
}
#agency{
        transition: margin-left .5s;
        padding: 16px;
        padding: 16px;
    margin: -83px 5px 36px 2px;
    width: 40%;

    }
    #agency .fa{
        margin: -78px 6px 49px 600px;
    text-align: center;
    font-size: 40px;
    height: 59px;
    width: 98px;
    /* margin: 18px 0px 0px -11px; */
    background-color: orange;
    color: white;
    }
#mclient{
        transition: margin-left .5s;
        padding: 16px;
        width: 99%;
    }
    #mclient .fa{
        margin: 88px 2px 43px 27px;
    text-align: center;
    font-size: 40px;
    height: 59px;
    width: 98px;
    /* margin: 18px 0px 0px -11px; */
    background-color: black;
    color: white;
    }
    </style>
<?php include("../inc/footer.php");?>