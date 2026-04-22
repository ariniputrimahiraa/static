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

$p1 = new Produk();
$p1->tambahProduk();

echo "Total Produk: " . Produk::$jumlahProduk;
?>