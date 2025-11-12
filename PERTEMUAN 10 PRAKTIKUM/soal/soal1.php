<html>
<head>
    <title>SOal 1</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    
    <form method="POST" action="">
        <label>Masukkan Tahun:</label>
        <input type="number" name="tahun" required>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];
        
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p>Tahun $tahun adalah TAHUN KABISAT</p>";
        } else {
            echo "<p>Tahun $tahun adalah BUKAN TAHUN KABISAT</p>";
        }
    }
    ?>
</body>
</html>
