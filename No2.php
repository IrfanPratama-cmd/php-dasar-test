<!DOCTYPE html>
<html>
<body>

<?php

function hitungHurufKecil($string) {
    $jumlahHurufKecil = 0;

    // Loop melalui setiap karakter dalam string
    for ($i = 0; $i < strlen($string); $i++) {
        // Periksa apakah karakter tersebut adalah huruf kecil
        if (ctype_lower($string[$i])) {
            $jumlahHurufKecil++;
        }
    }

    // Mengembalikan hasil
    return $jumlahHurufKecil;
}

// Contoh penggunaan
$input = "TranSISI";
$output = hitungHurufKecil($input);

echo "$input mengandung $output buah huruf kecil.";
?>

</body>
</html>
