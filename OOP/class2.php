<?php
class Car{
	public function __construct($model){
		$this->model = $model;
	}
	//properties - xususiyatlar
	public $model;
	public $color;

	//methods - metodlar
	public function haydash(){
		echo "The car is driving ! <br>";
	}
}
$matiz = new Car("matiz");
$matiz->model = "Matiz";
$matiz->color = "white";
echo $matiz->model."<br>";
$matiz->haydash()."<br>";
//*** 
class Mahsulotlar{
	public $name;
	public $kirim_narxi;
	public $sotish_narxi;
	public $birligi;
	public function mahsulotQoshish($name, $kirim_narxi){
$this->name = $name;
$this->kirim_narxi = $kirim_narxi;
	}
	}
	$snikers = new Mahsulotlar();
	$snikers->name = "Snikers";
	$snikers->kirim_narxi = 8000;
	$snikers->sotish_narxi = 10000;
	var_dump($snikers);
	echo "<br>";

	//*** constructor
	class Mahsulot{
		private $name;
		public $kirim_narxi;
		public $sotish_narxi;
		public $birligi;

		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}

		public function __construct($sotish_narxi){
			$this->sotish_narxi = $sotish_narxi;
		}
		// destructor
		public function __destruct(){
			echo "Destructor ishga tushdi ! <br>";
		}
		public function setbirligi($birligi){
		$this->birligi = $birligi;
	}
    public function getbirligi(){
			return $this->$birligi;
		}
		public function info(){
			echo "Bu mahsulot classi ! <br>";
		}
	}
	$pepsi = new Mahsulot(12000);
	// $pepsi->name = "Pepsi";
	$pepsi->setName("Pepsi");
	$pepsi->kirim_narxi = 8000;
	$pepsi->setbirligi("Dona <br>"); 
	echo $pepsi->name."<br>";
	echo $pepsi->getbirligi()."<br>";
	var_dump($pepsi);
	echo "<br>";
	print_r($pepsi);
?>