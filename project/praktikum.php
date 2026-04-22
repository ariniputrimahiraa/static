<?php
class Produk {

    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {

    final public function prosesTransaksi($daftarProduk) {
        $total = 0;

        echo "<h3>Daftar Produk:</h3>";

        foreach ($daftarProduk as $p) {
            echo $p->nama . " - Rp" . $p->harga . "<br>";
            $total += $p->harga;
        }

        echo "<br>Total Produk: " . Produk::$jumlahProduk;
        echo "<br>Total Harga: Rp" . $total;
        echo "<br><b>Transaksi diproses</b>";
    }
}

$p1 = new Produk("Moisturizer", 70000);
$p2 = new Produk("Facial Wash", 50000);
$p3 = new Produk("Eye Mask", 40000);

$p1->tambahProduk();
$p2->tambahProduk();
$p3->tambahProduk();

// simpan dalam array
$listProduk = [$p1, $p2, $p3];


// transaksi
$t = new Transaksi();
$t->prosesTransaksi($listProduk);

