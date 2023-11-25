<!DOCTYPE html>
<html lang="en">
<head>
    <title>PEMESANAN TIKET</title>
</head>
    <link rel="stylesheet" href="style.css">
<body>
<?php
     error_reporting(0);  
    $selectedOption= 0;
    $name = $_POST['name'];
     $diskon = 35000;
     $totalan= 0;
     $total = 0;
     $tiketTipe = $_POST['tiketTipe'];
     $quantity = $_POST['quantity'];
     $tiketTujuan = $_POST['tiketTujuan'];
    

    ?>

    <h1 align="center" > PEMESANAN TIKET KERETA API </h1>
    <div class="container">
    <table class="tablee ">
        <td class="utama">
        <form action="proses.php" method="post">
        Nama : <input type="text" name="name"><br><br><br><br>
        <label for="tiketTujuan">Tujuan:</label>
                 <select id="tujuan" name="tiketTujuan" >
                    <option disabled>Pilih Tujuan</option>
                    <option value="100000">Surabaya</option>
                    <option value="300000">Jakarta</option>
                    <option value="250000">Bandung</option>
                    <option value="200000">Yogyakarta </option>
                </select>  <br><br><br><br>
        <label for="tiketTipe">Tipe Tiket:</label>
                 <select id="tipe" name="tiketTipe">
                    <option  disabled>Pilih Kelas</option>
                    <option  value="100000">Sleeper</option>
                    <option  value="70000">VVIP</option>
                    <option  value="50000">Bisnis</option>
                    <option  value="20000">Ekonomi </option>
                </select>  <br><br><br><br> 
        Member : <input type="checkbox" id="diskon" name="selectedOption" value="35000">
                   <br><br> <br><br> 
        <label for="quantity">Jumlah Tiket:</label>
                <input type="number" name="quantity" id="quantiy" min="1" required><br><br> <br> <br>
                <input type="submit" name = "submit" value = "Checkout">
                <input type="reset" value="Reset"> <br> <br><br>

    </td>

    </table>
    </div>

</body>

</html>