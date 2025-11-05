<?php
    // Proses logika PHP
    $saldoAwal = isset($_POST['saldoAwal']) ? floatval($_POST['saldoAwal']) : 1000000;
    $bungaPercent = isset($_POST['bunga']) ? floatval($_POST['bunga']) : 0.25;
    $bulan = isset($_POST['bulan']) ? intval($_POST['bulan']) : 11;

    // Konversi persen ke desimal
    $bunga = $bungaPercent / 100;

    // Hitung saldo akhir
    $saldoAkhir = $saldoAwal * pow(1 + $bunga, $bulan);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Saldo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    
    <div class="result">
        <p><strong>Saldo Awal:</strong> Rp. <?php echo number_format($saldoAwal, 0, ',', '.'); ?>,-</p>
        <p><strong>Bunga per Bulan:</strong> <?php echo number_format($bungaPercent, 2, ',', '.'); ?>%</p>
        <p><strong>Lama:</strong> <?php echo $bulan; ?> bulan</p>
        <hr>
        <p class="highlight">
            <strong>Saldo akhir setelah <?php echo $bulan; ?> bulan adalah: 
            Rp. <?php echo number_format($saldoAkhir, 0, ',', '.'); ?>,-</strong>
        </p>
    </div>

    <div class="form-actions">
        <a href="../../index.html"><button type="button">Hitung Lagi</button></a>
    </div>
</body>
</html>