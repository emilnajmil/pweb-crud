<?php
echo "<h1>hello world</h1><br>";
echo "<center><i>Ini punya saya</i></center>";

//komen
/* ini juga komen
tapi panjang

$variabel
ketetentuan variabel
- gaboleh awalan angka, conth 1mhs
- case sensitive
- sesuai konteks
- tidak spasi
- tidak karakter khusus
*/

$nama = "Najmil Afthan Azmi";
$angka1 = 10;
$angka2 = 20;
$angka3 = 0.5;
$hasil1 = $angka1 * $angka2;
$hasil2 = $angka1 * $angka3;

echo "<p>Nama saya $nama</p>";
echo "hasil kali $angka1 x $angka2 = $hasil1";

//passing variabel
echo "<br>hasil kali = ", $hasil2;

function tampil(){
    echo "<p>ini fungsi tampil</p>";
}
tampil();

echo "nilai phi = ";
echo (pi());
$a = 100;
$b = sqrt($a);
echo "<br>hasil akar ".$a. " adalah ".$b."<br>";

$nim = 21060123140141;
$NAMA = strtoupper($nama);

echo "<p>Nama Kapital: ",$NAMA,"</p>";

/*
percabangan:
1. kondisional/seleksi -> if, switch case
2. perulangan/loop -> for, foreach, while
*/

$data = 234;
if ($data % 2 != 0) echo "data adalah angka ganjil";
else echo "data adalah angka genap";

//kondisional: operator pembanding
// ==, !=, <, >, <=, >=
//konversi nilai ke bobot
//A -> 4
//B -> 3
//C -> 2
//D -> 1
//E -> 0

$nilai = "B";

if ($nilai == "A") $bobot = 4;
else if ($nilai == "B") $bobot = 3;
else if ($nilai == "C") $bobot = 2;
else if ($nilai == "D") $bobot = 1;
else if ($nilai == "E") $bobot = 0;
else $bobot = -1;

echo "<br>Nilai = ".$nilai." Bobot = ".$bobot;

//Tugas 2 - Najmil Afthan Azmi

//konversi skor ke nilai
//Skor        Nilai
//80-100        A
//70-79         B
//60-69         C
//50-59         D
//<50           E

$skor=67;

if ($skor>=80 AND $skor<=100) $nilai='A';
else if ($skor>=70 AND $skor<80) $nilai='B';
else if ($skor>=60 AND $skor<70) $nilai='C';
else if ($skor>=50 AND $skor<60) $nilai='B';
else $nilai='E';

echo "<br>Skor = ".$skor.", Maka nilai = ".$nilai;

//Percabangan menggunakan switch case
switch ($nilai) {
    case 'A' : $bobot=4;
    break;
    case 'B' : $bobot=3;
    break;
    case 'C' : $bobot=2;
    break;
    case 'D' : $bobot=1;
    break;
    case 'E' : $bobot=0;
    break;
    default : $bobot=-1;
}

echo "<br>Luaran switch case, bobot = ".$bobot;

//Buat NIM
$angkatan = 2023;
$fakultas = "Kedokteran";
$jalur = 'UTBK';
$no_urut_akhir = 26;

//2 dikit NIM
$ang = substr($angkatan,-2);
//Konversi Fakultas
switch ($fakultas) {
    case 'Kedokteran' : $kodefak='1';
    break;
    case 'Teknik' : $kodefak='2';
    break;
    case 'FEB' : $kodefak='3';
    break;
}

//Jalur masuk
switch ($jalur) {
    case 'SNBP' : $kodejal = '1';
    break;
    case 'UTBK' : $kodejal = '2';
    break;
    case 'Mandiri' : $kodejal = '3';
    break;
}

$nomorurut = $no_urut_akhir++;
$nim = $kodefak.$kodejal.$ang.$nomorurut;
echo "<br> NIM: ".$nim;

$password = "adminadmin";
$enkpass = md5($password);
echo "<br>Hasil enkripsi password ".$password."= ".$enkpass."<br>";


//Looping
//for & while

for ($i=0; $i<20; $i++) {
    echo "<br>$i Teknik Elektro";
}

echo "<br>";

$j=0;
while ($j<20) {
    echo "<br> $j Undip";
    $j++;
}


?>