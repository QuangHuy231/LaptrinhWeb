<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slide Show</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <a class="active" href="../SlideShow/index.php">Slide Show</a>
      <a href="../Register/index.php">Register</a>
      <a href="../Cart/index.php">Cart</a>
    </header>
    <div class="layout">
      <div class="slide-container">
        <button id="prev"><</button>
        <button id="next">></button>
        <div class="slide-show">
          <div class="image show">
            <img src="Anh/0.JPG" alt="" />
          </div>
          <div class="image">
            <img src="Anh/1.JPG" alt="" />
          </div>
          <div class="image">
            <img src="Anh/2.JPG" alt="" />
          </div>
          <div class="image">
            <img src="Anh/3.JPG" alt="" />
          </div>
          <div class="image">
            <img src="Anh/4.JPG" alt="" />
          </div>
          <div class="image">
            <img src="Anh/5.JPG" alt="" />
          </div>
        </div>
        <p class="description">
          Ảnh <span id="number">1</span> /
          <span id="demo">6</span>
        </p>
      </div>
    </div>
    <script src="slide.js"></script>
  </body>
</html>
