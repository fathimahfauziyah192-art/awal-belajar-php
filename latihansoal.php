<?php
echo "<h3> Daftar Buah (Indexed Array)</h3>";
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal</title>
</head>
<body>
<ol>
    <?php foreach($buah as $data): ?>
        <li><?php echo $data; ?></li>
    <?php endforeach; ?>
</ol> 
<hr>

<h3> Nilai Promnet (Associative Array)</h3>
<?php
    $mahasiswa = [
        [
            "nama" => "Zamzam Aduhay",
            "tugas" => "80",
            "nilai_uts" => "75",
            "nilai_uas" => "85"
        ],
        [
            "nama" => "Farel Astagfirullah",
            "tugas" => "90",
            "nilai_uts" => "88",
            "nilai_uas" => "92"
        ],
        [
            "nama" => "Siti Lala Po",
            "tugas" => "70",
            "nilai_uts" => "65",
            "nilai_uas" => "78"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal</title>
</head>
<body>
    <?php foreach($mahasiswa as $data): ?>
            Nama <?= $data["nama"]; echo "<br>"; echo "<br>" ?>
            Tugas <?= $data["tugas"]; echo "<br>"; echo "<br>" ?>
            Nilai UTS <?= $data["nilai_uts"]; echo "<br>"; echo "<br>" ?>
            Nilai UAS <?= $data["nilai_uas"]; echo "<br>"; echo "<br>" ?>
        <?php echo "<hr>"; 
        endforeach ?>
    
</body>
</html>

</body>
</html>
