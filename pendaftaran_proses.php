<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <h1>Hasil Pendaftaran Mahasiswa Baru</h1>

    <?php
        // Cek apakah data telah dikirim melalui metode POST
        if (isset($_POST['submit'])) {
            // Mengambil data dari form menggunakan $_POST[]
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tgl = $_POST['tgl'];
            $bln = $_POST['bln'];
            $thn = $_POST['thn'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $nilai_uan = $_POST['nilai_uan'];
            
            // Konversi bulan angka ke nama bulan untuk tampilan
            $bulan_arr = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            $nama_bulan = $bulan_arr[$bln];
            
            // Menampilkan data sesuai format output yang diminta
            echo "Terimakasih **$nama** sudah mengisi form pendaftaran. <br><br>"; // Contoh output [cite: 384]

            echo "Nama Lengkap : **$nama** <br>"; // Contoh output [cite: 385]
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
    <a href="pendaftaran.html">Kembali ke Form</a>
</body>
</html>