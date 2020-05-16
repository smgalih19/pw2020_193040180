const tombolCari = document.querySelector('.tombol-cari-admin');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container-cari-admin');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika menuliskan keyword
keyword.addEventListener('keyup', function () {
  fetch('../ajax/ajax_cari_admin.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});