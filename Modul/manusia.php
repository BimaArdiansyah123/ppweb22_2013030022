<?php   
     class manusia{
     	public $warna_mata = 'hitam';

     	function __construct(){
     		echo "ini adalah manusia<br>";
     }	

        function tangan($jml=2,$jari=10){
        	echo "<br>Fugsi Tangan";
        	echo "<br>Jml tangan:".$jml;
        	echo "<br>Jml jari: ".$jari;
        	echo "<br>Warna mata: ".$this->warna_mata;
        	echo "<br><br>";

        }

        function kepala(){
        	echo "ini kepala";
        }
    }

    $rahmat = new manusia();
    $rahmat->kepala();
    $rahmat->tangan(5,2);

    $bima = new manusia();	
    $bima->warna_mata = 'biru';
    $bima->tangan(1,7);

    echo $bima->warna_mata;
?>
