<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Orderan</title>
  <link rel="stylesheet" href="/assets/style/konfirmasi-orderan.css">
</head>
<body>

  <!-- Navbar -->
  <?php include __DIR__ . "/../layout/navbar.html"; ?>

  <!-- Konfirmasi orderan -->
  <div class="confirmation-container">
    <div class="confirmation-content">
      <h2>YOUR ORDER IS CONFIRMED!</h2>
      <div class="check-icon">
        <img src="/assets/img/konfirmasi.png" alt="Konfirmasi" />
      </div>
      <p>Pesanan sudah diterima. Silahkan ditunggu yaww pesanannyaa</p>
      <a href="/index.php" class="back-home-btn">Back To Home</a>
    </div>
  </div>

  <!-- footer -->
  <?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>

