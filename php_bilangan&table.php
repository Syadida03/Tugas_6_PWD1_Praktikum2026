<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
</head>
<body>
    <h3>Pengulangan 1 sampai 10 (Bilangan Genap)</h3>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    ?>
    <hr>
    <h3>Tabel Perkalian Matriks 1 - 10</h3>
    <table border="1" cellpadding="5" cellspacing="2">
        <!-- Baris pertama -->
        <tr>
            <!-- kotak pertama tanpa warna -->
            <td>bilangan</td>
            <?php
                // Perulangan membuat 10 kotak header kolom di sebelah kanan tulisan 'bilangan'
                for ($kolom = 1; $kolom <= 10; $kolom++) {
                    // Mencetak sel tabel berwarna hijau baris pertama 1-10
                    echo "<td bgcolor='#00FF00'>$kolom</td>";
                }
            ?>
        </tr>
        <?php
            // Loop luar: Mengatur pembuatan baris dari atas ke bawah (baris ke-1 sampai ke-10)
            for ($baris = 1; $baris <= 10; $baris++) {
                // Membuka baris tabel baru di HTML
                echo "<tr>";
                // Membuat kotak paling kiri di setiap baris (header samping) berwarna hijau
                echo "<td bgcolor='#00FF00'>$baris</td>";
                // Loop dalam: Mengatur pembuatan 10 kotak ke samping kanan di dalam baris
                for ($kolom = 1; $kolom <= 10; $kolom++) {
                    // Menghitung perkalian antara nomor baris saat ini dengan nomor kolom saat ini
                    $hasil = $baris * $kolom;
                    // Mengecek apakah angka $hasil merupakan bilangan ganjil (sisa bagi 2 tidak sama dengan 0)
                    if ($hasil % 2 != 0) {
                        $warna = "#FFFF00";
                    } else {
                        $warna = "#00FFFF"; 
                    }
                    // Mencetak kotak sel beserta warna yang sudah ditentukan dan angka hasil perkaliannya
                    echo "<td bgcolor='$warna'>$hasil</td>";
                }
                // Menutup baris
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>