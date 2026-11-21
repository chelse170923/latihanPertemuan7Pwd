<?php

class Kendaraan{
    public $merk="";
    public $model = "";
    public $warna = "";
    public $roda = 0;

    function Klakson(){
        echo "Honk!";
    }    
    
    function Setmerk($brand){
         $this->merk= $brand;
    }
    function Setmodel($series){
         $this->model= $series;
    }
    function Setwarna($colors){
         $this->warna = $colors;
    }
    function Setroda($tire){
         $this->roda = $tire;
    }

    function Getmerk(){
        return $this->merk;
    }
    function Getmodel(){
        return $this->model;
    }
    function Getwarna(){
        return $this->warna;
    }
    function Getroda(){
        return $this->roda;
    }

    function SetAllData($brand, $series,$colors,$tire){
        $this->merk= $brand;
        $this->model= $series;
        $this->warna = $colors;
        $this->roda = $tire;
    }
    function GetAllData($brand, $series,$colors,$tire){
        $brand = $this->merk;
        $model = $this->model;
        $warna = $this->warna;
        $roda = $this->roda;
    }
    // //tag pembuka
    // function __construct()
    // {
    //     echo "<h3>Pembuatan sebuah kendaraan</h3><br>";
    // }

    // //tag penutup
    // function __destruct()
    // {
    //     echo"<h5> contact . about . home </h5><br>";
    // }
}

class Motor extends Kendaraan{
    function Standard(){
        echo "on";
    }
    function StandardOff(){
        echo "on";
    }
}



$mobil = new Kendaraan();
$motor = new Motor();
$mobil->Setmerk("BMW");
$mobil->Setmodel("M4");
$mobil->Setwarna("Merah");
$mobil->Setroda(4);

echo "Merk : ".$mobil->Getmerk()."<br>";
echo "model : ".$mobil->Getmodel()."<br>";
echo "warna : ".$mobil->Getwarna()."<br>";
echo "roda : ".$mobil->Getroda()."<br>";
$mobil->Klakson();

$motor->Setmerk("Yamaha");
$motor->Setmodel("Aerox");
$motor->Setwarna("Black");
$motor->Setroda(2);

echo "<br><br> Merk :".$motor->Getmerk();
echo "<br> Model :".$motor->Getmodel();
echo "<br> Warna :".$motor->Getwarna();
echo "<br> roda :".$motor->Getroda();

echo "<br>";
$motor->Standard();

$kapal = new Kendaraan();

$kapal->SetAllData("Kapal Hantu", "Azur","Hitam",0);
