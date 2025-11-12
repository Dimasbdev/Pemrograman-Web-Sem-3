<html>
<head>
    <title>Soal 4</title>
</head>
<body>
    <h2>Jumlah Hari dalam Bulan Saat Ini</h2>

    <?php
    // Mendapatkan bulan dan tahun saat ini
    $bulan = date('n'); // 1-12
    $tahun = date('Y');
    
    $bulan_indonesia = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );
    
    // Cek apakah tahun kabisat untuk Februari
    $kabisat = false;
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        $kabisat = true;
    }
    
    switch ($bulan) {
        case 1:  // Januari
        case 3:  // Maret
        case 5:  // Mei
        case 7:  // Juli
        case 8:  // Agustus
        case 10: // Oktober
        case 12: // Desember
            $jumlah_hari = 31;
            break;
            
        case 4:  // April
        case 6:  // Juni
        case 9:  // September
        case 11: // November
            $jumlah_hari = 30;
            break;
            
        case 2:  // Februari
            if ($kabisat) {
                $jumlah_hari = 29;
            } else {
                $jumlah_hari = 28;
            }
            break;
            
        default:
            $jumlah_hari = 0;
    }
    
    echo "<p><strong>Bulan Saat Ini:</strong> " . $bulan_indonesia[$bulan] . " $tahun</p>";
    echo "<p><strong>Jumlah Hari:</strong> $jumlah_hari hari</p>";
    
    if ($bulan == 2) {
        if ($kabisat) {
            echo "<p><em>Tahun $tahun adalah tahun kabisat, sehingga Februari memiliki 29 hari.</em></p>";
        } else {
            echo "<p><em>Tahun $tahun bukan tahun kabisat, sehingga Februari memiliki 28 hari.</em></p>";
        }
    }
    ?>

</body>
</html>
