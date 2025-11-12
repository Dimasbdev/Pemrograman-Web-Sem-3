<html>
<head>
    <title>Soal 2</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Honorer</h2>
    
    <form method="POST" action="">
        <label>Masukkan Jumlah Jam Kerja (per minggu):</label>
        <input type="number" name="jam_kerja" min="0" required>
        <button type="submit">Hitung Upah</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_kerja = $_POST['jam_kerja'];
        $upah_normal = 2000;
        $upah_lembur = 3000;
        $batas_jam_normal = 48;
        
        if ($jam_kerja <= $batas_jam_normal) {
            // Tidak ada lembur
            $total_upah = $jam_kerja * $upah_normal;
            $jam_lembur = 0;
            
            echo "<h3>Detail Upah:</h3>";
            echo "<p>Jumlah Jam Kerja: $jam_kerja jam</p>";
            echo "<p>Jam Normal: $jam_kerja jam</p>";
            echo "<p>Jam Lembur: 0 jam</p>";
            echo "<p>Upah Normal: Rp. " . number_format($total_upah, 0, ',', '.') . ",-</p>";
            echo "<p>Upah Lembur: Rp. 0,-</p>";
            echo "<p><strong>Total Upah: Rp. " . number_format($total_upah, 0, ',', '.') . ",-</strong></p>";
        } else {
            // Ada lembur
            $jam_normal = $batas_jam_normal;
            $jam_lembur = $jam_kerja - $batas_jam_normal;
            $upah_jam_normal = $jam_normal * $upah_normal;
            $upah_jam_lembur = $jam_lembur * $upah_lembur;
            $total_upah = $upah_jam_normal + $upah_jam_lembur;
            
            echo "<h3>Detail Upah:</h3>";
            echo "<p>Jumlah Jam Kerja: $jam_kerja jam</p>";
            echo "<p>Jam Normal: $jam_normal jam</p>";
            echo "<p>Jam Lembur: $jam_lembur jam</p>";
            echo "<p>Upah Normal: Rp. " . number_format($upah_jam_normal, 0, ',', '.') . ",-</p>";
            echo "<p>Upah Lembur: Rp. " . number_format($upah_jam_lembur, 0, ',', '.') . ",-</p>";
            echo "<p><strong>Total Upah: Rp. " . number_format($total_upah, 0, ',', '.') . ",-</strong></p>";
        }
    }
    ?>
</body>
</html>
