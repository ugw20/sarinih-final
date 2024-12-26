<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <link rel="stylesheet" href="/assets/style/order.css">
</head>
<body>

  <?php include __DIR__ . "/../layout/navbar.html"; ?>
  
   <!-- Product Section -->
   <section class="product-section">
    <div class="product-container">
        <!-- Image -->
        <div class="product-image">
            <img src="/assets/img/mie-goreng.png" alt="Indomiey Goyeng">
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <h1>Indomiey Goyeng</h1>
            <p class="price">Rp. 10k</p>
            <p class="description">
                Indomie goreng adalah mi instan goreng yang sangat populer di Indonesia. Rasanya yang gurih, bumbu yang meresap, dan kemudahan penyajiannya membuat Indomie goreng menjadi favorit banyak orang.
            </p>

            <p><strong>Kategori :</strong> Makanan Berat</p>
            <p><strong>Rasa :</strong> Gurih, Sedap, Kenyal</p>

            <a href="/includes/nota.php" class="ordernow-btn" data-name="Indomiey Goyeng" data-price="10000">Order Now</a>

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
    <?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
  
</html>