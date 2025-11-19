<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gray-800 rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-bold text-center text-white mb-6">Hasil Perhitungan</h2>

            <?php
            if (isset($_POST['hitung'])) {
                $saldo_awal = $_POST['saldo_awal'];
                $bulan = $_POST['bulan'];
                $biaya_admin = 9000;
                
                $saldo = $saldo_awal;
                
                echo "<div class='bg-gray-700 rounded-lg p-6 mb-6'>";
                echo "<div class='grid grid-cols-2 gap-4 text-gray-200'>";
                echo "<div><span class='font-semibold'>Saldo Awal:</span> Rp. " . number_format($saldo_awal, 0, ',', '.') . "</div>";
                echo "<div><span class='font-semibold'>Jangka Waktu:</span> $bulan bulan</div>";
                echo "</div>";
                echo "</div>";
                
                echo "<div class='overflow-x-auto'>";
                echo "<table class='min-w-full bg-gray-700 rounded-lg overflow-hidden'>";
                echo "<thead class='bg-gray-600'>";
                echo "<tr class='text-gray-200'>";
                echo "<th class='py-3 px-4 text-left'>Bulan</th>";
                echo "<th class='py-3 px-4 text-right'>Saldo Awal</th>";
                echo "<th class='py-3 px-4 text-center'>Bunga</th>";
                echo "<th class='py-3 px-4 text-right'>Bunga (Rp)</th>";
                echo "<th class='py-3 px-4 text-right'>Admin</th>";
                echo "<th class='py-3 px-4 text-right'>Saldo Akhir</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody class='divide-y divide-gray-600'>";
                
                for ($i = 1; $i <= $bulan; $i++) {
                    $saldo_awal_bulan = $saldo;
                    
                    if ($saldo < 1100000) {
                        $persentase_bunga = 3;
                    } else {
                        $persentase_bunga = 4;
                    }
                    
                    $bunga_bulanan = ($saldo * $persentase_bunga / 100) / 12;
                    $saldo = $saldo + $bunga_bulanan - $biaya_admin;
                    
                    echo "<tr class='text-gray-300 hover:bg-gray-600'>";
                    echo "<td class='py-3 px-4 text-left font-medium'>$i</td>";
                    echo "<td class='py-3 px-4 text-right'>" . number_format($saldo_awal_bulan, 0, ',', '.') . "</td>";
                    echo "<td class='py-3 px-4 text-center'><span class='bg-blue-600 px-2 py-1 rounded text-sm'>$persentase_bunga%</span></td>";
                    echo "<td class='py-3 px-4 text-right text-green-400'>" . number_format($bunga_bulanan, 0, ',', '.') . "</td>";
                    echo "<td class='py-3 px-4 text-right text-red-400'>" . number_format($biaya_admin, 0, ',', '.') . "</td>";
                    echo "<td class='py-3 px-4 text-right font-semibold'>" . number_format($saldo, 0, ',', '.') . "</td>";
                    echo "</tr>";
                }
                
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                
                $total_bunga = $saldo - $saldo_awal + ($biaya_admin * $bulan);
                $total_admin = $biaya_admin * $bulan;
                
                echo "<div class='mt-6 bg-gradient-to-r from-gray-700 to-gray-600 rounded-lg p-6'>";
                echo "<h3 class='text-xl font-bold text-green-400 mb-2'>Saldo Akhir:</h3>";
                echo "<p class='text-3xl font-bold text-white mb-4'>Rp. " . number_format($saldo, 0, ',', '.') . "</p>";
                echo "<div class='grid grid-cols-2 gap-4'>";
                echo "<div><span class='text-gray-300'>Total Bunga:</span> <span class='text-green-400 font-semibold'>Rp. " . number_format($total_bunga, 0, ',', '.') . "</span></div>";
                echo "<div><span class='text-gray-300'>Total Admin:</span> <span class='text-red-400 font-semibold'>Rp. " . number_format($total_admin, 0, ',', '.') . "</span></div>";
                echo "</div>";
                echo "</div>";
            }
            ?>

            <div class="mt-6 text-center">
                <a href="soal1.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
</body>
</html>
