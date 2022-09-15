<?php
// 1. Variabel publik/Global//
    $x = 5;

    function myTest(){
        //jika 'x' dipanggil di dalam sini maka akan error
        //echo "Nilai variabel x didalam fungsi adlah $x";
    }
    myTest();

    echo "<br>Nilai variabel X adalah $x";
?>