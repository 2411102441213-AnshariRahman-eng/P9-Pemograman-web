<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Saldo</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Tabungan</h1>

    <?php
        if (isset($_POST['submit'])) {
            // Ambil data dari form
            $saldo_awal = $_POST['saldo_awal'];
            $bunga_persen = $_POST['bunga'];
            $lama_bulan = $_POST['lama_bulan'];
            
            // Konversi bunga dari persen ke desimal
            $bunga_desimal = $bunga_persen / 100;

            // Hitung total bunga yang didapat
            // Bunga dihitung dari saldo awal dikalikan persentase bunga per bulan dikalikan lama bulan
            $total_bunga = $saldo_awal * $bunga_desimal * $lama_bulan;

            // Hitung saldo akhir
            $saldo_akhir = $saldo_awal + $total_bunga;
            
            // Format angka untuk tampilan
            $saldo_awal_formatted = number_format($saldo_awal, 0, ',', '.');
            $total_bunga_formatted = number_format($total_bunga, 0, ',', '.');
            $saldo_akhir_formatted = number_format($saldo_akhir, 0, ',', '.');

            echo "<h2>Data Input:</h2>";
            echo "* Saldo Awal : **Rp. {$saldo_awal_formatted},-** <br>";
            echo "* Bunga per Bulan : **{$bunga_persen}%** <br>";
            echo "* Lama Menabung : **{$lama_bulan} bulan** <br>";
            
            echo "<h2>Hasil Perhitungan:</h2>";
            echo "Total Bunga yang didapat : **Rp. {$total_bunga_formatted},-** <br>";
            echo "Saldo Akhir setelah {$lama_bulan} bulan adalah: **Rp. {$saldo_akhir_formatted},-**";
            
            // Contoh kasus dari soal: Saldo Awal 1.000.000, Bunga 0.25%, Lama 11 bulan.
            // Jika diinput: 1000000, 0.25, 11
            // Total Bunga = 1000000 * 0.0025 * 11 = 27500
            // Saldo Akhir = 1000000 + 27500 = 1027500
        } else {
            echo "Tidak ada data yang dikirim.";
        }
    ?>
    <br><br>
    <a href="saldo_input.html">Hitung Lagi</a>
</body>
</html>