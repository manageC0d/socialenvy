<!DOCTYPE html>
<html lang="en">
<head>


    <script src="js/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $("document").ready(function(){

           // $(".alert-error").hide();

            $("#login").submit(function(){
               // $(".alert-error").hide();

                var data = {
                    "action": "Login"
                };
                data = $(this).serialize() + "&" + $.param(data);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "loginDetails.php", //Relative or absolute path to response.php file
                    data: data,
                    success: function(data, status) {
                        if(data=="Success")
                        {
                            $(".alert-error").show();
                            $(".alert-error").html(data);
                           // window.location.href="home.php";
                           // alert("successful");
                        }else
                        {
                            $(".alert-error").show();
                            $(".alert-error").html(data);
                            //alert("unsuccessful");
                             //window.location.href="signup.php";
                        }
                    },
                    error: function(xhr, desc, err) {
                       // $(".alert-error").show();
                       //$(".alert-error").html("Details: " + desc + "\nError:" + err);
                    }
                });
                return false;
            });
        });
    </script>


</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="span12 center login-header">

            </div><!--/span-->
        </div><!--/row-->

        <div class="row-fluid">
            <div class="well span5 center login-box">
                <div class="alert alert-info">
                    Please login with your Email_id and Password.
                </div>
                <div class="alert alert-error"></div>

                <form id="login" action="login.php" method="post" >
                    <table>
                       <!-- <tr>
                            <td><div id="loginMsg" class="alert alert-danger"></div></td>
                        </tr>-->
                        <tr>

                            <td>Email <input id="email" type="text" placeholder="please enter your email" name="email" required="required" /></td>



                        </tr>

                        <tr>

                            <td>Password <input type="password" placeholder="please enter your password" id="password" name="password" required="required" /> </td>



                        </tr>
                        <tr>

                            <td><div align="center"><input type="submit" class="no-margin-top" value="Login" /> <input type="reset" class="no-margin-top" value="Reset" /><input type="button" class="no-margin-top" value="SignUp" onclick="location.href = 'signup.php'" />

                    </table>
                </form>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->




</body>
</html>
