$(document).ready(function () {
    $("#fname").on("input", function () {
      checkname();
    });
    $("#uname").on("input", function () {
      checkuname();
    });
    $("#pass").on("input", function () {
        checkpass();
      });
      $("#aname").on("input", function () {
        checkaname();
      });
  $("#submitbtn2").click(function () {
    if (!checkname() && !checkuname()&& !checkpass()&& !checkaname()) {
      console.log("all error");
      $("#msg").html("Please fill all required field");
      $("#msg").css("color", "red");
    } else if ( !checkname()  || !checkuname()|| !checkpass() || !checkaname()) {
      $("#msg").html(
        "Please fill all required field");
        $("#msg").css("color", "red");
      }else {
        console.log("ok");
        $("#msg").html("");
        var fname = document.getElementById("fname").value;
        var uname = document.getElementById("uname").value;
        var npass = document.getElementById("pass").value;
        var cname = document.getElementById("aname").value;
        var userid= document.getElementById("userid").value;
  var data = {
    fname,
    uname,
    npass,
    cname,
    userid,
  };
  //   console.log(data);
  //   var data = new FormData(form);
  $.ajax({
    url: "http://localhost/login/connection/agEditCon.php",
    method: "POST",
    timeout: 0,
    headers: {
      "Content-Type": "application/json",
    },
    data: JSON.stringify(data),
    success: function (res) {
      if(res=="updated successfully"){
        Swal.fire({
          dispaly :"block",
          position: 'top-center',
          icon: 'success',
          title: 'Data Has Been Updated',
          showConfirmButton: false,
          timer: 1500
        }), 
         setTimeout(function() {
          window.location.replace('showagency.php');
    }, 2000);
      }
      else{
      $("#msg").html(res);
      }
    },
  });
      }
  });
  });
  function checkname() {
    var user = $("#name").val();
    if(user=="") {
      $("#name_err").html("required field ");
      $("#name_err").css("color", "red");
      return false;
    } else {
      $("#name_err").html("");
      return true;
    }
  }
  function checkpass() {
    // console.log("password");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#pass').val();
    var validpass = pattern2.test(pass);
    if (pass == "") {
        $('#pass_err').html('password can not be empty');
        $("#pass_err").css("color", "red");
        return false;
    } else if (!validpass) {
        $('#pass_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        $("#pass_err").css("color", "red");
        return false;

    } else {
        $('#pass_err').html("");
        return true;
    }
}
  function checkuname(){
    var pass = $('#uname').val();
    if (pass == "") {
        $('#u_err').html('Enter username');
        $("#u_err").css("color", "red");
        return false;
    } else {
        $('#u_err').html("");
        return true;
    }
  }
  function checkaname(){
    var pass = $('#aname').val();
    if (pass == "") {
        $('#c_err').html('Enter company');
        $("#c_err").css("color", "red");
        return false;
    } else {
        $('#c_err').html("");
        return true;
    }
  }
 