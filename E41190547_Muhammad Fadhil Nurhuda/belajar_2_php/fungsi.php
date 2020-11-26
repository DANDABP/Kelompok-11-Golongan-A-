<?php 
echo "Membuat fungsi <br>";
function berhasil ($nilai)
{
    echo"selamat anda berhasil  " .$nilai;
};
function gagal ()
{
    echo"maaf anda gagal";
}
$nilai = 90;
if ($nilai>=75)
{berhasil($nilai); }
else {gagal(); };
echo "<br>";
echo "fungsi dengan parameter <br>";
function jumlah($a,$b)
{return $a+$b;}
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2);
echo "<br>";
echo "fungsi bawaan<br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "Sekarang tanggal : " .$sekarang["mday"];

?>