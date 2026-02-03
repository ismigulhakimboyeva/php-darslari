<?php
class House {
	public $adress;
	public $rooms;
	
	public function uySoni(){
		echo "15-uy <br>";
	}
	public function __construct($adress, $rooms) {
		$this->adress= $adress;
		$this->rooms = $rooms;
	}
	public function openDoor() {
		echo "Uy eshigi ochildi ! <br>";
	}
	public function getInfo() {
		echo "Uy haqida barcha ma'lumotlar chiqarilsin <br>";
	}
}
class Apartment extends House {
	public $floor;
	public function getType() {
		echo "Bu kvartira <br>";
	}
}
$apartment = new Apartment( "Xonqa", "13-room");

echo $apartment->adress. "<br>";
echo $apartment->rooms. "<br>";
echo $apartment->openDoor(). "<br>";
echo $apartment->uySoni(). "<br>";
echo $apartment->getInfo(). "<br>";
echo  $apartment->getType(). "<br>";
?>