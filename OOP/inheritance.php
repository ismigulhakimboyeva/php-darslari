<?php
// Example 1
class Animal {
	public function eat(){
		echo "the animal is eating! <br>";
	}
}
class Cat extends Animal {
	public function meow(){
		echo "cat says meow! <br>";
	}
}
$cat = new Cat();
$cat->eat();
$cat->meow();
echo "\n";
// Example 2
class Car {
	public $model;
	private $color;
	protected $probeg;
	public function drive(){
		return "the car is driving! <br>";
	}
}
class Electorcar extends Car {
	public $power;
	public function probegnikiritish($probeg){
		$this->probeg = $probeg;
	}
	public function probegolish(){
		return $this->probeg;
	}
	public function setcolor($color){
		$this->color = $color;
	}
	public function getcolor(){
		return $this->color; 
	}
}
$byd = new Electorcar();
$byd->probegnikiritish(15000);
echo $byd->probegolish();
echo "\n";
$byd->setcolor("white");
echo $byd->getcolor();
?>