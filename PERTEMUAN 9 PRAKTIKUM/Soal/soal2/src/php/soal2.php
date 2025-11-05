<?php
    // Proses logika PHP
    $inputUang = isset($_POST['jumlahUang']) ? intval($_POST['jumlahUang']) : 1575250;
    $jumlahUang = $inputUang;

    // Hitung pecahan 100.000
    $a = (int)($jumlahUang / 100000);
    $jumlahUang -= $a * 100000;

    // Hitung pecahan 50.000
    $b = (int)($jumlahUang / 50000);
    $jumlahUang -= $b * 50000;

    // Hitung pecahan 20.000
    $c = (int)($jumlahUang / 20000);
    $jumlahUang -= $c * 20000;

    // Hitung pecahan 5.000
    $d = (int)($jumlahUang / 5000);
    $jumlahUang -= $d * 5000;

    // Hitung pecahan 100
    $e = (int)($jumlahUang / 100);
    $jumlahUang -= $e * 100;

    // Hitung pecahan 50
    $f = (int)($jumlahUang / 50);
    $jumlahUang -= $f * 50;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pecahan Uang</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Hasil Pecahan Uang</h1>
    
    <div class="result">
        <p class="total"><strong>Total Uang: Rp. <?php echo number_format($inputUang, 0, ',', '.'); ?>,-</strong></p>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>Pecahan</th>
                    <th>Jumlah Lembar</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rp. 100.000</td>
                    <td><?php echo $a; ?> lembar</td>
                    <td>Rp. <?php echo number_format($a * 100000, 0, ',', '.'); ?>,-</td>
                </tr>
                <tr>
                    <td>Rp. 50.000</td>
                    <td><?php echo $b; ?> lembar</td>
                    <td>Rp. <?php echo number_format($b * 50000, 0, ',', '.'); ?>,-</td>
                </tr>
                <tr>
                    <td>Rp. 20.000</td>
                    <td><?php echo $c; ?> lembar</td>
                    <td>Rp. <?php echo number_format($c * 20000, 0, ',', '.'); ?>,-</td>
                </tr>
                <tr>
                    <td>Rp. 5.000</td>
                    <td><?php echo $d; ?> lembar</td>
                    <td>Rp. <?php echo number_format($d * 5000, 0, ',', '.'); ?>,-</td>
                </tr>
                <tr>
                    <td>Rp. 100</td>
                    <td><?php echo $e; ?> koin</td>
                    <td>Rp. <?php echo number_format($e * 100, 0, ',', '.'); ?>,-</td>
                </tr>
                <tr>
                    <td>Rp. 50</td>
                    <td><?php echo $f; ?> koin</td>
                    <td>Rp. <?php echo number_format($f * 50, 0, ',', '.'); ?>,-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="form-actions">
        <a href="../../index.html"><button type="button">Hitung Lagi</button></a>
    </div>
</body>
</html>