<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="listUser.css">
</head>
<body>
    <div class="layout">
        <h1>Danh sách người dùng</h1>
        <table>
            <tr>
                <th>Mã số</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Sở thích</th>
                <th>Quốc tịch</th>
                <th>Ghi chú</th>
                <th>Hành động</th>
            </tr>
            <?php

                require_once 'connect.html';

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['gioitinh'] . "</td>";
                    echo "<td>" . $row['sothich'] . "</td>";
                    echo "<td>" . $row['quoctich'] . "</td>";
                    echo "<td>" . $row['ghichu'] . "</td>";
                    echo "<td><a href='delete.html?id=" . $row['user_id'] . "'>Xóa</a>
                    <a href='edit.html?id=" . $row['user_id'] . "'>Sửa</a></td>";

                    echo "</tr>";
                }

            ?>
    </div>
</body>
</html>

