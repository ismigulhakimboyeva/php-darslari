<?php
// Class yaratish.
class Car {
	public $model;
	public $color;
	public $probeg;

	public function __construct($model, $color) {
		$this->model = $model;
		$this->color = $color;
	}

	public function sertProbeg($probeg) {
		$this->probeg = $probeg;
	}

	public function drive(){
		echo "Mashina harakatlanyabdi !";
	} 
}
// ***
$bmw = new Car("BMW X5", "white");
echo $bmw->model. "<br>";
echo $bmw->color. "<br>";


// Class dan object yaratish.
// $bmw = new Car();
//$bmw->model = "BMW X5";
//$bmw->color = "Black";
// var_dump($bmw);
// echo $bmw->model. "<br>";
// echo $bmw->drive(). "<br>";
// $bmw->sertProbeg(10000);
// echo $bmw->probeg. "<br>";


?>