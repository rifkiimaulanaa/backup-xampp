<?php 
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

    foreach($artikel as $post){
        echo "<h2>".$post["judul"]."</h2>";
        echo "<p>".$post["penulis"]."<p>";
        echo "<hr>";
    }
    
    ?>