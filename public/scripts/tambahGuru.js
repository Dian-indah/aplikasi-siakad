const statusInput = document.getElementById('statusPerkawinan');
const namaPasanganInput = document.getElementById('namaPasangan');
const nipPasanganInput = document.getElementById('nipPasangan');
const pekerjaanPasanganInput = document.getElementById('pekerjaanPasangan');

statusInput.addEventListener('change', function() {
  if (statusInput.value === 'Belum Kawin') {
    nipPasanganInput = true;
    nipPasanganInput = '-'; // Reset value jika dinonaktifkan
    pekerjaanPasanganInput = true;
    pekerjaanPasanganInput = '-'; // Reset value jika dinonaktifkan
    namaPasanganInput.disabled = true;
    namaPasanganInput.value = '-'; // Reset value jika dinonaktifkan
  } else {
    namaPasanganInput.disabled = false;
  }
});