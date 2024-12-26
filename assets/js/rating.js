// Fungsi untuk menyorot bintang yang sesuai dengan rating
function highlightStars(stars, value) {
    stars.forEach(star => {
      if (star.getAttribute('data-value') <= value) {
        star.style.color = 'gold'; // Menyorot bintang yang dipilih
      } else {
        star.style.color = 'lightgray'; // Mengembalikan warna bintang yang belum dipilih
      }
    });
  }
  
  // Fungsi untuk mengupdate rating setelah pengguna memilih bintang
  function updateRating(newRating, ratingElement) {
    const currentRating = parseFloat(ratingElement.getAttribute('data-rating'));
    const newAverage = (currentRating + newRating) / 2; // Menghitung rata-rata rating baru
    ratingElement.setAttribute('data-rating', newAverage.toFixed(1)); // Menyimpan rating baru ke atribut
    ratingElement.textContent = newAverage.toFixed(1); // Memperbarui teks rating yang ditampilkan
  }
  
  // Menambahkan event listener untuk setiap menu
  const menuItems = document.querySelectorAll('.menu-item');
  menuItems.forEach(menu => {
    const stars = menu.querySelectorAll('.star');
    const currentRatingElement = menu.querySelector('.current-rating');
  
    // Highlight bintang berdasarkan rating awal
    const initialRating = parseFloat(currentRatingElement.getAttribute('data-rating'));
    highlightStars(stars, initialRating);
  
    stars.forEach(star => {
      // Event saat hover pada bintang
      star.addEventListener('mouseover', () => {
        const value = star.getAttribute('data-value');
        highlightStars(stars, value); // Sorot bintang di menu yang relevan
      });
  
      // Event saat hover keluar dari bintang
      star.addEventListener('mouseout', () => {
        const selectedValue = menu.querySelector('.star.selected')?.getAttribute('data-value');
        highlightStars(stars, selectedValue || initialRating); // Kembalikan ke rating yang dipilih atau rating awal
      });
  
      // Event saat klik pada bintang
      star.addEventListener('click', () => {
        const value = star.getAttribute('data-value');
        // Menghapus class "selected" dari semua bintang di menu yang relevan
        stars.forEach(star => star.classList.remove('selected'));
        // Menambahkan class "selected" ke bintang yang diklik
        star.classList.add('selected');
        highlightStars(stars, value); // Update highlight
  
        // Update rating hanya di elemen menu yang relevan
        updateRating(parseFloat(value), currentRatingElement);
      });
    });
  });
  