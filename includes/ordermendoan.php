<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <link rel="stylesheet" href="/assets/style/order.css">
</head>
<body>

  <!-- Navbar -->
  <!-- Memanggil navbar -->
  <?php include __DIR__ . "/../layout/navbar.html"; ?>
  
   <!-- Product Section -->
   <section class="product-section">
    <div class="product-container">
        <!-- Image -->
        <div class="product-image">
            <img src="/assets/img/icon-order-top.png" alt="Mendoan Bakar">
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <h1>Mendoan Bakar</h1>
            <p class="price">Rp. 2,5k</p>
            <p class="description">
                Mendoan bakar adalah camilan khas Indonesia yang dibuat dari tempe yang dibalut tepung lalu digoreng setengah matang, kemudian dibakar hingga sedikit gosong. Rasanya gurih, renyah di luar, dan lembut di dalam.
            </p>

            <p><strong>Kategori :</strong> Cemilan</p>
            <p><strong>Rasa :</strong> Renyah, Pedas, Manis Gurih</p>

            <a href="/includes/nota.php" class="ordernow-btn" data-name="Mendoan Bakar" data-price="2500">Order Now</a>

        </div>
    </div>

    <script src="/assets/js/order.js"></script>

    <!-- Tabs Section -->
    <div class="tabs">
        <button class="tab active">Deskripsi</button>
        <button class="tab">Review(0)</button>
    </div>
    <div class="tab-content">
        <p>
            "Angkringan kami berkomitmen untuk terus mengembangkan dan memperluas jangkauan bisnisnya secara digital. Dengan fokus pada inovasi dan efisiensi, perusahaan secara aktif mencari cara-cara baru untuk meningkatkan layanannya, mengoptimalkan sumber daya, serta memperluas pasar melalui berbagai saluran online. Tujuan utama adalah membangun bisnis online yang skalabel dan menguntungkan, dengan selalu mengutamakan kualitas dan kepuasan pelanggan."
        </p>
    </div>

</section>
<!-- Menu Section -->
<section class="menu-section">

    <h2>Hidangan Terkait</h2>

    <!-- Menu Container -->
    <div class="menu-container">
      <!-- Sate Ati Ampela -->
      <div class="menu-item">
        <img src="/assets/img/icon-order-sateampela.png" alt="ampela">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Sate Ati Ampela</h3>
            <span class="price">3k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span>5.0</span>
              <span class="stars">★★★★★</span>
            </div>
            <button class="order-btn" href="/">Order Now</button>
          </div>
        </div>
      </div>

      <!-- Sate Telur Puyuh -->
      <div class="menu-item">
        <img src="/assets/img/icon-telur-puyuh.png" alt="telur puyuh">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Sate Tilir Piyih</h3>
            <span class="price">5k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span>4.0</span>
              <span class="stars">★★★★☆</span>
            </div>
            <button class="order-btn">Order Now</button>

          </div>
        </div>
      </div>

      <!-- Bakso Bakar -->
      <div class="menu-item">
        <img src="/assets/img/bakso-bakar.png" alt="bakso bakar">
        <div class="menu-item-content">
          <div class="h3-price">
            <h3>Bakso Bakar</h3>
            <span class="price">4k</span>
          </div>
          <div class="rating-order">
            <div class="rating">
              <span>5.0</span>
              <span class="stars">★★★★★</span>
            </div>
            <button class="order-btn">Order Now</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Memanggil navbar -->
    <?php include __DIR__ . "/../layout/footer.html"; ?>

</body>
  
</html>