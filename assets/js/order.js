document.querySelector(".ordernow-btn").addEventListener("click", (e) => {
    const itemName = e.target.dataset.name;  // Mengambil nama item dari data-name
    const itemPrice = e.target.dataset.price;  // Mengambil harga item dari data-price
  
    // Ambil data sebelumnya dari localStorage
    let orders = JSON.parse(localStorage.getItem("orders")) || [];
  
    // Tambahkan item baru
    const existingItem = orders.find(item => item.name === itemName);
    if (existingItem) {
        existingItem.quantity += 1;  // Jika sudah ada, tambah quantity
    } else {
        orders.push({ name: itemName, price: itemPrice, quantity: 1 });  // Jika belum ada, tambahkan item baru
    }
  
    // Simpan kembali ke localStorage
    localStorage.setItem("orders", JSON.stringify(orders));

    // Menampilkan alert bahwa item sudah ditambahkan ke nota
    alert(`${itemName} berhasil ditambahkan ke nota!`);
});
