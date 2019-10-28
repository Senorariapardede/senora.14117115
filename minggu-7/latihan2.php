<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 2 "14117115"</title>
</head>

<body>
    <form method="GET" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama"> <br></br>
        <label for="color">Color : </label>
        <select name="color" id="">
            <option value="Merah">Merah</option>
            <option value="Kuning">kuning</option>
            <option value="Biru">Biru</option>
            <option value="Hijau">Hijau</option>
            <option value="Pink">pink</option>
            <option value="Hitam">hitam</option>
            <option value="Coklat">Coklat</option>
            <option value="Jingga">Jingga</option>
        </select>
        <br></br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $x = $_GET['nama'];
        $y = $_GET['color'];
        function pilih($nama)
        {
            if (strlen($nama > 20)) {
                return ((strlen($nama)) * 700);
            } elseif (strlen($nama > 11)) {
                return ((strlen($nama)) * 500);
            } else {
                return ((strlen($nama)) * 300);
            }
        }
        echo "<br>";
        echo "<font color='$y'>Nama = $x <br>";
        echo "<font color='$y'>Harga bet untuk nama $x adalah = "  pilih($x);
    }
    ?>
</body>

</html>
