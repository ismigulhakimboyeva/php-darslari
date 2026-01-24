<?php
class Car {
	public $model;
	public const BREND = "Chevrolet";
	public function info(){
		return "Bu " . self::BREND ." mashina classi ! <br>";
	}
}
echo Car::BREND."<br>";
$onix = new Car();
echo $onix->info();
echo $onix::BREND;
?>