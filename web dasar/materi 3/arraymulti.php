<?php

// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "Digital Talent"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "Digital Talent"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "Digital Talent"
    ]
];

// menampilkan array
foreach ($artikel as $post) {
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}

?>