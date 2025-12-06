<?php
class Mevalar{
	public  $nomi;
	public $rangi;
	public function __construct($nomi, $rangi){
		$this->nomi = $nomi;
		$this->rangi = $rangi;
	}
	public function __destruct(){
		echo "Destructor ishga tushdi";
	}
}

$olma = new Mevalar('Olma', "qizil");
echo $olma->nomi. "<br>";
?>