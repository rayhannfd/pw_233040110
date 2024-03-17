<?php
$mahasiswa = [
    [//1.
        "nama" => "Muhammad Albi",
        "npm" => "233040199",
        "email" => "albi.233040199@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => " Teknik Informatika"
    ],
    [//2.    
        "nama" => "Muhammad Septiadi Ardiansyah",
        "npm" => "233040181",
        "email" => "muhammadseptiadi.233020@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//3.
        "nama" => "Raihan Fadhil Hibatullah",
        "npm" => "233040110",
        "email" => "raihanfadhil.233040110@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//4.
        "nama" => "Made Bagus Prabaswara",
        "npm" => "233040023",
        "email" => "bagus.233040023@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//5.
        "nama" => "Made Bagas Pramudita",
        "npm" => "233040022",
        "email" => ".bagas233040022@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//6.
        "nama" => "Genta Effendi",
        "npm" => "233040045",
        "email" => "genta.233040045@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//7.
        "nama" => "Juventino Ryan Rolos",
        "npm" => "233040111",
        "email" => "ryanrolos.233040111@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//8.
        "nama" => "Haikal Aditya",
        "npm" => "233040194",
        "email" => "haikal.233040194@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//9.
        "nama" => "Muhammad Dhiya Ulhaq",
        "npm" => "233040056",
        "email" => "dhiyaulhaq.233040056@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [//10.
        "nama" => "Aldean Tegar Gumilang",
        "npm" => "233040091",
        "email" => "aldean.233040091@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ]
    
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 5</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>
        </ul>

    <?php endforeach; ?>
    
</body>

</html>