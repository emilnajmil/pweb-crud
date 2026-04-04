<?php

include "setting.php";

if ($konek->connect_error) {
    die("koneksi rusak ".$konek->connect_error);
}
echo"koneksi berhasil<br>";

//2. mengakses tabel menggunakan query
$sql = "SELECT * FROM mahasiswa";
$result = $konek->query($sql);

//tampil hasil
echo "<b><font color=blue>TABEL MAHASISWA</font></b><br>";
if ($result->num_rows > 0) {
    echo "<table border =1><tr><th>NIM</th><th>NAMA</th><th>PRODI</th><th>ANGKATAN</th><th>Edit/Hapus</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['nim']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['prodi']."</td>
        <td>".$row['angkatan']."</td>
        <td><a href=editmhs.php?id=".$id=$row['nim'].">Edit<a/></td></tr>";
    }
    echo "</table>";
}
else echo "Belum Ada data";
?>