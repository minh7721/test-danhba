<?php
    session_start();
?>
<?php
    include('config/db.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['btnLogin'])){
            $useremail = $_POST['userEmail'];
            $userpass = $_POST['userPass'];

            $sql = "SELECT * FROM db_users where user_email = '$useremail' and user_pass = '$userpass'";
            $rs = mysqli_query($conn, $sql);
            if(mysqli_num_rows($rs) > 0 ){
                $row = mysqli_fetch_assoc($rs);
                $_SESSION['loginOK'] = $useremail;
                header('location: index.php');
                $_SESSION['titleSuccess'] = "<h1 class='text-info text-center'>Xin chào ".$row['user_name']."</h1>";
            }
            else {
                header('location: login.php');
            }

        }

      ?>
<div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="userEmail" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="userPass" placeholder="Password"></div>
            <div class="row">
            <button name="btnLogin" class="btn btn-primary btn-block btn-sign" type="submit">Đăng nhập</button>
            </div>
            <div class="row">
            <p>Bạn chưa có tài khoản? <a href="./signup.php">Đăng ký</a></p>
            </div>
            <a href="#" class="text-secondary">Quên mật khẩu</a> 
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>


</body>
</html>