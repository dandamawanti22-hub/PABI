// Nama : Danda Mawanti Simbolon
// Nim : 43325027
// Prodi : D3 Teknologi Komputer

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    //variabel pada php
        $nama = "Belajar PABI";
    //akses nilai pada variabel
        echo "Selamat datang di $nama <br>";
    
    // Metode Array
    $kandang = array('anjing', 'kura-kura', 'koala','Anjing');
    $kandang2 = array('anjing', 'koala', 'cacing', 'banteng','semut');
    $angka = [5, 10, 3, 12, 7,21];
    
    print_r(array_unique($kandang));
    echo "<br>";
    
    print_r(array_reverse($kandang2));
    echo "<br>";

    shuffle($kandang2);
    print_r ($kandang2);
    echo "<br>";
        
    echo count($kandang);
    echo "<br>";

    sort($kandang2);
    print_r ($kandang2);
    echo "<br>";
    
    sort($angka);
    print_r ($angka);
    echo "<br>"
    ?>
</body>
</html>