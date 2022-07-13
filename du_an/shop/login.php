<?php
include './dp.php';
// include './main/index.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $errors = [];

    if (empty($email)) { /////nếu name rỗng thì báo lỗi
        $errors['email'] = 'You need to enter your email';
    }
    if (empty($password)) { /////nếu name rỗng thì báo lỗi
        $errors['password'] = 'You need to enter your password';
    }
    if (empty($errors)) {
        $sql = "SELECT * FROM customers WHERE email = '$email' and password = '$password'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetch se tra ve du lieu 1 ket qua
        $result = $stmt->fetch();
        if ($result){
            $_SESSION['login_user'] = $result->user_name;
            header("location: index.php");
        } else {
            $errors['pw'] = "Your Login Name or Password is invalid";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <style>
            span {
                color: red;
            }
        </style>
        <link href="../admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                    <input class="form-control" id="" type="email" placeholder="" name="email" />
                                                <label for="inputEmail">Email address</label>
                                                <span><?php if (isset($errors['email'])) {
                                                         echo $errors['email'];
                                                            }  ?></span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="" type="password" placeholder="" name="password"/>
                                                <label for="inputPassword">Password</label>
                                                <span><?php if (isset($errors['password'])) {
                                                         echo $errors['password'];
                                                            } if (isset($errors['pw'])) {
                                                                echo $errors['pw'];
                                                                   }  ?></span>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <button class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../admin/js/scripts.js"></script>
    </body>
</html>
