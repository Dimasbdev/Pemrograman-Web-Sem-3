const tanggalSelect = document.getElementById('tanggal');
for (let i = 1; i <= 31; i++) {
    const option = document.createElement('option');
    option.value = i;
    option.textContent = i;
    tanggalSelect.appendChild(option);
}

const tahunSelect = document.getElementById('tahun');
for (let i = 2005; i >= 1980; i--) {
    const option = document.createElement('option');
    option.value = i;
    option.textContent = i;
    tahunSelect.appendChild(option);
}