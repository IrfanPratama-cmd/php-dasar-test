<!DOCTYPE html>
<html>
<body>

<?php
    $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

    // Mengubah string nilai menjadi array
    $array_nilai = explode(" ", $nilai);

    // Mengubah setiap elemen dalam array menjadi integer
    $array_nilai = array_map('intval', $array_nilai);

    // (1) Menghitung nilai rata-rata
    $rata_rata = array_sum($array_nilai) / count($array_nilai);
    echo "Nilai Rata-rata: " . round($rata_rata, 2) . "<br>";

    // (2) Mengambil 7 nilai tertinggi
    rsort($array_nilai);
    $nilai_tertinggi = array_slice($array_nilai, 0, 7);
    echo "7 Nilai Tertinggi: " . implode(", ", $nilai_tertinggi) . "<br>";

    // (3) Mengambil 7 nilai terendah
    sort($array_nilai);
    $nilai_terendah = array_slice($array_nilai, 0, 7);
    echo "7 Nilai Terendah: " . implode(", ", $nilai_terendah) . "<br>";
?>

</body>
</html>
