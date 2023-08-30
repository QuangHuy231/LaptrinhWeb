<?php

$id = $_GET['id'];

require_once 'connect.html';

$edit_sql = "SELECT * FROM users WHERE user_id = $id";

$edit_result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($edit_result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="layout">
      <h2 class="title">Đăng ký thành viên</h2>
      <form id="form" action="update.html" method="POST">
        <input type="hidden" name="sid" value="<?php echo $row['user_id']; ?>" />
        <div class="form-group">
          <p>Mã Sinh Viên</p>
          <input type="text" id="msv" name="msv" class="input-text" value="<?php echo $row['user_id']; ?>" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Họ và Tên</p>
          <input type="text" id="name" name="name" class="input-text" value="<?php echo $row['username']; ?>" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Email</p>
          <input type="email" id="email" name="email" class="input-text" value="<?php echo $row['email']; ?>" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Giới tính</p>
          <div class="gender-group">
            <div class="gender-select">
              <input type="radio" id="male" name="gender" value="Nam" <?php if($row['gioitinh'] == 'Nam') echo 'checked'; ?> />
              <label for="male">Nam</label>
            </div>
            <div class="gender-select">
              <input type="radio" id="female" name="gender" value="Nữ" <?php if($row['gioitinh'] == 'Nữ') echo 'checked'; ?> />
              <label for="female">Nữ</label>
            </div>
          </div>
          <span class="error-gender"></span>
        </div>

        <div class="form-group">
          <p>Sở thích</p>
          <div class="interest-group">
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Đọc sách" <?php if($row['sothich'] == 'Đọc sách') echo 'checked'; ?> />
              <label>Đọc sách</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Du lịch" <?php if($row['sothich'] == 'Du lịch') echo 'checked'; ?> />
              <label>Du lịch</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Âm nhạc" <?php if($row['sothich'] == 'Âm nhạc') echo 'checked'; ?> />
              <label>Âm nhạc</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Ẩm thực" <?php if($row['sothich'] == 'Ẩm thực') echo 'checked'; ?> />
              <label>Ẩm thực</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Khác" <?php if($row['sothich'] == 'Khác') echo 'checked'; ?> />
              <label>Khác</label>
            </div>
          </div>
          <span class="error-interest"></span>
        </div>

        <div class="form-group">
          <p>Quốc tịch</p>
          <select  class="select" id="nationality" name="nationality" >
            <option value="0" <?php if($row['quoctich'] == '0') echo 'selected'; ?>>Chọn Quốc Tịch</option>
            <option value="Vietnam" <?php if($row['quoctich'] == 'Vietnam') echo 'selected'; ?> >Việt Nam</option>
            <option value="China" <?php if($row['quoctich'] == 'China') echo 'selected'; ?>>China</option>
            <option value="Japan" <?php if($row['quoctich'] == 'Japan') echo 'selected'; ?>>Japan</option>
            <option value="Korea" <?php if($row['quoctich'] == 'Korea') echo 'selected'; ?>>Korea</option>
          </select>
          <span class="error-nationality"></span>
        </div>

        <div class="form-group">
          <p>Ghi chú</p>
          <textarea name="note" id="note">
            <?php echo $row['ghichu']; ?>
          </textarea>
          <span></span>
        </div>

        <input class="btn-register" name="btn-req" type="submit" value="Cập nhật"  />
      </form>
    </div>
    <!-- <script src="register.js"></script> -->
  </body>
</html>
