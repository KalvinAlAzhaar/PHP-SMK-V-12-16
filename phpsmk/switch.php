<?php

// $hari = 5;

// switch ($hari) {
//     case 1:
//         echo 'Minggu';
//         break;
//     case 2:
//         echo 'Senin';
//         break;
//     case 3:
//         echo 'Selasa';
//         break;
//     case 4:
//         echo 'Rabu';
//         break;
//     case 5:
//         echo 'Kamis';
//         break;
//     default:
//         echo 'Hari belum dibuat';
//         break;
// }

$pilihan = 'tambah';

switch ($pilihan) {
    case 'tambah':
        echo 'anda memilih tambah';
        break;
    case 'ubah':
        echo 'anda memilih ubah';
        break;
    case 'hapus':
        echo 'anda memilih hapus';
        break;
    case 'simpan':
        echo 'anda memilih simpan';
        break;
    default:
        echo 'pilihan belum ada';
        break;
}
