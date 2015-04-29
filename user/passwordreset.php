<?php ?>
<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/default.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <!--   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../ajax_request/passwordreset.js"></script>



    <script type="text/javascript">


    </script>


</head>
<body class="bg-black">

<div class="form-box" id="login-box">
    <div class="header">Password Reset</div>
    <form id="passwordreset" action="passwordreset.php"  method="post">

        <div class="body bg-gray">


            <div id="alert-errmsg" class="alert alert-danger"></div>

            <div class="form-group">
                <input type="password" name="oldpassword" class="form-control" placeholder="Old Password"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="New Password"/>
            </div>
            <div class="form-group">
                <input type="password" name="password2" class="form-control" placeholder="Confirm password"/>
            </div>
        </div>
        <div class="footer">

            <button type="submit" class="btn bg-olive btn-block">Sign me up</button>

            <a href="../login.php" class="text-center">Login with New Password</a>
        </div>
    </form>

   <!-- <div class="margin text-center">
        <span>Register using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>-->
</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>