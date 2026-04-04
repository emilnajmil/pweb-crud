<?php
//get NIM 
$nim = $_GET['id'];
//echo "nim = $nim";

//konek ke database
include "setting.php";

if ($konek->connect_error) {
    die("koneksi rusak ".$konek->connect_error);
}
echo "koneksi berhasil<br>";

//mengakses tabel menggunakan query
$sql = "SELECT * FROM mahasiswa WHERE `nim`=$nim";
$result = $konek->query($sql);

//tampil hasil
echo "<b><font color=blue>EDIT MAHASISWA</font></b><br>";
if ($result->num_rows > 0) {
    echo "<table border = 0><form method=post action=proseseditmhs.php>";
    while($row = $result->fetch_assoc()) {
        echo "
        <tr><td>NIM</td><td> :".$row['nim']."</td></tr>
        <tr><td>Nama</td><td> :<input type=text name=nama value=".$row['nama']."></td></tr>
        <tr><td>Prodi</td><td>:<input type=text name=prodi value=".$row['prodi']."></td></tr>
        <tr><td>Angkatan</td><td>:<input type=text name=nama value=".$row['angkatan']."></td></tr>
        <tr><td><input type=submit value=Edit></td><td></tr>";
    }
    echo "</form></table>";
}
?>