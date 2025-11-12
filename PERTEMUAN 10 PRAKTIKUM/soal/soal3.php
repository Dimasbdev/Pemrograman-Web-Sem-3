<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Berdasarkan Golongan</h2>
    
    <form method="POST" action="">
        <label>Golongan Karyawan:</label>
        <select name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">Golongan A - Rp. 4.000/jam</option>
            <option value="B">Golongan B - Rp. 5.000/jam</option>
            <option value="C">Golongan C - Rp. 6.000/jam</option>
            <option value="D">Golongan D - Rp. 7.500/jam</option>
        </select>
        <br><br>
        
        <label>Jumlah Jam Kerja (per minggu):</label>
        <input type="number" name="jam_kerja" min="0" required>
        <br><br>
        
        <button type="submit">Hitung Upah</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $golongan = $_POST['golongan'];
        $jam_kerja = $_POST['jam_kerja'];
        $upah_lembur = 3000;
        $batas_jam_normal = 48;
        
        // Tentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upah_perjam = 4000;
                break;
            case 'B':
                $upah_perjam = 5000;
                break;
            case 'C':
                $upah_perjam = 6000;
                break;
            case 'D':
                $upah_perjam = 7500;
                break;
            default:
                $upah_perjam = 0;
        }
        
        // Hitung upah
        if ($jam_kerja <= $batas_jam_normal) {
            // Tidak ada lembur
            $jam_normal = $jam_kerja;
            $jam_lembur = 0;
            $upah_jam_normal = $jam_normal * $upah_perjam;
            $upah_jam_lembur = 0;
            $total_upah = $upah_jam_normal;
        } else {
            // Ada lembur
            $jam_normal = $batas_jam_normal;
            $jam_lembur = $jam_kerja - $batas_jam_normal;
            $upah_jam_normal = $jam_normal * $upah_perjam;
            $upah_jam_lembur = $jam_lembur * $upah_lembur;
            $total_upah = $upah_jam_normal + $upah_jam_lembur;
        }
        
        // Tampilkan hasil
        echo "<h3>Detail Upah:</h3>";
        echo "<p>Golongan: $golongan</p>";
        echo "<p>Upah per Jam: Rp. " . number_format($upah_perjam, 0, ',', '.') . ",-</p>";
        echo "<p>Jumlah Jam Kerja: $jam_kerja jam</p>";
        echo "<p>Jam Normal: $jam_normal jam</p>";
        echo "<p>Jam Lembur: $jam_lembur jam</p>";
        echo "<hr>";
        echo "<p>Upah Normal: Rp. " . number_format($upah_jam_normal, 0, ',', '.') . ",-</p>";
        echo "<p>Upah Lembur: Rp. " . number_format($upah_jam_lembur, 0, ',', '.') . ",-</p>";
        echo "<p><strong>Total Upah: Rp. " . number_format($total_upah, 0, ',', '.') . ",-</strong></p>";
    }
    ?>
</body>
</html>
