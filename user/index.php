<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form By RentRide</title>
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon.ico" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">


    <!-- Main css -->
    <link rel="stylesheet" href="login/css/style.css">
</head>
<body>
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="login/images/4.jpg" alt="sing up image"></figure>
                        <a href="registerForm.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="login.php">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" aria-label="Email" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" aria-label="Password" minlength="8" required />
                            </div>
                            <div class="form-group">
                              <a href="registerForm.php" class="signup-image-link">Forget Password</a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="login/vendor/jquery/jquery.min.js"></script>
    <script src="login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>