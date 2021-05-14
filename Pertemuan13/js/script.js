// Dik Dik Nur Illahi
// 203040072
// https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
// Pertemuan 13 - 14 mei 2021
// Mempelajari Live Searching & Upload Gambar

// event ketika kita menulis kan keyword



// preview Image untuk tambah dan ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}