<?php
class matematika {
    //Penjumlahan
    function Penjumlahan($a, $b) {
        $c = $a+$b;
        echo "Hasil penjumlahan = ".$c; 

    }

    function Perkalian($a, $b) {
        $c = $a*$b;
        echo "<br> Hasil perkalian = ".$c;
    }

    function cetak() {
        echo "<br> Ini Kode Najmil Afthan";
    }
}

$math = new matematika(); //instansiasi objek
$math->Penjumlahan(10,20); //Memanggil method
$math->Perkalian(3, 24);
$math->cetak();

/*konsep OO:
inheritance = penurunan sifat dari kelas induk ke kelas anak
polymorphism = kemampuan objek untuk memiliki banyak bentuk 
encapsulation = pembungkusan data dan fungsi dalam satu kesatuan (kelas) 
*/

//class turuanan dari matematika
class Matematikalanjut extends Matematika {
    function pengurangan($a, $b) {
        return $a - $b; //mengembalikan nilai hasil pengurangan
    }
}

echo"<br>";
$objMatlanjut = new Matematikalanjut();
$objMatlanjut -> Penjumlahan(34, 67);
echo "<br>hasil pengurangan = " . $objMatlanjut->pengurangan(320, 123);
$hasilpengurangan = $objMatlanjut->pengurangan(400,120);
$objMatlanjut -> Perkalian($hasilpengurangan, 8);
/* ada 2 jenis fungsi :
- return value : fungsi yang mengembalikan nilai hasil perhitungan
- non retrun value : fungsi yang tidak mengembalikan nilai hasil perhitungan,
*/
?>