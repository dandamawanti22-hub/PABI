<!--
Nama: Danda Mawanti Simbolon
NIM: 43325027
Prodi: D3 Teknologi Komputer
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP itu Mudah</title>
</head>
<body>
    <?php
    function belanjaan($bahan, $jumlah)
    {
        $text = "daftar belanjaan: " . $bahan . " sebanyak " . $jumlah . "KG";
        echo $text . '<br>';
    }

    function jarak()
    {
        echo '<br>';
    }

    belanjaan('bayam', 5);
    jarak();

    belanjaan('bawang merah', 2);
    jarak();

    belanjaan('daging babi', 10);
    jarak();
?>
</body>
</html>