<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 1 "14117115" Form Mahasiswa PABW</title>
</head>

<body>
    <H2>Data Mahasiswa PABW</H2>
    <form action="TM_7Hasil.php" method="POST" target="_blank">
        <label>Nama :</label>
        <input type="textfield" name="nama" autofocus required > <br><br>
        <label>Alamat:</label>
        <input type="textfield" name="alamat"> <br>
        <label >Jenis Kelamin : </label>
        <input type="radio" nama="gender" value="Laki-laki">Male <br>
        <input type="radio" nama="gender" value="Perempuan">Female <br>
        <label>Golonggan Darah: </label>
        <select name="goldar">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select> <br> <br>
        <label>Hobby</label><br>
        <input type="checkbox" naame="hobby" value="Menyanyi">Study<br>
        <input type="checkbox" naame="hobby" value="Membaca">Study<br>
        <input type="checkbox" naame="hobby" value="Menari">Study<br>
        <input type="checkbox" naame="hobby" value="Menggambar">Study<br>
        <input type="checkbox" naame="hobby" value="Belanja">Study<br>
        <input type="checkbox" naame="hobby" value="Belajar">Study<br>
        <label >keterangan :</label><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama= $_POST['nama'];
        echo "Nama = $nama";
        echo "<br>"
        if (isset($_POST['alamat']))
           {
               $alamat= $_POST['alamat']
               echo "Alamat = $alamat"; 
           }
        echo "<br>";
        if (isset($_POST['gender']))
           {
               $gender= $_POST['gender']
               echo "Jenis Kelamin=$gender";
           }
        echo "<br>";
        if (isset($_POST['goldar']))
           {
               $goldar= $_POST['goldar']
               echo "Golongan Darah = $goldar";
           }
        echo "<br>";
        if (isset($_POST['hobby']))
           {
               $hobby= $_POST['hobby']
               echo "Hobby = $hobby";
           }
        echo "<br>";
        if (isset($_POST['ket']))
           {
               $ket= $_POST['ket']
               echo "Keterangan = $ket";
           }

       
    }
    ?>
</body>

</html>
