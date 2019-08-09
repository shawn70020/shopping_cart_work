$(document).ready(function() {

    $(function() {
        $("#username_result").hide();
        $("#password_result").hide();
        $("#cpassword_result").hide();
        $("#realname_result").hide();
        $("#email_result").hide();
        var error_username  ;
        var error_passwd  ;
        var error_cpasswd ;
        var error_realname ;
        var error_email ;
        $("#username").focusout(function() {
            check_username();
        });
        $("#password").focusout(function() {
            check_passwd();
        });
        $("#cpassword").focusout(function() {
            check_cpasswd();
        });
        $("#realname").focusout(function() {
            check_realname();
        });
        $("#email").focusout(function() {
            check_email();
        });

        function check_username() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#username").val();
            if (pattern.test(fname) && fname !== '') {
                $("#username_result").hide();
                $("#username").css("border", "1px solid #3c763d");
                error_username = false;
            } else {
                $("#username_result").html("請記得填寫帳號");
                $("#username_result").show();
                $("#username").css("border", "1px solid #a94442");
                error_username = true;
            }
        }

        function check_passwd() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#password").val()
            if (pattern.test(sname) && sname !== '') {
                $("#password_result").hide();
                $("#password").css("border", "1px solid #3c763d");
                error_passwd = false;
            } else {
                $("#password_result").html("請記得填寫密碼");
                $("#password_result").show();
                $("#password").css("border", "1px solid #a94442");
                error_passwd = true;
            }
        }

        function check_realname() {
            var realname_length = $("#realname").val().length;
            if (realname_length < 3) {
                $("#realname_result").html("名字至少兩個字!");
                $("#realname_result").show();
                $("#realname").css("border", "1px solid #a94442");
                error_realname = true;
            } else {
                $("#realname_result").hide();
                $("#realname").css("border", "1px solid #3c763d");
                error_realname = false;
            }
        }

        function check_cpasswd() {
            var password = $("#password").val();
            var retype_password = $("#cpassword").val();
            if (password !== retype_password) {
                $("#cpassword_result").html("兩者密碼不同!");
                $("#cpassword_result").show();
                $("#cpassword").css("border", "1px solid #a94442");
                error_cpasswd = true;
            } else {
                $("#cpassword_result").hide();
                $("#cpassword").css("border", "1px solid #3c763d");
                error_cpasswd = false;
            }
        }

        function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
                $("#email_result").hide();
                $("#email").css("border", "1px solid #3c763d");
                error_email = false;
            } else {
                $("#email_result").html("信箱格式不符!");
                $("#email_result").show();
                $("#email").css("border", "1px solid #a94442");
                error_email = true;
            }
        }
        $("#submitExample").click(function() {
            if(error_username === false && error_passwd === false && error_cpasswd === false && error_realname === false && error_email === false){
              $.ajax({
                  type: "POST", //傳送方式
                  url: "../controllers/join.php", //傳送目的地
                  dataType: "json", //資料格式
                  data: $('#formjoin').serialize(),
                  success: function(data) {
                      if (data.join) {
                          $("#join_result").html(data.join);
                      } else {
                          $.each(data, function(key, item) {
                              if (item) {
                                  $("#" + key + "_result").html(item);
                              } else {
                                  $("#" + key + "_result").empty();
                              }
                          });
                      }
                  },
                  error: function(jqXHR) {
                      $("#username_result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
                  }
              })
            }
          })
    });

});