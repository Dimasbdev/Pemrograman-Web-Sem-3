<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Solusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="bg-gray-800 rounded-lg shadow-xl p-8">
            <h2 class="text-3xl font-bold text-center text-white mb-6">Hasil Pencarian Solusi</h2>

            <?php
            if (isset($_POST['cari'])) {
                $total = 25;
                $jumlah_solusi = 0;
                
                echo "<div class='bg-gray-700 rounded-lg p-6 mb-6'>";
                echo "<p class='text-xl text-white font-mono text-center'>x + y + z = $total</p>";
                echo "<p class='text-sm text-gray-300 text-center mt-2'>Bilangan asli (x, y, z ≥ 1)</p>";
                echo "</div>";
                
                echo "<div class='bg-gray-700 rounded-lg p-6 max-h-96 overflow-y-auto'>";
                echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2'>";
                
                for ($x = 1; $x <= $total - 2; $x++) {
                    for ($y = 1; $y <= $total - $x - 1; $y++) {
                        for ($z = 1; $z <= $total - $x - $y; $z++) {
                            if ($x + $y + $z == $total) {
                                $jumlah_solusi++;
                                echo "<div class='bg-gray-600 hover:bg-gray-500 rounded p-3 transition duration-200'>";
                                echo "<p class='text-gray-200 font-mono text-sm'>";
                                echo "x = <span class='text-blue-400 font-semibold'>$x</span>, ";
                                echo "y = <span class='text-green-400 font-semibold'>$y</span>, ";
                                echo "z = <span class='text-yellow-400 font-semibold'>$z</span>";
                                echo "</p>";
                                echo "</div>";
                            }
                        }
                    }
                }
                
                echo "</div>";
                echo "</div>";
                
                echo "<div class='mt-6 bg-gradient-to-r from-green-900 to-blue-900 rounded-lg p-6 border-l-4 border-green-500'>";
                echo "<h3 class='text-2xl font-bold text-white mb-2'>Jumlah Penyelesaian:</h3>";
                echo "<p class='text-4xl font-bold text-green-400'>$jumlah_solusi pasangan</p>";
                echo "</div>";
            }
            ?>

            <div class="mt-6 text-center">
                <a href="soal2.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
</body>
</html>
