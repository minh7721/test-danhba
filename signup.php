<?php
include('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="./css/login.css">
    <title>Đăng ký</title>
</head>

<body>
<?php
                if (isset($_POST['btnDangKy'])) {
                    $Name = $_POST['Name'];
                    // $Avatar = $_POST['Avatar'];
                    // $Birthday = $_POST['Birthday'];
                    // $GioiTinh = $_POST['GioiTinh'];
                    $Phone = $_POST['Phone'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    //SQL
                    $sql = "insert into db_users(user_name, user_phone, user_email, user_pass) 
                      values('$Name','$Phone','$Email','$Password')";
                    $rs = mysqli_query($conn, $sql);
                    header('location:login.php');  
                }
                ?>
    <div class="login-dark">
        <form method="POST">
            <h4 class="text-white">SIGNUP FORM</h3>
                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <div class="form-floating mb-3">
                                <input type="text" name="Name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="file" name="Avatar" id="file" class="form-control form-control-lg" />
                            <label class="form-label" for="file">Chọn file</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <div class="form-floating mb-3">
                                <input type="date" name="Birthday" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Birthday</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Giới tính: </h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="maleGender" value="Nam" />
                            <label class="form-check-label" for="maleGender">Nam</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="femaleGender" value="Nữ" checked />
                            <label class="form-check-label" for="femaleGender">Nữ</label>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="form-outline">
                        <div class="form-floating mb-3">
                            <input type="Tel" name="Phone" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Số điện thoại</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-outline">
                        <div class="form-floating mb-3">
                            <input type="email" name="Email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-outline">
                        <div class="form-floating mb-3">
                            <input type="Password" name="Password" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Mật Khẩu</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-2">
                    <input name="btnDangKy" class="btn btn-primary btn-lg btn-dangky" type="submit" value="Đăng ký" />
                </div>
                <p style="margin-top: 12px;">Bạn đã có tài khoản <a href="./login.php">Đăng nhập</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>