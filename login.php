<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='assets/vendor/bootstrap/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/styles.css'>
    <link rel="stylesheet" href='assets/css/login.css'>
    <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="container page">
            <form action="login_proses.php" class="login-form" method="post">
                <div class="content-header text-center mb-5">
                    <h3>Login</h3>
                    <p>Please enter your email and password.</p>
                </div>
                <div class="input-group">
                    <input class="form-control" type="text" id="email" placeholder="Email">
                </div>
                <div class="input-group mt-4">
                    <input class="form-control" type="password" id="pwd" placeholder="Password">
                    <div class="input-group-addon">
                        <a class="btn-text" onclick='passwordSee()' type="button"><i class="fa fa-eye-slash" id="pwd-icon" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="text-end">
                    <a href="">Forgot Password?</a>
                </div>
                <div class="button-login">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src='assets/vendor/bootstrap/js/bootstrap.min.js'></script>

    <script>
        function passwordSee() {
            if ($('#pwd').attr('type') == 'text') {
                $('#pwd').attr('type', 'password');
                $('#pwd-icon').addClass("fa-eye-slash");
                $('#pwd-icon').removeClass("fa-eye");
            } else {
                $('#pwd').attr('type', 'text');
                $('#pwd-icon').removeClass("fa-eye-slash");
                $('#pwd-icon').addClass("fa-eye");

            }
        }
    </script>
</body>

</html>