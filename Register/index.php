<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="layout">
      <h2 class="title">Đăng ký thành viên</h2>
      <form id="form" action="./req.php" method="POST">
        <div class="form-group">
          <p>Mã Sinh Viên</p>
          <input type="text" id="msv" name="msv" class="input-text" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Họ và Tên</p>
          <input type="text" id="name" name="name" class="input-text" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Email</p>
          <input type="email" id="email" name="email" class="input-text" />
          <span></span>
        </div>
        <div class="form-group">
          <p>Giới tính</p>
          <div class="gender-group">
            <div class="gender-select">
              <input type="radio" id="male" name="gender" value="Nam" />
              <label for="male">Nam</label>
            </div>
            <div class="gender-select">
              <input type="radio" id="female" name="gender" value="Nữ" />
              <label for="female">Nữ</label>
            </div>
          </div>
          <span class="error-gender"></span>
        </div>

        <div class="form-group">
          <p>Sở thích</p>
          <div class="interest-group">
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Đọc sách" />
              <label>Đọc sách</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Du lịch" />
              <label>Du lịch</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Âm nhạc" />
              <label>Âm nhạc</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Ẩm thực" />
              <label>Ẩm thực</label>
            </div>
            <div class="interest-select">
              <input type="checkbox" name="interest" value="Khác" />
              <label>Khác</label>
            </div>
          </div>
          <span class="error-interest"></span>
        </div>

        <div class="form-group">
          <p>Quốc tịch</p>
          <select  class="select" id="nationality" name="nationality" >
            <option value="0">Chọn Quốc Tịch</option>
            <option value="Vietnam">Việt Nam</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea</option>
          </select>
          <span class="error-nationality"></span>
        </div>

        <div class="form-group">
          <p>Ghi chú</p>
          <textarea name="note" id="note"></textarea>
          <span></span>
        </div>

        <input class="btn-register" name="btn-req" type="submit" value="Đăng ký"  />
      </form>
    </div>
    <!-- <script src="register.js"></script> -->
  </body>
</html>
