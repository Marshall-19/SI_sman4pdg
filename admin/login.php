<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'components/head.php' ?>

</head>

<body class="bg-blue">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">/div>
                <h1 style="color: black">Login</h1>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label style="color: black" for="">Username</label>
                                <input name="username" type="text" class="form-control" required="required" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label style="color: black" for="">Password</label>
                                <input name="password" type="password" class="form-control" required="required">
                            </div>
                        </div>
                        <button name="login" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <!-- aksi login untuk menguhungkan ke halaman admin -->
                    <?php
                    if (isset($_POST['login'])) {
                        $user = $_POST['username'];
                        $pass = $_POST['password'];

                        include('components/koneksi.php');
                        $ambil = $koneksi->query("select * from admin where username='$user'and password='$pass' ");
                        $cek = $ambil->num_rows;
                        if ($cek == 1) {
                            session_start();
                            $_SESSION['akun'] = $ambil->fetch_object();
                            echo "<script>window.location='index.php?page=index'</script>";
                        } else {
                            echo "<script>
                        alert('Username / Password salah');
                        window.location='login.php'
                        </script>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <?php include 'components/script.php' ?>

</body>

</html>