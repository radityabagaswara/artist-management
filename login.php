<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='assets/vendor/bootstrap/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/styles.css'>
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="container page">
            <form action="login_proses.php" class="login-form">
                <div class="content-header text-center mb-5">
                    <h3>Login</h3>
                    <p>Login to your account.</p>
                </div>
                <div class="form-group">
                    <label id="email" name="email" class="form-label">Email</label>
                    <input class="form-control" type="text" id="email">
                </div>
                <label id="password" name="password" class="form-label">Password</label>
                <input class="form-control" type="password" id="pwd">
                <div class="text-end">
                    <a href="">Forgot Password?</a>
                </div>
                <div class="text-end">
                    <a href="">Sign Up Now!</a>
                </div>
                <div>
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src='assets/vendor/bootstrap/js/bootstrap.min.js'></script>
</body>

</html>