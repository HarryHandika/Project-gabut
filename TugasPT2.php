<?php

//nilai bisa diubah :v

//luas dan keliling persegi panjang
$panjang = 10;
$lebar = 8;

//luas dan keliling persegi
$sisi = 12;

//luas segitiga
$alas = 24;
$tinggi = 18;

//luas lingkaran
$jari = 14;

//keliling Lingkaran
$diameter = 28;
class luasPersegiPanjang
{
    function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        $luasPersegiPanjang = $panjang * $lebar;
        return $luasPersegiPanjang;
    }

}
$luasDariPersegiPanjang = new luasPersegiPanjang;
echo "Luas persegi panjang dengan panjang {$panjang} dan lebar {$lebar} adalah ", $luasDariPersegiPanjang->hitungLuasPersegiPanjang($panjang, $lebar), "\n";

class kelilingPersegiPanjang
{
    function hitungKelilingPersegiPanjang($panjang, $lebar)
    {
        $kelilingPersegiPanjang = 2 * ($panjang + $lebar);
        return $kelilingPersegiPanjang;
    }
}
$kelilingDariPersegiPanjang = new kelilingPersegiPanjang;
echo "Keliling persegi Panjang dengan panjang {$panjang} dan lebar {$lebar} adalah ", $kelilingDariPersegiPanjang->hitungKelilingPersegiPanjang($panjang, $lebar), "\n";

class luasPersegi
{
    function hitungLuasPersegi($sisi)
    {
        $luasPersegi = $sisi ** 2;
        return $luasPersegi;
    }
}
$luasDariPersegi = new luasPersegi;
echo "Luas persegi dengan sisi {$sisi} adalah ", $luasDariPersegi->hitungLuasPersegi($sisi), "\n";

class kelilingPersegi
{
    function hitungKelilingPersegi($sisi)
    {
        $kelilingPersegi = $sisi * 4;
        return $kelilingPersegi;
    }
}
$kelilingDariPersegi = new kelilingPersegi;
echo "Keliling persegi dengan sisi {$sisi} adalah ", $kelilingDariPersegi->hitungKelilingPersegi($sisi), "\n";

class luasSegitiga
{
    function hitungLuasSegitiga($alas, $tinggi)
    {
        $luasSegitiga = ($alas * $tinggi) / 2;
        return $luasSegitiga;
    }
}
$luasDariSegitiga = new luasSegitiga;
echo "Luas segitiga dengan alas {$alas} dan tinggi {$tinggi} adalah ", $luasDariSegitiga->hitungLuasSegitiga($alas, $tinggi), "\n";

class luasLingkaran
{
    function hitungLuasLingkaran($jari)
    {
        $luasLingkaran = 3.14 * $jari * $jari;
        return $luasLingkaran;
    }
}
$luasDariLingkaran = new luasLingkaran;
echo "Luas lingkaran dengan jari-jari {$jari} adalah ", $luasDariLingkaran->hitungLuasLingkaran($jari), "\n";

class kelilingLingkaran
{
    function hitungKelilingLIngkaran($diameter)
    {
        $kelilingLingkaran = 3.14 * $diameter;
        return $kelilingLingkaran;
    }
}
$kelilingDariLingkaran = new kelilingLingkaran;
echo "Keliling lingkaran dengan diameter {$diameter} adalah ", $kelilingDariLingkaran->hitungKelilingLingkaran($jari), "\n";