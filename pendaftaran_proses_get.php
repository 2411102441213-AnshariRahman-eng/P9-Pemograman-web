<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran (GET)</title>
</head>
<body>
    <h1>Hasil Pendaftaran Mahasiswa Baru (Metode GET)</h1>

    <?php
        // Menggunakan $_GET[] karena method pada form diubah menjadi GET
        if (isset($_GET['submit'])) { 
            // Mengambil data dari form menggunakan $_GET[]
            $nama = $_GET['nama'];
            $tempat_lahir = $_GET['tempat_lahir'];
            $tgl = $_GET['tgl'];
            $bln = $_GET['bln'];
            $thn = $_GET['thn'];
            $alamat = $_GET['alamat'];
            $jk = $_GET['jk'];
            $asal_sekolah = $_GET['asal_sekolah'];
            $nilai_uan = $_GET['nilai_uan'];
            
            // ... (lanjutan logika sama dengan proses POST) ...
            $bulan_arr = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            $nama_bulan = $bulan_arr[$bln];

            echo "Terimakasih **$nama** sudah mengisi form pendaftaran. <br><br>"; 
            echo "Nama Lengkap : **$nama** <br>"; 
            echo "Tempat Lahir : **$tempat_lahir** <br>";
            echo "Tanggal Lahir : **$tgl - $nama_bulan - $thn** <br>";
            echo "Alamat Rumah : **$alamat** <br>";
            echo "Jenis Kelamin : **$jk** <br>";
            echo "Asal Sekolah : **$asal_sekolah** <br>";
            echo "Nilai UAN : **$nilai_uan** <br>";
        } else {
            echo "<p>Tidak ada data yang dikirim.</p>";
        }
    ?>
    <br>
    <a href="pendaftaran_get.html">Kembali ke Form</a>
</body>
</html>