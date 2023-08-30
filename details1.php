<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--styles-->
    <link href="./styles.css" rel="stylesheet" />
    <title>Trang chủ - ASM WEB1013</title>
  </head>
  <body>
    <div class="header">
      <h1>MODAL SHOP</h1>
      <p>
        One Piece Figure - Perfect for fans of Luffy's infectious optimism and
        determination to become the Pirate King!
      </p>
    </div>
    <div class="topnav">
      <a href="index.php">HOME</a>
      <a href="#">PRODUCTS</a>
      <a href="#">CONTACT</a>
      <a href="#" style="float: right">Đăng nhập / Đăng ký</a>
    </div>
        <div class="single-product-main-content">
          <div class="layout">
            <div class="single-product-page">
              <div class="left">
                <img src="./images/Mo-hinh-Demon-Slayer.jpg" />
              </div>
              <div class="right">
                <span class="name">{product.product_name}</span>
                <span class="old-price">&#36;10</span>
                <span class="new-price">&#36;5</span>
                <span class="desc">{product.description}</span>
                <div class="cart-buttons">
                  <div class="quantity-buttons">
                    <span class="quantity-buttons-span">-</span>
                    <span class="quantity-buttons-span">1</span>
                    <span class="quantity-buttons-span">+</span>
                  </div>
                  <button class="add-to-cart-button">
                    <i class="ri-shopping-cart-line" style="font-size: 20px"></i>
                    ADD TO CART
                  </button>
                </div>
    
                <span class="divider"></span>
              </div>
            </div>
        </a>
      </div>
          
    <div class="footer">
      <div class="footer-content">
        <div class="col">
          <div class="title">About</div>
          <div class="text">
            Welcome to our model shop! We offer a wide range of high-quality
            model kits and collectibles for hobbyists and enthusiasts alike.
            Explore our collection of intricately detailed models, including
            cars, airplanes, ships, and more. Whether you're a seasoned builder
            or just starting, we have something for everyone. Enjoy the thrill
            of assembling and displaying these miniature masterpieces. Happy
            modeling!
          </div>
        </div>
        <div class="col">
          <div class="title">Contact</div>
          <div class="c-item">
            <FaLocationArrow />
            <div class="text">
              70 To Ky Street, Tan Hung Thuan Ward, District 12, Ho Chi Minh
              City, Vietnam
            </div>
          </div>
          <div class="c-item">
            <FaMobileAlt />
            <div class="text">Phone: 0854 345 978</div>
          </div>
          <div class="c-item">
            <FaEnvelope />
            <div class="text">Email: modelstore@gmail.com</div>
          </div>
        </div>
        <div class="col">
          <div class="title">Categories</div>
          <span class="text">One Piece</span>
          <span class="text">Naruto</span>
          <span class="text">Demon Slayder</span>
          <span class="text">Dragon Ball</span>
        </div>
        <div class="col">
          <div class="title">Pages</div>
          <span class="text">Home</span>
          <span class="text">About</span>
          <span class="text">Privacy Policy</span>
          <span class="text">Returns</span>
          <span class="text">Terms & Conditions</span>
          <span class="text">Contact Us</span>
        </div>
      </div>
    </div>
  </body>
</html>
