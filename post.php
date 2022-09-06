<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex Nama Lengkap" /> <br>
    <input type="text" name="kelas" placeholder="EX. kelas" /> <br>
    <input type="number" name="nis" placeholder="EX. nis" /><br>
    <input type="text" name="tempatlahir" placeholder="EX. tempatlahir" /><br>
    <input type="date" name="tanggallahir" placeholder="EX. tanggallahir" /><br>
    <input type="text" name="agama" placeholder="EX. agama" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
</form>
<?php
      if( isset($_POST["simpan"]) ){
        echo "<hr>";
        $namalengkap = $_POST ["namalengkap"];
        $kelas = $_POST ["kelas"];
        $tempatlahir = $_POST ["tempatlahir"];
        $nis = $_POST["nis"];
        $tanggallahir = $_POST["tanggallahir"];
        $agama = $_POST["agama"];
       
        echo "Nama lengkap : " . $namalengkap . "<br>";
        echo "Kelas :" . $kelas . "<br>";
        echo "Tempat Lahir :" . $tempatlahir . "<br>";
        echo "Nis :" . $nis . "<br>";
        echo "Tanggal Lahir :" . $tanggallahir . "<br>";
        echo "Agama :" . $agama;

      } 
?>