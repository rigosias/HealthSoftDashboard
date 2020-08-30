<?php include('genuis_connection_login/accountManager/server.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SeffyHospital" />
    <title>HealthSoft DashBoard</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="web/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- bootstrap -->
    <link href="web/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- style -->
    <link rel="stylesheet" href="web/css/login.css">
    
	<!-- favicon -->
    <link rel="shortcut icon" href="web/img/favicon.ico" /> 
</head>
<body>
    <div class="form-title">
        <h1>Login Form</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="toggle"><i class="fa fa-user-plus"></i>
        </div>
        <div class="form formLogin">
            <h2>Login to your account</h2>

            <form method="POST"  action="index.php" >

                <?php include('genuis_connection_login/accountManager/errors.php'); ?>

                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="password" />

                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" name="login_user" >Login</button>
                <div class="forgetPassword"><a href="javascript:void(0)">Forgot your password?</a>
                </div>
            </form>

        </div>
        <style type="text/css">
            .error{
                color: red;
            }
        </style>
        <!-- <div class="form formRegister">
            <h2>Create an account</h2>

            <form method="POST" >

                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="email" placeholder="Email Address" />
                <input type="text" placeholder="Full Name" />
                <input type="tel" placeholder="Phone Number" />

                <button type="submit" >Register</button>

            </form>
        </div> -->
       <!--  <div class="form formReset">
            <h2>Reset your password?</h2>
            <form>
                <input type="email" placeholder="Email Address" />
                <button>Send Verification Email</button>
            </form>
        </div> -->
    </div>
    <!-- start js include path -->
    <script src="web/js/jquery.min.js" type="text/javascript"></script>
    <script src="web/js/login.js"></script>
    <script src="web/js/pages.js" type="text/javascript"></script>
    <!-- end js include path -->
</body>
</html>