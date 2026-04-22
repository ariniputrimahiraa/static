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

    final public function prosesTransaksi() {
        echo "Transaksi diproses";
    }
}

$p1 = new Produk("Moisturizer", 70000);
$p2 = new Produk("Facial Wash", 50000);
$p3 = new Produk("Eye Mask", 40000);

$p1->tambahProduk();
$p2->tambahProduk();
$p3->tambahProduk();

echo "Total Produk: " . Produk::$jumlahProduk;
?>