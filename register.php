<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Administrator</title>
    <!-- link icon -->
    <link rel="shortcut icon" href="asset/img/logo.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
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
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Administrator</h1>
                                    </div>
                                    <form class="user" action="register_control.php" method="POST">
                                        <div class="form-group">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user"
                                            id="nama" name="nama"
                                            placeholder="Masukkan Nama Lengkap" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control form-control-user"
                                            id="username" name="username"
                                            placeholder="Masukkan Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="email" placeholder="Email anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" name="registrasi" class="btn btn-primary mt-3 w-100">
                                            Registrasi
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p>Sudah punya akun! <a class="small text-decoration-none" href="login.php">Login?</a></p>
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
</body>
</html>