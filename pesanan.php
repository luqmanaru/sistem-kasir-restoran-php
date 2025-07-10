<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMESANAN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Formulir Pemesanan Makanan</h1>
    <form method="post">
        <label for="jenis_pesanan">Jenis Pesanan:</label>
        <select name="jenis_pesanan" id="jenis_pesanan">
            <option value="makanan">Makanan</option>
			<option value="minuman">Minuman</option>
			<option value="cemilan">Cemilan</option>
        </select>
        <br>
        <br>
        <label for="jenis_layanan">Jenis Layanan:</label>
		<select name="jenis_layanan" id="jenis_layanan">
			<option value="dinein">Dine In (Rp. 20,000)</option>
			<option value="takeaway">Take Away</option>
		</select>
        <br>
        <br>
        <label for="jumlah_pesanan">Jumlah Pesanan:</label>
        <input type="number" name="jumlah_pesanan" id="jumlah_pesanan" min="1" required>
        <br>
        <br>
        <input type="submit" name="submit" value="Hitung Total">    
    </form>
    <br>
    <br>
    <?php
    if(isset($_POST['submit'])){
        $jenis_pesanan = $_POST['jenis_pesanan'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $jumlah_pesanan = $_POST['jumlah_pesanan'];
        $harga = 0;
		$biaya_layanan = 0;
		$potongan_harga = 0;
		$total_pesanan = 0;
		$total_pembayaran = 0;

        if($jenis_pesanan == "makanan"){
            $harga = 15000;
            $potongan_harga = 0.17;
        }

        if($jenis_pesanan == "minuman"){
            $harga = 8000;
            $potongan_harga = 0.07;
        }
        
        if($jenis_pesanan == "cemilan"){
            $harga = 5000;
            $potongan_harga = 0.04;
        }
        
        if($jenis_layanan == "dinein"){
            $biaya_layanan = 20000;
        }
        
        elseif($jenis_layanan == "takeaway"){
            $biaya_layanan = 25000;
        }

        $total_pesanan = $harga * $jumlah_pesanan;
        $potongan_harga = $total_pesanan * $potongan_harga;
        $total_pembayaran = $total_pesanan - $potongan_harga + $biaya_layanan;

        echo "<h2>Hasil Pemesanan:</h2>";
        echo "<table border='1'>";
        echo "<tr><td>Deskripsi</td><td>Harga</td></tr>";
        echo "<tr><td>Harga Pesanan (sebelum potongan)</td><td>Rp. " . number_format($total_pesanan, 0, ',', '.') . " x $jumlah_pesanan</td></tr>";
        echo "<tr><td>Potongan Harga</td><td>Rp. " . number_format($potongan_harga, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Biaya Layanan Restoran</td><td>Rp. " . number_format($biaya_layanan, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Pembayaran (setelah potongan dan biaya layanan)</td><td>Rp. " . number_format($total_pembayaran, 0, ',', '.') . "</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>