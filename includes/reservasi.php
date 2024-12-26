<?php
// File: includes/login.php
include __DIR__ . "/../server/database.php";

session_start();

$error_code = 0; // Variabel untuk kode error
$isLoggedIn = false;
$userData = [];
$reservationExists = false; // Flag untuk memeriksa apakah reservasi sudah ada

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
  $isLoggedIn = true;
  $userId = $_SESSION['user_id'];

  // Ambil data pengguna dari tabel user_register
  $sql = "SELECT * FROM user_register WHERE id = ?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $userData = $result->fetch_assoc();
  }

  // Cek jika user sudah melakukan reservasi
  $sqlCheckReservation = "SELECT * FROM reservasi WHERE user_username = ? LIMIT 1";
  $stmtCheck = $db->prepare($sqlCheckReservation);
  $stmtCheck->bind_param("s", $userData['username']);
  $stmtCheck->execute();
  $reservationResult = $stmtCheck->get_result();

  if ($reservationResult && $reservationResult->num_rows > 0) {
    $reservationExists = true; // Set flag menjadi true jika reservasi sudah ada
  }
}

// Proses form jika data dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isLoggedIn && !$reservationExists) {
  $name = $userData['fulname']; // Nama pengguna diambil dari data login
  $email = $userData['email']; // Email pengguna diambil dari data login
  $phone = trim($_POST['phone'] ?? '');
  $date = trim($_POST['date'] ?? '');
  $time = trim($_POST['time'] ?? '');
  $person = intval($_POST['person'] ?? 0);

  // Simpan ke tabel reservasi
  if (!empty($phone) && !empty($date) && !empty($time) && $person > 0) {
    // Sesuaikan dengan struktur tabel
    $sql = "INSERT INTO reservasi (user_username, user_email, phone, date, time, person) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssssi", $userData['username'], $userData['email'], $phone, $date, $time, $person);

    if ($stmt->execute()) {
      // Berhasil disimpan
      header("Location: /includes/booking.php");
      exit();
    } else {
      $error_code = 3; // Gagal menyimpan data
    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Page</title>
  <link rel="stylesheet" href="/assets/style/reservasi.css">
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
      const reservationExists = <?php echo json_encode($reservationExists); ?>;
      const submitButton = document.getElementById('submitButton');
      const reservationForm = document.getElementById('reservationForm');

      // Nonaktifkan tombol dan tampilkan pesan error jika reservasi sudah ada
      if (reservationExists) {
        submitButton.disabled = true;
        submitButton.textContent = "Anda sudah melakukan reservasi";
        submitButton.style.backgroundColor = "#ff0000"; // Merah untuk error
      }

      submitButton.addEventListener('click', (event) => {
        if (!isLoggedIn) {
          event.preventDefault(); // Mencegah pengiriman form
          const userChoice = confirm("Anda belum login, harap login lebih dahulu!!\n\nPilih 'Ya' untuk login atau 'Tidak' untuk reset form.");
          if (userChoice) {
            // Redirect ke halaman login
            window.location.href = '/server/Login.php';
          } else {
            // Reset form
            reservationForm.reset();
          }
        }
      });
    });
  </script>

</head>

<body>

  <?php include __DIR__ . "/../layout/navbar.html"; ?>

  <section class="banner"></section>

  <!-- Reservation Section -->
  <section class="reservation-section">
    <!-- Vector Images -->
    <hr class="line1">
    <h2 class="section-title">RESERVATION</h2>
    <hr class="line1">
    <h1 class="main-title">Pesan Kursi Sekarang di sini Dengan Mudah</h1>

    <div class="reservation-container">
      <!-- Image -->
      <img src="/assets/img/icon-reservasi.png" alt="Reservation Place" class="reservation-image">

      <!-- Reservation Form -->
      <div class="reservation-form">
        <hr class="line2">
        <h2 class="form-title">RESERVATION</h2>
        <hr class="line2">
        <h3 class="form-subtitle">Pesan meja anda sekarang</h3>
        <p class="form-description">
          Orang-orangnya, makanannya, dan lokasinya yang strategis, menjadikan tempat yang sempurna
          untuk teman dan keluarga untuk berkumpul dan bersenang-senang.
        </p>

        <form id="reservationForm" action="/includes/reservasi.php" method="POST">
          <?php if ($isLoggedIn): ?>
            <!-- Jika user sudah login -->
            <div class="form-group">
              <input
                type="text"
                name="name"
                placeholder="Name"
                required
                value="<?php echo htmlspecialchars($userData['fulname']); ?>"
                readonly>
              <input
                type="email"
                name="email"
                placeholder="Email"
                required
                value="<?php echo htmlspecialchars($userData['email']); ?>"
                readonly>
            </div>
          <?php else: ?>
            <!-- Jika user belum login -->
            <div class="form-group">
              <input
                type="text"
                name="name"
                placeholder="Name"
                required>
              <input
                type="email"
                name="email"
                placeholder="Email"
                required>
            </div>
          <?php endif; ?>

          <!-- Phone and Date -->
          <div class="form-group">
            <input type="tel" name="phone" placeholder="Phone" required>
            <input type="date" name="date" required>
          </div>

          <!-- Time and Number of People -->
          <div class="form-group">
            <input type="time" name="time" required>
            <input type="number" name="person" placeholder="Person" required min="1">
          </div>

          <!-- Submit Button -->
          <button type="submit" id="submitButton">Book a table</button>
        </form>

      </div>
    </div>

  </section>
  <!-- Gallery Section -->
  <section class="gallery-section">
    <hr class="line3">
    <h2>Gallery</h2>
    <hr class="line3">
    <div class="gallery-container">
      <img src="/assets/img/icon-reservasi-galery.png" alt="Gallery Image">
    </div>
  </section>

  <?php include __DIR__ . "/../layout/footer.html"; ?>

</body>

</html>