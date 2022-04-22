<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And Regisatration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="login-box">
        <div class="row">

            <!-- Begining of Login Section -->
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" autocomplete="off" required >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            <!-- End of Login Section -->

            <!-- Begining of Registration Section -->
            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Register </button>
                </form>
            </div>
            <!-- End of Registration Section -->

        </div>
    </div>
</div>
    
</body>
</html>