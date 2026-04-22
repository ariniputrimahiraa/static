<?php
class Matematika {

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if($b == 0){
            return "Tidak bisa dibagi 0";
        }
        return $a / $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";

if(isset($_POST['hitung'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $sisi = $_POST['sisi'];
    $operasi = $_POST['operasi'];

    if($operasi == "tambah"){
        $hasil = Matematika::tambah($a,$b);
    } elseif($operasi == "kurang"){
        $hasil = Matematika::kurang($a,$b);
    } elseif($operasi == "kali"){
        $hasil = Matematika::kali($a,$b);
    } elseif($operasi == "bagi"){
        $hasil = Matematika::bagi($a,$b);
    } elseif($operasi == "luas"){
        $hasil = Matematika::luasPersegi($sisi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>

<h2>Kalkulator</h2>

<form method="POST">
    Angka 1: <input type="number" name="a"><br><br>
    Angka 2: <input type="number" name="b"><br><br>
    Sisi Persegi: <input type="number" name="sisi"><br><br>

    Pilih Operasi:
    <select name="operasi">
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
        <option value="luas">Luas Persegi</option>
    </select><br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<h3>Hasil: <?php echo $hasil; ?></h3>

</body>
</html>