<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Luas Bangun Datar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Perhitungan Luas Bangun Datar</h1>
        <?php
        // Memeriksa apakah halaman dipanggil dengan metode POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Memeriksa apakah pilihan bentuk (shape) kosong
            if (empty($_POST["shape"])) {
                // Menampilkan pesan jika tidak ada bentuk yang dipilih
                echo "<p>Silakan pilih jenis bangun datar terlebih dahulu.</p>";
            } else {
                // Menyimpan nilai shape dari form POST ke dalam variabel $shape
                $shape = $_POST["shape"];
                $luas = 0;

                // Switch case untuk menghitung luas berdasarkan bentuk yang dipilih
                switch ($shape) {
                    case "persegi":
                        // Memeriksa validitas input untuk sisi persegi
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0) {
                            echo "<p>Sisi persegi harus berupa angka positif.</p>";
                            break;
                        }
                        $sisi = $_POST["input1"];
                        // Menghitung luas persegi
                        $luas = $sisi * $sisi;
                        // Menampilkan hasil perhitungan luas persegi
                        echo "<p>Luas Persegi dengan sisi $sisi adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "persegi_panjang":
                        // Memeriksa validitas input untuk panjang dan lebar persegi panjang
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0) {
                            echo "<p>Panjang dan lebar persegi panjang harus berupa angka positif.</p>";
                            break;
                        }
                        $panjang = $_POST["input1"];
                        $lebar = $_POST["input2"];
                        // Menghitung luas persegi panjang
                        $luas = $panjang * $lebar;
                        // Menampilkan hasil perhitungan luas persegi panjang
                        echo "<p>Luas Persegi Panjang dengan panjang $panjang dan lebar $lebar adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "lingkaran":
                        // Memeriksa validitas input untuk jari-jari lingkaran
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0) {
                            echo "<p>Jari-jari lingkaran harus berupa angka positif.</p>";
                            break;
                        }
                        $jari_jari = $_POST["input1"];
                        // Menghitung luas lingkaran
                        $luas = pi() * $jari_jari * $jari_jari;
                        // Menampilkan hasil perhitungan luas lingkaran
                        echo "<p>Luas Lingkaran dengan jari-jari $jari_jari adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "segitiga":
                        // Memeriksa validitas input untuk alas dan tinggi segitiga
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0) {
                            echo "<p>Alas dan tinggi segitiga harus berupa angka positif.</p>";
                            break;
                        }
                        $alas = $_POST["input1"];
                        $tinggi = $_POST["input2"];
                        // Menghitung luas segitiga
                        $luas = 0.5 * $alas * $tinggi;
                        // Menampilkan hasil perhitungan luas segitiga
                        echo "<p>Luas Segitiga dengan alas $alas dan tinggi $tinggi adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "jajar_genjang":
                        // Memeriksa validitas input untuk alas dan tinggi jajar genjang
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0) {
                            echo "<p>Alas dan tinggi jajar genjang harus berupa angka positif.</p>";
                            break;
                        }
                        $alas_jg = $_POST["input1"];
                        $tinggi_jg = $_POST["input2"];
                        // Menghitung luas jajar genjang
                        $luas = $alas_jg * $tinggi_jg;
                        // Menampilkan hasil perhitungan luas jajar genjang
                        echo "<p>Luas Jajar Genjang dengan alas $alas_jg dan tinggi $tinggi_jg adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "belah_ketupat":
                        // Memeriksa validitas input untuk diagonal 1 dan diagonal 2 belah ketupat
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0) {
                            echo "<p>Diagonal 1 dan diagonal 2 belah ketupat harus berupa angka positif.</p>";
                            break;
                        }
                        $diagonal1 = $_POST["input1"];
                        $diagonal2 = $_POST["input2"];
                        // Menghitung luas belah ketupat
                        $luas = 0.5 * $diagonal1 * $diagonal2;
                        // Menampilkan hasil perhitungan luas belah ketupat
                        echo "<p>Luas Belah Ketupat dengan diagonal 1 $diagonal1 dan diagonal 2 $diagonal2 adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "layang_layang":
                        // Memeriksa validitas input untuk diagonal 1 dan diagonal 2 layang-layang
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0) {
                            echo "<p>Diagonal 1 dan diagonal 2 layang-layang harus berupa angka positif.</p>";
                            break;
                        }
                        $diagonal1_ll = $_POST["input1"];
                        $diagonal2_ll = $_POST["input2"];
                        // Menghitung luas layang-layang
                        $luas = 0.5 * $diagonal1_ll * $diagonal2_ll;
                        // Menampilkan hasil perhitungan luas layang-layang
                        echo "<p>Luas Layang-layang dengan diagonal 1 $diagonal1_ll dan diagonal 2 $diagonal2_ll adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "trapesium":
                        // Memeriksa validitas input untuk sisi atas, sisi bawah, dan tinggi trapesium
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0 || !is_numeric($_POST["input2"]) || $_POST["input2"] <= 0 || !is_numeric($_POST["input3"]) || $_POST["input3"] <= 0) {
                            echo "<p>Sisi atas, sisi bawah, dan tinggi trapesium harus berupa angka positif.</p>";
                            break;
                        }
                        $sisi_atas = $_POST["input1"];
                        $sisi_bawah = $_POST["input2"];
                        $tinggi_trapesium = $_POST["input3"];
                        // Menghitung luas trapesium
                        $luas = 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi_trapesium;
                        // Menampilkan hasil perhitungan luas trapesium
                        echo "<p>Luas Trapesium dengan panjang sisi atas $sisi_atas, sisi bawah $sisi_bawah, dan tinggi $tinggi_trapesium adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "segi_lima":
                        // Memeriksa validitas input untuk sisi segi lima
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0) {
                            echo "<p>Sisi segi lima harus berupa angka positif.</p>";
                            break;
                        }
                        $sisi_sl = $_POST["input1"];
                        // Menghitung luas segi lima
                        $luas = 0.25 * sqrt(5 * (5 + 2 * sqrt(5))) * $sisi_sl * $sisi_sl;
                        // Menampilkan hasil perhitungan luas segi lima
                        echo "<p>Luas Segi Lima dengan panjang sisi $sisi_sl adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    case "segi_enam":
                        // Memeriksa validitas input untuk sisi segi enam
                        if (!is_numeric($_POST["input1"]) || $_POST["input1"] <= 0) {
                            echo "<p>Sisi segi enam harus berupa angka positif.</p>";
                            break;
                        }
                        $sisi_se = $_POST["input1"];
                        // Menghitung luas segi enam
                        $luas = 1.5 * sqrt(3) * $sisi_se * $sisi_se;
                        // Menampilkan hasil perhitungan luas segi enam
                        echo "<p>Luas Segi Enam dengan panjang sisi $sisi_se adalah: " . htmlspecialchars($luas) . " satuan luas.</p>";
                        break;
                    default:
                        // Menampilkan pesan jika jenis bangun datar tidak valid
                        echo "<p>Jenis bangun datar tidak valid.</p>";
                }
            }
        }
        ?>
        <!-- Link untuk kembali ke halaman utama -->
        <a href="index.php">&laquo; Kembali</a>
    </div>
</body>
</html>