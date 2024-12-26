<?php
include __DIR__ . "/../server/database.php"; // Pastikan koneksi database sudah benar

session_start();

$error_code = null;
$isLoggedIn = false;
$userData = [];
$contactExists = false;

if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
    $userId = $_SESSION['user_id'];

    // Ambil data pengguna berdasarkan session user_id
    $sql = "SELECT * FROM user_register WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $userData = $result->fetch_assoc();
    }
}

// Proses pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email']; // email yang diinputkan pengguna
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Cek apakah email terdaftar di user_register
    $sql_check = "SELECT * FROM user_register WHERE email = ?";
    $stmt_check = $db->prepare($sql_check); // Gantilah $conn menjadi $db
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $check_result = $stmt_check->get_result();

    if ($check_result && $check_result->num_rows > 0) {
        // Insert data ke tabel contact
        $sql_insert = "INSERT INTO contact (name, email, phone, subject, message) 
                       VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $db->prepare($sql_insert); // Gantilah $conn menjadi $db
        $stmt_insert->bind_param("sssss", $name, $email, $phone, $subject, $message);

        if ($stmt_insert->execute()) {
            header("Location: /includes/komfirmasimasukan.php");
            exit();
        } else {
            $error_code = "Error: " . $stmt_insert->error;
        }
    } else {
        $error_code = "Email tidak terdaftar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="/assets/style/contact.css">
  <script>
    function checkLogin() {
      // Cek status login dari PHP melalui session
      var isLoggedIn = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;

      if (!isLoggedIn) {
        // Jika belum login, tampilkan pesan konfirmasi
        var userChoice = confirm('Anda belum login, harap login terlebih dahulu. Apakah Anda ingin login sekarang?');

        if (userChoice) {
          // Jika pengguna memilih 'Ya', arahkan ke halaman login
          window.location.href = '/server/Login.php'; 
          return false; // Mencegah pengiriman form
        } else {
          // Jika pengguna memilih 'Tidak', reset inputan form
          document.getElementById('contactForm').reset();
          return false; // Mencegah pengiriman form
        }
      }

      return true; // Lanjutkan dengan pengiriman form
    }
  </script>
</head>
<body>

<?php include __DIR__ . "/../layout/navbar.html"; ?>

<!-- Contact -->
<div class="contact-form-container">
  <hr class="line1">
  <h2>CONTACT US</h2>
  <hr class="line1">
  <p>Kirimkan Masukan Kepada Kami</p>
  <form class="contact-form" action="" id="contactForm" method="POST" onsubmit="return checkLogin()">
    <div class="form-group">
        <input type="text" name="name" id="name" placeholder="Name" required>
        
        <?php if ($isLoggedIn): ?>
            <!-- Jika sudah login, tampilkan email dan set readonly -->
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $userData['email']; ?>" readonly required>
        <?php else: ?>
            <!-- Jika belum login, tampilkan input email kosong -->
            <input type="email" name="email" id="email" placeholder="Email" required>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <input type="text" name="subject" id="subject" placeholder="Subject" required>
        <input type="tel" name="phone" id="phone" placeholder="Phone" required>
    </div>
    
    <div class="form-group">
        <textarea name="message" id="message" placeholder="Message" required></textarea>
    </div>

    <!-- Tombol Send hanya akan aktif jika form valid -->
    <button type="submit" id="submitBtn" class="send">Send</button>
</form>

</div>

<?php include __DIR__ . "/../layout/footer.html"; ?>

</body>
</html>
