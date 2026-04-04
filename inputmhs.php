<?php
//menerima posting data
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$ta = $_POST['ta'];


//cek
//echo "data posting : $nim $nama $prodi $ta";

//koneksi ke database
include "setting.php";

//cek koneksi
if ($konek->connect_error) {
    die("koneksi gagal".$konek->connect_error);
}
echo "koneksi berhasil<br>";

//2. mengakses tabel menggunakan query
$sql = "INSERT INTO mahasiswa (nim, nama, prodi, angkatan) VALUES ($nim,'$nama','$prodi','$ta')";
$result = $konek->query($sql);

if ($result) echo "Input data berhasil";
else echo "input gagal";
?>