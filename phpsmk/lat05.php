<?php

$tanggal = 0;

//$hasil = $tanggal < 32;

// if ($tanggal < 32) {
//     if ($tanggal > 0) {
//         echo "Benar";
//     }else {
//         echo "Salah";
//     }
// }else {
//     echo "Salah";
// }

$nilai = 89;

if ($nilai <= 100) {
    if ($nilai >= 0) {
        echo 'Nilai benar';
    } else {
        echo 'Nilai salah';
    }
} else {
    echo 'nilai Salah';
}

if ($nilai >= 0 && $nilai <= 100) {
    echo 'nilai benar';
} else {
    echo 'nilai salah';
}

if ($nilai >= 100 || $nilai <= 0) {
    echo 'nilai benar';
} else {
    echo 'nilai salah';
}
