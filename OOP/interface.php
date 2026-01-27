<?php
	interface CarInterface {
		public function haydash();
		public function tormozlash();
	}
	interface Car2 {
		public function info();
	}
	class Car implements CarInterface, Car2 {
		public $model;
		public $color;
		public function haydash() {
			return "Mashina haydalyabdi ! <br>";
		}
		public function tormozlash() {
			return "Mashina tormozlanayabdi ! <br>";
		}
		public function info() {
			return "bu Car sinfi ! <br>";
		}
	}
	$onix = new Car();
	echo $onix->haydash();
	echo $onix->tormozlash();
	echo $onix->info();
?>