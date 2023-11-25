<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption= 0;
    $name = $_POST['name'];
     $diskon = 35000;
     $totalan= 0;
     $total = 0;
     $tiketTipe = $_POST['tiketTipe'];
     $quantity = $_POST['quantity'];
     $tiketTujuan = $_POST['tiketTujuan'];
    
    // Hitungan 
    $totalann = $tiketTujuan + $tiketTipe ;
    $total = $totalann * $quantity - $diskon ;
    }

    ?>
<body>
    <h1 align="center" > PEMESANAN TIKET KERETA API </h1>
        <div class="container">
            <table class="tablee ">
                <tr>
                    <td class="utama">
                    <h4 align ="center">BERIKUT DETAIL PEMESANAN TIKET ANDA</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Nama : <?php echo $name?></label>
                     </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tujuan : <?php ;
                        switch ($tiketTujuan) {
                            case 100000:
                                echo "Surabaya";
                                break;
                            case 300000:
                                echo "Jakarta";
                                break;
                            case 250000:
                                echo "Bandung";
                                break;
                                case 200000:
                                    echo "Yogyakarta";
                                break;
                            default:
                                echo "Invalid Ticket Type";
                                break;
                        }
                        ?> </label>
                    </td>
                </tr>
                <tr>
                    <td>Dengan Harga : <?php echo "Rp. $tiketTujuan"?></td>
                </tr>
                <tr>
                    <td>
                        <label for="">Kelas : <?php ;
                        switch ($tiketTipe) {
                            case 100000:
                                echo "Sleeper";
                                break;
                            case 70000:
                                echo "VVIP";
                                break;
                            case 50000:
                                echo "Bisnis";
                                break;
                                case 20000:
                                    echo "Ekonomi";
                                break;
                            default:
                                echo "Invalid Ticket Type";
                                break;
                        }
                        ?> </label>
                    </td>
                </tr>
                <tr>
                    <td>Biaya Tambahan : <?php echo "Rp. $tiketTipe"?></td>
                </tr>
                <tr>
                    <td>
                        <label for="">Member Akan Mendapat Diskon sebesar <?php echo "Rp. $diskon"?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Jumlah Pemesanan Tiket <?php echo $quantity ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Total Yang Harus Dibayar adalah <?php echo $total?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="index.php">KEMBALI</a>
                        <a href="">LANJUT KE PEMBAYARAN</a>
                    </td>
                </tr>
            </table>
</body>
</html>