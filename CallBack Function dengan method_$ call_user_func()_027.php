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
    function berteriak($callback)
    {
        echo "Hallooooo... <br>";

        // $callback();
        call_user_func($callback, 'Selamat datang');
    }

    $panggil = function($text)
    {
        echo $text;
    };

    berteriak($panggil);
?>
</body>
</html>