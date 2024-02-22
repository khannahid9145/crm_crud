$(document).ready(function () {
    $("#name").on("input", function () {
      checkname();
    });
    $("#pass").on("input", function () {
      checkpass();
    });
  $("#submitbtn").click(function () {
    if (!checkname() && !checkpass()) {
      console.log("all error");
      $("#message").html("Please fill all required field");
      $("#message").css("color", "red");
    } else if ( !checkname() ||  !checkpass()) {
      $("#message").html(
        "Please fill all required field");
        $("#message").css("color", "red");
      }else {
        console.log("ok");
        $("#message").html("");
        var fname = document.getElementById("name").value;
        var npass = document.getElementById("pass").value;
  var data = {
    fname,
    npass,
  };
  //   console.log(data);
  //   var data = new FormData(form);
  $.ajax({
    url: "http://localhost/login/connection/fcon.php",
    method: "POST",
    timeout: 0,
    headers: {
      "Content-Type": "application/json",
    },
    data: JSON.stringify(data),
    success: function (res) {
      if(res=="login successfully"){
        window.location.replace('profile.php');
      }
      else{
      $("#message").html(res);
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
    console.log("password");
    var pass = $('#pass').val();
    if (pass == "") {
        $('#pass_err').html('Enter Password');
        $("#pass_err").css("color", "red");
        return false;
    } else {
        $('#pass_err').html("");
        return true;
    }
  }