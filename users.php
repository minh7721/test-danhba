<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div id="header" style="margin: 16px 0 32px 0;">
        <ul class="nav justify-content-center">
            <li class="nav-item" style="font-size: 24px;">
                <a class="nav-link active text-success" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item" style="font-size: 24px;">
                <a class="nav-link active text-info" aria-current="page" href="#">Office</a>
            </li>
            <li class="nav-item" style="font-size: 24px;">
                <a class="nav-link active text-warning" aria-current="page" href="#">Employees</a>
            </li>
            <li class="nav-item" style="font-size: 24px;">
                <a class="nav-link active text-danger" aria-current="page" href="#">Users</a>
            </li>

        </ul>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã user</th>
                    <th scope="col">Tên user</th>
                    <th scope="col">Email</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //B1: Kết nối với csdl
                $conn = mysqli_connect('localhost', 'root', '', 'danhba_dhtl');
                if (!$conn) {
                    die("Kết nối thất bại");
                }
                //B2: Truy ván SQL
                $sql = "SELECT * FROM db_users";
                $result = mysqli_query($conn, $sql);
                //B3: Thực thi câu lệnh truy vấn
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['user_id'] ?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-info text-white me-2">Sửa</button>
                                    <a href="./delete.php?user_id=<?php echo $row['user_id']; ?>"><button type="button" class="btn btn-danger text-white me-2">Xóa</button></a>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>


    <script src="./bootstrap-5.1.1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>