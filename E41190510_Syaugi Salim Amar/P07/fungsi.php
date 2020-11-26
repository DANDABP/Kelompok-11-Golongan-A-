<?php
echo "Membuat fungsi <br>";
function berhasil(){
    echo "Selamat anda berhasil <br>";
}
function gagal(){
    echo "Maaf anda gagal <br>";
}
$nilai = 90;
if ($nilai >= 75){
    berhasil();
}else{
    gagal();
}
echo "Fungsi dengan parameter <br>";
function jumlah($a,$b){
    return $a+$b;
}
function pengurangan($a,$b){
    return $b-$a;
}
$nilai1=10;
$nilai2=15;
echo pengurangan($nilai1,$nilai2);
echo "<br>";
echo Jumlah($nilai1,$nilai2);
echo "<br>";
echo "Fungsi bawaan <br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "Sekarang tanggal : ".$sekarang["mday"];
?>