<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="/assets/style/menu.css">
</head>

<body>

  <!-- Memanggil navbar -->
  <?php include __DIR__ . "/../layout/navbar.html"; ?>

  <!-- Banner Section -->
  <section class="banner"></section>

  <!-- Menu Section -->
  <section class="menu-section">

    <!-- Header Menu -->
    <div class="menu-header">
      <hr class="line1">
      <span class="menu-title">MENU</span>
      <hr class="line1">
    </div>

    <h2>Menu Angkringan</h2>

    <!-- Menu Container -->
    <div class="menu-container">

      <!-- Indomie Goreng -->
      <div class="menu-item">
        <img src="/assets/img/mie-goreng.png" alt="Indomiey">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Indomiey Goreng</h3>
            <span class="price">10k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="4.5">4.5</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <a href="/includes/order-indomie.php" class="order-btn">Order Now</a>
          </div>
        </div>
      </div>

      <!-- Sate Telur Puyuh -->
      <div class="menu-item">
        <img src="/assets/img/icon-telur-puyuh.png" alt="Telur Puyuh">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Sate Tilir Piyih</h3>
            <span class="price">5k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn" data-name="Sate Tilir Piyih" data-price="5000">Order now</button>
          </div>
        </div>
      </div>

      <!-- Sate Kulit Ayam -->
      <div class="menu-item">
        <img src="/assets/img/icon-sate-kulit.png" alt="Sate Kulit">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Sate Kilit Iyim</h3>
            <span class="price">4k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Nasi Bakar -->
      <div class="menu-item">
        <img src="/assets/img/nasi-bakar.png" alt="Nasi Kebakaran">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Nasi Kebakaran</h3>
            <span class="price">4k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="4.0">4.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Nasi Meong -->
      <div class="menu-item">
        <img src="/assets/img/nasi-meong.png" alt="Nasi Meong">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Nasi Meong</h3>
            <span class="price">3k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Nasi Tuna Kemangi -->
      <div class="menu-item">
        <img src="/assets/img/nasi-tuna.png" alt="Nasi Tuna Kemangi">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Nasi Tuna Kemangi</h3>
            <span class="price">6k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Sate Ati Ampela -->
      <div class="menu-item">
        <img src="/assets/img/sate-ampela.png" alt="Sate Ati Ampela">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Sate Ati Ampela</h3>
            <span class="price">3k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Mendoan Bakar -->
      <div class="menu-item">
        <img src="/assets/img/mendoan-bakar.png" alt="Mendoan Bakar">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Mendoan Bakar</h3>
            <span class="price">2,5k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="4.5">4.5</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <a href="/includes/ordermendoan.php" class="order-btn">Order Now</a>
          </div>
        </div>
      </div>


      <!-- Bakso Bakar -->
      <div class="menu-item">
        <img src="/assets/img/bakso-bakar.png" alt="Bakso Bakar">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Bakso Bakar</h3>
            <span class="price">3k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Susu Jahe -->
      <div class="menu-item">
        <img src="/assets/img/susu-jahe.png" alt="Susu Jahe">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Milk Jahe</h3>
            <span class="price">5k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Coffe Latte -->
      <div class="menu-item">
        <img src="/assets/img/coffe-latte.png" alt="Coffe Latte">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Coffe Latte</h3>
            <span class="price">8k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Teh Tarik -->
      <div class="menu-item">
        <img src="/assets/img/teh-tarik.png" alt="Teh Tarik">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Teh Tarik</h3>
            <span class="price">4.5k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Es Teh -->
      <div class="menu-item">
        <img src="/assets/img/es-teh.png" alt="Es Teh">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Es Teh Maniez</h3>
            <span class="price">3k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Es Jeruk -->
      <div class="menu-item">
        <img src="/assets/img/es-jeruk.png" alt="Es Jeruk">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Es Jeyuk</h3>
            <span class="price">6k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Happy Soda -->
      <div class="menu-item">
        <img src="/assets/img/soda-happy.png" alt="Soda Happy">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Soda Happy</h3>
            <span class="price">9k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span class="current-rating" data-rating="5.0">5.0</span>
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- Script -->
    <script src="/assets/js/rating.js"></script>
    <script src="menu.js"></script>
    <?php include __DIR__ . "/../layout/footer.html"; ?>

</body>

</html>