<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator</title>
    <!-- link icon -->
    <link rel="shortcut icon" href="asset/img/logo.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="manifest" href="manifest.json">
</head>
<body class="bg-success">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card o-hidden border-0 shadow-lg w-100 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <img src="asset/img/logo.png" alt="logo aplikasi" style="
                                            max-height: 150px;
                                            margin-bottom: 20px;
                                        ">
                                        <h1 class="h4 text-gray-900 mb-4">Login Administrator</h1>
                                        <?php
                                        session_start();
                                         if(isset($_SESSION['pesan_registrasi'])) { ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['pesan_registrasi'] ?>
                                            </div>
                                        <?php } 
                                         
                                        if(isset($_SESSION['belum'])) { ?>
                                            <div class="alert alert-warning">
                                                <?= $_SESSION['belum'] ?>
                                            </div>
                                        <?php } 
                                        if(isset($_SESSION['tidak'])) { ?>
                                            <div class="alert alert-danger">
                                                <?= $_SESSION['tidak'] ?>
                                            </div>
                                        <?php } 
                                        if(isset($_SESSION['tidak_ada'])) { ?>
                                            <div class="alert alert-danger">
                                                <?= $_SESSION['tidak_ada'] ?>
                                            </div>
                                        <?php } 
                                        session_destroy();

                                        ?>
                                    </div>
                                    <form class="user" action="login_control.php" method="POST">
                                        <div class="form-group">
                                            <label for="username" class="form-label">Username Atau Email</label>
                                            <input type="text" class="form-control form-control-user"
                                            id="username" name="username"
                                            placeholder="Masukkan Username atau Email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="paaswoerd" placeholder="Password" required>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary mt-3 w-100">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p>Belum punya akun! <a class="small text-decoration-none" href="register.php">Register?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- script js -->
    <script src="asset/js/bootstrap.bundle.js"></script>
    <script src="app.js"></script>
</body>
</html>