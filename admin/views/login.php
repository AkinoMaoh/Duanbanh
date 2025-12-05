
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    if ($user === "ChuShop" && $pass === "Matkhau123") {
        $_SESSION['username'] = $user;
        header("Location: index.php?action=listdanhmuc");
        exit();
    } else {
       echo "<script>alert('Tài khoản hoặc mật khẩu không đúng!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/assets/css/bootstrap.css">
    <link rel="stylesheet" href="views/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="views/assets/css/app.css">
    <link rel="stylesheet" href="views/assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="http://localhost/duanbanh/index.php?action=home"><img src="views/assets/images//logo.jpg" alt="Logo"  ></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Đăng nhập để sửu dụng các chức năng của hệ thống</p>

                    <form action="" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                      
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Đăng nhập</button>
                    </form>
                  
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
<?php if (!empty($error)) { ?>
    <div class="alert alert-danger mt-2">
        <?= $error ?>
    </div>
<?php } ?>