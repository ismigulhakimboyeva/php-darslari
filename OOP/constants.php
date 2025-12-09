<?php
class Car {
	public const BRAND = "BMW"; // class consatant
	public function info(){
		return "Car brand is" . self::BRAND;
	}
}
$bmw = new Car();
echo $bmw->info(). "<br>";
echo Car::BRAND;

?>