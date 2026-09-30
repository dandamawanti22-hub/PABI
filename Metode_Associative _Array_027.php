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

        // --------- Metode Associative Array ---------

        $data = array ( "nama" => "Jiemi Ardian",
                        "umur" => 21,
                        "Pekerjaan" => "Pedagang ginjal"
                );

        $data2 = array( "isteri" => "belum ada",
                        "laptop" => "Acer Nitro 5"
                );

        print_r(array_values($data));
        echo "<br>";

        print_r(array_keys($data));
        echo "<br>";

        print_r(array_merge($data, $data2));
        echo "<br>";

        ?>
</body>
</html>