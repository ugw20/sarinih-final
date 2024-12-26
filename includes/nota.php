<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nota Pembelian</title>
  <link rel="stylesheet" href="/assets/style/nota.css">
</head>

<body>
  <div class="nota-container">
    <div class="header">
      <h2>Pembelianmu</h2>
      <button id="add-more-btn">+ Tambah</button>
    </div>
    <div id="order-list">
      <!-- Pesanan akan ditambahkan secara dinamis di sini -->
    </div>
    <div class="total">
      <span>Total harga</span>
      <span id="total-price">Rp 0</span>
    </div>
    <button id="confirm-btn">Konfirmasi</button>
  </div>

  </script>
  <script src="/assets/js/nota.js"></script>

  <!-- footer -->
  <?php include __DIR__ . "/../layout/footer.html"; ?>

</body>

</html>
