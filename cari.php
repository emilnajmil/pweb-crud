<?php
include "setting.php";

if ($konek->connect_error) {
    die("koneksi rusak ".$konek->connect_error);
}
echo "koneksi berhasil<br>";

//Mengakses tabel menggunakan query
$katakunci = isset($_POST['kunci']) ? $_POST['kunci'] : "";
$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$katakunci%'";
$result = $konek->query($sql);

// Tampil hasil
echo "<b><font color=red>TABEL MAHASISWA</font></b><br>";

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>NIM</th><th>NAMA</th><th>PRODI</th><th>ANGKATAN</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['nim']."</td><td>".$row['nama']."</td><td>".$row['prodi']."</td><td>".$row['angkatan']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan";
}
?>

<form method="POST" action=""> 
    Cari Nama: <input type="text" name="kunci" value="<?php echo $katakunci; ?>">
    <input type="submit" value="cari">
</form>