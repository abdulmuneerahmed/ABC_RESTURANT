<?php
//form.php
session_start();
if(isset($_SESSION["username"]))
{
 header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <script>
            $(document).ready(function(){

        $('#login').click(function(event){
                event.preventDefault();
                var username = $('.username').val();
                var password = $(".password").val();
    
                if(username !="" && password !=""){
                        
                        
                        $.post(
                                "login.php",                               
                                {
                                        username : username,
                                        password : password
                                },
                                        function(data,status){
                                                
                                        if(data == 'No'){
                                                $("#error").html("<span class='text-danger wrong'>Wrong Username and Password</span>");
                                        }
                                        else{
                                            $("body").load("home.php");
                                        }
                                }
                        );
                        
                }
                else{
                        (username == "" && password == "") ? $("#error").html("<span class='text-danger'>Incomplete Username and Password</span>") : (username == "") ? $("#error").html("<span class='text-danger'>Incomplete Username</span>") : $("#error").html("<span class='text-danger'>Incomplete Password</span>");
                }
                
        });
});
        </script>

</head>
<body>
        <div class="content">
            <div id="wrong-info"></div>
                <div class="form-content" id = "form-content">
                  <h2>Login</h2>
                        <form  class="login-form" method="post">
                        
                                <div class="wrap-context">
                                        <label for="usernameid">
                                                Username
                                        </label>
                                        <input type="text" id="usernameid" name = "username" class = "input-label username" placeholder = "Name" autocomplete = "off" >
                                </div>
                                <div class="wrap-context">
                                        <label for="passwordid">
                                                Password
                                        </label>
                                        <input type="password" id="passwordid" name = "password" class = "input-label password" placeholder = "Password" autocomplete="off" >
                                </div>
                                <div class="wrap-context">
                                        <button type="submit" class="button" name="button" id="login">Login</button>
                                </div>
                                <div class="form-message" id="error">
                                        
                                </div>
                        </form>
                </div>
        </div>
</body>
</html>
       