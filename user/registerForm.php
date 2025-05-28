<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sign up form for registering new users.">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <title>Sign Up Form By RentRide</title>
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon.ico" />
    <!-- Font Icon -->
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Main css -->

    <link rel="stylesheet" href="login/css/style.css">
</head>
<body>

        <!-- Sign up form -->
        <div class="mt-5">
        <section class="signup mb-0">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" class="register-form" id="register-form" action="register.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nm" id="name" placeholder="Your Name" aria-label="Name" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account-circle"></i></label>
                                <input type="text" name="unm" id="username" placeholder="Username" aria-label="Username" required />
                            </div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="mob" id="phone" placeholder="Phone Number" aria-label="Phone Number" pattern="[0-9]{10}" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" aria-label="Email" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" aria-label="Password" minlength="8" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="sub" id="sub" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="login/images/img.jpg" alt="Sign up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already a member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="login/js/main.js"></script>
</body>
</html>
