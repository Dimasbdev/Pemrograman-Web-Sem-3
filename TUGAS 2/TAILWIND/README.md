# Instagram Clone - Tailwind

## Jelaskan keputusan grid-cols/gap di tiap breakpoint — kenapa begitu?
Konfigurasi `grid-cols-1 md:grid-cols-2 lg:grid-cols-4` dengan jarak `gap-2 md:gap-3` saya pilih supaya ritme feed mengikuti luas layar tanpa mengorbankan detail gambar. Di mobile saya pakai satu kolom penuh agar foto tetap tajam dan tidak perlu zoom, sedangkan gap dua piksel menjaga kompresi konten terasa rapat tetapi masih bernafas. Begitu masuk ke tablet, dua kolom memberi keseimbangan antara ukuran kartu dan ruang kosong, lalu gap yang sedikit lebih longgar membantu mata menelusuri kisi tanpa terasa sesak. Di desktop lebar, empat kolom membuat layout meniru grid Instagram asli, memanfaatkan ruang horizontal secara penuh namun gap yang tetap ramping memastikan foto tidak tampak terpisah jauh. Kombinasi ini menjaga konsistensi komposisi visual sekaligus meminimalkan kebutuhan aturan khusus di luar utilitas Tailwind.

## Bagaimana kamu memanfaatkan utility responsive Tailwind untuk memecahkan masalah layout yang muncul di mobile?
Saya mengandalkan pendekatan mobile-first dengan utilitas responsif seperti `flex flex-col md:flex-row`, `justify-center md:justify-start`, dan `text-center md:text-left` agar struktur berubah mulus tanpa media query manual. Di header profil, tumpukan elemen berpindah dari susunan kolom ke baris ketika layar melebar, sehingga tombol aksi tetap berada dalam jangkauan ibu jari di ponsel tetapi tampil sejajar dengan nama pengguna di desktop. Utility padding dan gap yang berbeda per breakpoint membantu menghindari crowding di layar sempit sambil menjaga keseimbangan ruang kosong ketika viewport membesar. Dengan begitu, isu seperti tombol yang tertabrak teks atau foto profil yang misalign bisa diatasi langsung lewat kelas responsif bawaan Tailwind.

## Jelaskan trade-off antara memakai banyak utility classes vs membuat component CSS tersendiri.
Mengandalkan banyak utility classes membuat pengembangan cepat karena saya tinggal merangkai aturan langsung di markup, namun konsekuensinya adalah HTML bisa terlihat padat dan sulit dipindai saat mencari struktur semantik. Jika saya membuat komponen CSS khusus, markup menjadi lebih bersih dan ada peluang me-reuse gaya secara konsisten, tetapi perlu effort tambahan untuk menamai kelas, menulis stylesheet, dan menjaga sinkronisasi antara Tailwind dan CSS manual. Dalam proyek ini saya memilih utility-first karena variasi layout cukup kaya dan responsif, sementara ukuran halaman masih terkontrol sehingga kepadatan kelas belum mengganggu. Bila nantinya pola UI mulai berulang atau tim bertambah, pendekatan hybrid dengan komponen CSS yang membungkus utility favorit akan membantu merapikan basis kode tanpa kehilangan fleksibilitas Tailwind.
___
### Oleh:

**Dimas Firmansyah - 2411102441070**  
Matakuliah Praktikum Pemrograman Web - Semester 3

___


*© 2025 Dimas Firmansyah. All rights reserved.*