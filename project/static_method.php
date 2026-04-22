<?php

class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }
    public static function bagi($a, $b) {
        return $a / $b;
    }
    public static function tambah($a, $b) {
        return $a + $b;
    }
    public static function kurang($a, $b) {
        return $a - $b;
    }
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

}

echo Matematika::kali(4, 5);
echo "<br>";
echo Matematika::bagi(10, 2);
echo "<br>";
echo Matematika::tambah(3, 3);
echo "<br>";
echo Matematika::kurang(10, 2);
echo "<br>";
echo "Luas Persegi: " . Matematika::luasPersegi(5);

?>