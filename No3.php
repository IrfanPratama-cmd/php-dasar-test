<!DOCTYPE html>
<html>
<body>

<?php

function generateNgrams($text, $n) {
    // Menghapus karakter non-alfanumerik dan membuat lowercase
    $cleanedText = preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower($text));

    // Membagi string menjadi kata-kata
    $words = explode(' ', $cleanedText);

    // Menginisialisasi array untuk menyimpan n-grams
    $ngrams = [];

    // Membentuk n-grams
    for ($i = 0; $i < count($words) - $n + 1; $i++) {
        $ngram = implode(' ', array_slice($words, $i, $n));
        $ngrams[] = $ngram;
    }

    return $ngrams;
}

// Contoh pemanggilan fungsi
$inputString = "Jakarta adalah ibukota negara Republik Indonesia";

// Unigram
$unigrams = generateNgrams($inputString, 1);
echo "Unigram: " . implode(', ', $unigrams) . "<br>" ;

// Bigram
$bigrams = generateNgrams($inputString, 2);
echo "Bigram: " . implode(', ', $bigrams) . "<br>";

// Trigram
$trigrams = generateNgrams($inputString, 3);
echo "Trigram: " . implode(', ', $trigrams) . "<br>";
?>

</body>
</html>
