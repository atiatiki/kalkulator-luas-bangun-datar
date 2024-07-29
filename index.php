<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Bangun Datar</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showInputs(shape) {
            var inputFields = document.getElementById('input-fields');
            inputFields.innerHTML = ''; // Kosongkan konten sebelum menambah input baru

            switch (shape) {
                case 'persegi':
                    inputFields.innerHTML = '<label for="input1">Sisi:</label><input type="number" id="input1" name="input1" required>';
                    break;
                case 'persegi_panjang':
                    inputFields.innerHTML = '<label for="input1">Panjang:</label><input type="number" id="input1" name="input1" required><label for="input2">Lebar:</label><input type="number" id="input2" name="input2">';
                    break;
                case 'lingkaran':
                    inputFields.innerHTML = '<label for="input1">Jari-jari:</label><input type="number" id="input1" name="input1" required>';
                    break;
                case 'segitiga':
                    inputFields.innerHTML = '<label for="input1">Alas:</label><input type="number" id="input1" name="input1" required><label for="input2">Tinggi:</label><input type="number" id="input2" name="input2">';
                    break;
                case 'jajar_genjang':
                    inputFields.innerHTML = '<label for="input1">Alas:</label><input type="number" id="input1" name="input1" required><label for="input2">Tinggi:</label><input type="number" id="input2" name="input2">';
                    break;
                case 'belah_ketupat':
                    inputFields.innerHTML = '<label for="input1">Diagonal 1:</label><input type="number" id="input1" name="input1" required><label for="input2">Diagonal 2:</label><input type="number" id="input2" name="input2">';
                    break;
                case 'layang_layang':
                    inputFields.innerHTML = '<label for="input1">Diagonal 1:</label><input type="number" id="input1" name="input1" required><label for="input2">Diagonal 2:</label><input type="number" id="input2" name="input2">';
                    break;
                case 'trapesium':
                    inputFields.innerHTML = '<label for="input1">Sisi Atas:</label><input type="number" id="input1" name="input1" required><label for="input2">Sisi Bawah:</label><input type="number" id="input2" name="input2"><label for="input3">Tinggi:</label><input type="number" id="input3" name="input3">';
                    break;
                case 'segi_lima':
                    inputFields.innerHTML = '<label for="input1">Sisi:</label><input type="number" id="input1" name="input1" required>';
                    break;
                case 'segi_enam':
                    inputFields.innerHTML = '<label for="input1">Sisi:</label><input type="number" id="input1" name="input1" required>';
                    break;
                default:
                    inputFields.innerHTML = ''; // Kosongkan jika tidak ada pilihan yang valid
                    break;
            }
        }

        function validateForm() {
            var shape = document.getElementById('shape').value;
            if (shape === '') {
                alert('Silakan pilih jenis bangun datar terlebih dahulu.');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Kalkulator Luas Bangun Datar</h1>
        <form action="hitung.php" method="post" class="form" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="shape">Pilih Jenis Bangun Datar:</label>
                <select name="shape" id="shape" required onchange="showInputs(this.value)">
                    <option value="" disabled selected style="display: none;">-- Pilih --</option>
                    <option value="persegi">Persegi</option>
                    <option value="persegi_panjang">Persegi Panjang</option>
                    <option value="lingkaran">Lingkaran</option>
                    <option value="segitiga">Segitiga</option>
                    <option value="jajar_genjang">Jajar Genjang</option>
                    <option value="belah_ketupat">Belah Ketupat</option>
                    <option value="layang_layang">Layang-layang</option>
                    <option value="trapesium">Trapesium</option>
                    <option value="segi_lima">Segi Lima</option>
                    <option value="segi_enam">Segi Enam</option>
                </select>
            </div>

            <div id="input-fields" class="form-group">
                <!-- Tempat untuk menampilkan input sesuai dengan pilihan bangun datar -->
            </div>

            <button type="submit">Hitung Luas</button>
        </form>
    </div>
</body>
</html>