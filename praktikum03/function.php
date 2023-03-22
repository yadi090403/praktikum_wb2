<?php 

//buat fungsi
function hitungUmur($thn_lahir) {
    // code fungsi
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // kembaliin umur
    return $umur;


}

// panggil fungsi
echo "umur saya adalah " . hitungUmur(2003);


function katagori_skill($skor) {
    if ($skor >= 100 && $skor <= 150) {
        return "Sangat Baik";
    } elseif ($skor >= 50 && $skor <= 100) {
        return "Baik";
    } elseif ($skor >= 40 && $skor<= 60) {
        return "cukup";
    } elseif ($skor >= 0 && $skor <= 40) {
        return "Kurang";
    }  else {
        return "Tidak Memadai";
    }
}

?>,