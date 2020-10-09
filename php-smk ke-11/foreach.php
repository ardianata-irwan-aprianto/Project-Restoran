<?php 

    // $nama = array('tejo', 'budi', 'siti', 100);
    // var_dump($nama);
    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }

    $nama = array(
        "tejo" => "surabaya",
        "budi" => "sidoarjo",
        "siti" => "bandung",
    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $c => $d) {
        echo $c.' => ',$d;
        echo '<br>';
    }

?>