<?php 

    // Array Dimensi
    // $nama = array("joni","tejo","budi","siti",100,2.5);
    // var_dump($nama);
    // echo '<br>';
    // echo $nama[5];
    // echo '<br>';

    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama[$i].'<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

    // Array Asosiatif
    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "sidoarjo",
    //     "tejo" => "bandung",
    //     "siti" => "jakarta"
    // );

    $nama["joni"]="surabaya";
    $nama["budi"]="sidoarjo";
    $nama["tejo"]="bandung";
    $nama["siti"]="jakarta";
    $nama["edi"]="semarang";

    var_dump($nama);
    echo '<br>';
    // echo $nama['budi'];

    foreach ($nama as $k => $v) {
        echo $k." => ".$v;
        echo '<br>';
    }

?>