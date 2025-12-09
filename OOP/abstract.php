<?php
abstract class A {
	abstract public function test();
}
abstract class Animals extends A {
	public $group;
	public function __consruct($group) {
		$this->group = $group;
	}

	abstract public function sound();
public function eat() {
	echo "the animal is eating ! <br>";
}
}
class Dog extends Animals {
	public function test(){
		echo "Bu test funksiyasi <br>";
	}
	public function sound() {
		return "dog says woof-woof ! <br>";
	}
}
$dog = new Dog(" Wild animals ");
echo $dog->sound();
$dog->eat();
echo $dog->group;
?>