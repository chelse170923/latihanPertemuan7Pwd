<?php

class Segitiga{
    public $tinggi=0;
    public $alas = 0;
    public $sisi = 0;

    public function __construct($tinggi,$alas,$sisi)
    {
        $this->tinggi = $tinggi;
        $this->alas = $alas;
        $this->sisi = $sisi;
    }

    public function tampilkanNilai(){
        echo "Tinggi    : ".$this->tinggi."<br>";
        echo "Alas    : ".$this->alas."<br>";
        echo "Sisi    : ".$this->sisi."<br>";
    }
}

class SegitigaSamaKaki extends Segitiga{
    public function hitung(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        $keliling = $this->alas * (2 * $this->sisi);

        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
}
class SegitigaSikuSiku extends Segitiga{
    public function hitung(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        $keliling = $this->alas * (2 * $this->sisi);

        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
}
class SegitigaSamaSisi extends Segitiga{
    public function hitung(){
        $sisi = $this->sisi;
        $luas = (sqrt(3) / 4 * pow($sisi,2));
        $keliling = 3 * $sisi;

        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
}
