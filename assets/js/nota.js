// Fungsi untuk memuat data pesanan dari localStorage
function loadOrders() {
  const orders = JSON.parse(localStorage.getItem("orders")) || [];
  const orderList = document.getElementById("order-list");
  let totalPrice = 0;

  orderList.innerHTML = ""; // Kosongkan daftar sebelum memuat
  orders.forEach((order, index) => {
    totalPrice += order.price * order.quantity;

    // Tambahkan item ke daftar
    orderList.innerHTML += `
      <div class="order-item">
        <div class="details">
          <span>${order.name}</span>
          ${order.note ? `<div class="note">Catatan: ${order.note}</div>` : ""}
          <span class="catatan" onclick="editNote(${index})">+ Catatan</span>
        </div>
        <div class="actions">
          <button onclick="updateQuantity(${index}, -1)">-</button>
          <span>${order.quantity}</span>
          <button onclick="updateQuantity(${index}, 1)">+</button>
        </div>
        <div>Rp ${(order.price * order.quantity).toLocaleString("id-ID")}</div>
      </div>
    `;
  });

  // Perbarui total harga
  document.getElementById("total-price").textContent = `Rp ${totalPrice.toLocaleString("id-ID")}`;
}

// Fungsi untuk memperbarui jumlah item
function updateQuantity(index, change) {
  const orders = JSON.parse(localStorage.getItem("orders")) || [];
  orders[index].quantity += change;

  if (orders[index].quantity <= 0) {
    orders.splice(index, 1); // Hapus item jika jumlah 0
  }

  localStorage.setItem("orders", JSON.stringify(orders));
  loadOrders();
}

// Fungsi untuk menambah catatan
function editNote(index) {
  const note = prompt("Tambahkan catatan untuk item ini:");
  const orders = JSON.parse(localStorage.getItem("orders")) || [];
  orders[index].note = note || "Tanpa catatan";
  localStorage.setItem("orders", JSON.stringify(orders));
}

// Fungsi untuk kembali ke halaman menu
document.getElementById("add-more-btn").addEventListener("click", () => {
  window.location.href = "/includes/menu.php";
});

// Fungsi untuk menangani konfirmasi
document.getElementById("confirm-btn").addEventListener("click", () => {
  alert("Pesanan Anda telah dikonfirmasi!");
  localStorage.removeItem("orders"); 
  loadOrders(); // Segarkan halaman
  window.location.href = "/includes/konfirmasi-orderan.php";
});

// Muat pesanan saat halaman dimuat
loadOrders();
