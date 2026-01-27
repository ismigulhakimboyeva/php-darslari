<?php
	class Animal {
		private $name;
		protected $zoti;
		public $ogirligi;
		public function __construct($name, $zoti){
			$this->name = $name;
			$this->zoti = $zoti;
		}
		public function eat(){
			return "Animal is eating ! <br>";
		}
		public function getName(){
			return $this->name;
		}
	} 
	class Dog extends Animal {
		public function bark(){
			return "Dog says woof-woof ! <br>";
		}
	}

	$dog = new Dog();
	echo $dog->eat();
	echo $dog->bark();
	var_dump($dog);
?>