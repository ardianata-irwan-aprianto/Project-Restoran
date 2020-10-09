<?php 

    // $hari = 7;
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
    //     case 6:
    //         echo 'Jumat';
    //         break;
    //     case 7:
    //         echo 'Sabtu';
    //         break;
        
    //     default:
    //         echo 'Hari Belum Dibuat';
    //         break;
    // }

    $pilihan = 'hapus';
    switch ($pilihan) {
        case 'tambah':
            echo 'Anda Memilih Tambah';
            break;
        case 'ubah':
            echo 'Anda Memilih Ubah';
            break;
        case 'hapus':
            echo 'Anda Memilih Hapus';
            break;
        
        default:
            echo 'Pilihan Belum Ada';
            break;
    }

?>