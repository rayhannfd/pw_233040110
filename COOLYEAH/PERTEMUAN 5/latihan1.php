<?php 

// 1. Membuat Array
    $hari = array ("Senin", "Selasa", "Rabu");
    $bulan = ["Januari", "Februari", "Maret"];
    $mahasiswa = ["Raihan", "2.8", false];

// 2. Mencetak Isi Array

// Mencetak 1 Elemen pada Array, menggunakan index
    echo $hari[0];
    echo "<br>";

    echo $bulan[2];
    echo "<br>";

    echo $mahasiswa[1];
    echo "<hr>";

// digunakan khusus untuk debugging
// var_dump() atau print_r ()
    var_dump($hari);
    echo "<br>";

    print_r($bulan);
    echo "<br>";

    var_dump ($mahasiswa);
    echo "<hr>";

// 3. Memanipulasi Isi Array
// Menambah Isi Array
// di akhir array [] atau array_push();
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    print_r ($hari);
    echo "<hr>";

    array_push($bulan, "April", "Mei");
    print_r($bulan);
    echo "<br>";

//di awal array, array_unshift()
    array_unshift($mahasiswa, "233040110");
    print_r($mahasiswa);
    echo "<hr>";

    //Menghapus isi array
    // di akhir yaitu array_pop()
    // di awal yaitu array_shift()
    array_pop($hari);
    print_r($hari);
    echo "<br>";

    array_shift($bulan);
    print_r($bulan);
    

