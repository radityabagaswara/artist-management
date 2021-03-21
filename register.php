<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='assets/vendor/bootstrap/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/styles.css'>
    <link rel="stylesheet" href='assets/css/register.css'>
    <title>Register</title>

</head>

<body>
    <div class="register">
        <div class="container page">
            <form action="register_proses.php" class="register-form" method="post">
                <div class="content-header text-center mb 5">
                    <h3>Register</h3>
                    <p>Start with your fresh account</p>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text" id="email" placeholder="Email">
                    </div>
                    <div class="input-group mt-4">
                        <input class="form-control" type="text" id="name" placeholder="Name">
                    </div>
                    <div class="input-group mt-4">
                        <input class="form-control" type="password" id="pwd" placeholder="Password">
                    </div>
                    <div class="input-group mt-4">
                        <input class="form-control" type="password" id="repwd" placeholder="Re-type Password">
                    </div>
                    <div class="agreement mt-4 text-center">
                        <input type="checkbox" id="tos" value="agreement">
                        <label id="agreement" name="agreement" class="form-label">I Agree to the Terms of Services and Privacy Policy</label>
                    </div>

                </div>
                <div class="button-register">
                    <button class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src='assets/vendor/bootstrap/js/bootstrap.min.js'></script>
</body>

</html>