# Instagram Clone - Bootstrap

## Mengapa memilih konfigurasi col tertentu untuk tiap breakpoint? 
Jawabannya berangkat dari kebutuhan menjaga proporsi feed saat lebar layar berubah. Di ponsel saya tetap memakai satu kolom penuh agar foto tajam, tidak memaksa pengguna men-zoom, dan waktu muat terasa ringan. Ketika memasuki layar sedang, dua kolom (`col-md-6`) menjaga keseimbangan antara ukuran kartu dan ruang kosong sehingga alur visual nyaman diikuti. Di desktop lebar, empat kolom (`col-lg-3`) menghadirkan nuansa kisi Instagram yang padat namun proporsional dengan memanfaatkan ruang horizontal tanpa membuat setiap foto mengecil berlebihan. Dengan memanfaatkan grid Bootstrap, transisi antar viewport berlangsung mulus tanpa butuh aturan tambahan.

## Bagaimana memastikan tombol Follow atau Edit Profile tetap mudah dijangkau di mobile? 
Saya merancang header dengan pendekatan mobile-first: elemen profil ditumpuk vertikal sehingga tombol muncul tepat setelah nama pengguna dan tidak terselip di samping elemen lain. Tombol memakai gaya Bootstrap dengan padding lebar, kontras warna tinggi, dan jarak yang rapat agar tetap mantap dijangkau jempol kiri maupun kanan. Jumlah aksi utama pun saya batasi agar fokus pengguna tidak terpecah dan tombol tetap berada dalam area pandang saat header discan cepat.

## Jika postingan bertambah jadi 50, apa potensi masalah dan bagaimana solusi grid mengatasinya? 
Dua risiko terbesar adalah waktu muat awal yang lebih berat dan panjang scroll yang semakin jauh. Grid responsif yang sama memastikan setiap kartu baru tersusun rapi karena kelasnya konsisten, sehingga layout tidak berantakan meski jumlah konten meningkat drastis. Untuk menjaga performa, saya menyiapkan opsi lanjutan seperti lazy loading pada tag gambar atau paginasi bertahap tanpa harus mengubah struktur kolom. Dengan pendekatan ini, kisi tetap proporsional di semua ukuran layar dan pengalaman pengguna terasa ringan sekalipun feed bertambah padat.
___
### Oleh:

**Dimas Firmansyah - 2411102441070**  
Matakuliah Praktikum Pemrograman Web - Semester 3

___


*© 2025 Dimas Firmansyah. All rights reserved.*