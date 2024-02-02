<!DOCTYPE html>
<html>
<body>
<?php

function enkripsi($input) {
    $output = '';

    // Iterasi setiap karakter pada input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        $shift = $i + 1;

        // Jika indeks karakter genap, kurangkan nilai ASCII
        // Jika indeks karakter ganjil, tambahkan nilai ASCII
        $value = ord($char);
        if ($i % 2 == 0) {
            $value += $shift;
        } else {
            $value -= $shift;
        }

        // Konversi kembali ke karakter
        $output .= chr($value);
    }

    return $output;
}

// Contoh pemanggilan fungsi dengan input DFHKNQ
$input = "DFHKNQ";
$output = enkripsi($input);

// Output hasil enkripsi
echo "Input sebelum enkripsi = " . $input . "<br>";
echo "Output sesudah enkripsi = " . $output; 

?>
</body>
</html>
