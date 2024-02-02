<!DOCTYPE html>
<html>
<body>
<style>
    table {
        border-collapse: collapse;
    }

    td {
        width: 30px;
        height: 30px;
        text-align: center;
    }

    .black {
        background-color: black;
        color: white;
    }

    .white {
        background-color: white;
    }
</style>

<?php
function generateTable($rows, $cols) {
    echo '<table border="1">';
    $number = 1;
    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $cols; $j++) {
            $cellValue = $number++;
            $cellClass = (in_array($cellValue, [1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62])) ? 'black' : 'white';
            echo '<td class="' . $cellClass . '">' . $cellValue . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Panggil fungsi dengan parameter 8 baris dan 8 kolom
generateTable(8, 8);
?>
</body>
</html>
