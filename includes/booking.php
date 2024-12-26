<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="/assets/style/booking.css">
</head>
<body>

  <!-- Navbar -->
  <?php include __DIR__ . "/../layout/navbar.html"; ?>

  <!-- Banner Section -->
  <section class="banner"></section>


  <!-- Booking -->
  <div class="confirmation-container">
    <div class="confirmation-content">
      <h2>YOUR BOOKING CONFIRMED!</h2>
      <div class="check-icon">
        <img src="/assets/img/konfirmasi.png" alt="Konfirmasi" />
      </div>
      <p>Kami menghargai kepercayaan Anda kepada layanan kami.</p>
      <a href="/index.php" class="back-home-btn">Back To Home</a>
    </div>
  </div>
  
  <!-- footer -->
  <?php include __DIR__ . "/../layout/footer.html"; ?>

</body>
</html>

