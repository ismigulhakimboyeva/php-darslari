<?php
abstract class Animal {
	public function eat(){
		return "Animal is eating ! <br>";
	}
	abstract public function sound();
}
class Dog extends Animal {
	public function sound(){
		return "Dog says woof-woof ! <br>";
	}
}
$dog = new Dog();
echo $dog->eat();
echo $dog->sound();
?>