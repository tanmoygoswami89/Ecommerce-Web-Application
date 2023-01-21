<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="header text-center"><img src="images/logo-white.png"></div><br>
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <lable>Username</lable>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>


            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <lable>Username</lable>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>