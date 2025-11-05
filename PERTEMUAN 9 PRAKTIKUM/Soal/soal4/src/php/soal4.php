<?php
    // Proses logika PHP - ambil data dari form menggunakan GET
    $namaLengkap = isset($_GET['namaLengkap']) ? htmlspecialchars($_GET['namaLengkap']) : '';
    $tempatLahir = isset($_GET['tempatLahir']) ? htmlspecialchars($_GET['tempatLahir']) : '';
    $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';
    $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
    $alamatRumah = isset($_GET['alamatRumah']) ? htmlspecialchars($_GET['alamatRumah']) : '';
    $jenisKelamin = isset($_GET['jenisKelamin']) ? $_GET['jenisKelamin'] : '';
    $asalSekolah = isset($_GET['asalSekolah']) ? htmlspecialchars($_GET['asalSekolah']) : '';
    $nilaiUAN = isset($_GET['nilaiUAN']) ? $_GET['nilaiUAN'] : '';

    // Array nama bulan
    $namaBulan = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];

    // Format tanggal lahir
    $tanggalLahir = $tanggal . ' ' . ($bulan ? $namaBulan[$bulan] : '') . ' ' . $tahun;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran (GET)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Pendaftaran</h1>
        
        <div class="info-box">
            <h3>⚠️ Perhatikan URL di address bar!</h3>
            <p>Semua data terlihat di URL karena menggunakan method GET.</p>
        </div>
        
        <div class="result">
            <p class="greeting">Terimakasih <strong><?php echo $namaLengkap; ?></strong> sudah mengisi form pendaftaran.</p>
            
            <table class="data-table">
                <tr>
                    <td class="label">Nama Lengkap</td>
                    <td class="separator">:</td>
                    <td><?php echo $namaLengkap; ?></td>
                </tr>
                <tr>
                    <td class="label">Tempat Lahir</td>
                    <td class="separator">:</td>
                    <td><?php echo $tempatLahir; ?></td>
                </tr>
                <tr>
                    <td class="label">Tanggal Lahir</td>
                    <td class="separator">:</td>
                    <td><?php echo $tanggalLahir; ?></td>
                </tr>
                <tr>
                    <td class="label">Alamat Rumah</td>
                    <td class="separator">:</td>
                    <td><?php echo nl2br($alamatRumah); ?></td>
                </tr>
                <tr>
                    <td class="label">Jenis Kelamin</td>
                    <td class="separator">:</td>
                    <td><?php echo $jenisKelamin; ?></td>
                </tr>
                <tr>
                    <td class="label">Asal Sekolah</td>
                    <td class="separator">:</td>
                    <td><?php echo $asalSekolah; ?></td>
                </tr>
                <tr>
                    <td class="label">Nilai UAN</td>
                    <td class="separator">:</td>
                    <td><?php echo $nilaiUAN; ?></td>
                </tr>
            </table>
        </div>

        <div class="form-actions">
            <a href="../../index.html"><button type="button">Daftar Lagi</button></a>
        </div>