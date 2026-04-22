<?php
class Kendaraan {
public function mesin() {
    echo "Mesin standar";
    }
}
class Mobil extends Kendaraan {
    public function mesin() {
        echo "Mesin mobil";
    }
}
?>
