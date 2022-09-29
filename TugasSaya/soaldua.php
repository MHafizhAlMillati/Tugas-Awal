<!DOCTYPE HTML>
<html>  

    <head>
        <title>Tugas Dua</title>
        <style>
            h1 {
                text-align: center;
            }
            img {
                width : 200px;
            }
            .gambar {
                margin-left : 573px;
            }
        </style>
    </head>
    <body>
        <h1>Toko Online</h1>
        <div class="gambar">
        <img src="kipas.jpg">
        <?php
            $kode_brg = "KPS20013";
            $sp_brg = "Merek : WelsMe <br> Berat : 1 kilogram";
            $hr_brg = "Rp 60.000";
            $eks = "JNE";

            echo "<br>Kipas Angin<br>";
            echo "kode barang           : ".$kode_brg."<br>";
            echo "Spesifikasi barang    : ".$sp_brg."<br>";
            echo "Harga barang          : ".$hr_brg."<br>";
            echo "Ekspedisi pengiriman  : ".$eks."<br>";

        ?>
        </div>
    </body>
</html>