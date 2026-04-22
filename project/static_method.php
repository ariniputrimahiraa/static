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
    <style>
        * {
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    background: #f5f7fb;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* CARD */
.card {
    background: #fff;
    padding: 32px 28px;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    width: 340px;
}

/* TITLE */
h2 {
    text-align: center;
    color: #052455;
    margin-bottom: 22px;
}

/* FORM */
form {
    display: flex;
    flex-direction: column;
    gap: 12px; /* ini bikin jarak konsisten */
}

/* INPUT & SELECT DISAMAKAN */
input, select {
    width: 100%;
    height: 42px; /* ini kunci biar simetris */
    padding: 0 12px;
    border-radius: 10px;
    border: 1px solid #ddd;
    font-size: 14px;
    transition: 0.2s;
}

/* FOCUS */
input:focus, select:focus {
    border-color: #052455;
    outline: none;
    box-shadow: 0 0 0 2px rgba(5,36,85,0.1);
}

/* BUTTON */
button {
    margin-top: 8px;
    height: 44px;
    background: #052455;
    color: white;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

button:hover {
    background: #06337a;
    transform: translateY(-1px);
}

/* HASIL */
.hasil {
    margin-top: 16px;
    padding: 12px;
    background: #eef2ff;
    border-left: 4px solid #052455;
    border-radius: 10px;
    color: #052455;
}
    </style>
</head>
<body>

<div class="card">
    <h2>Kalkulator</h2>

    <form method="POST">
        <input type="number" name="a" placeholder="Angka 1">
        <input type="number" name="b" placeholder="Angka 2">
        <input type="number" name="sisi" placeholder="Sisi Persegi">

        <select name="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
            <option value="luas">Luas Persegi</option>
        </select>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if($hasil !== ""): ?>
        <div class="hasil">
            Hasil: <?= $hasil ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>