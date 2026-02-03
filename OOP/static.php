<?php
class Calculator{
	public static function qoshish($a,$b) {
		return $a + $b;
	} 
	public static function ayirish($a,$b) {
		return $a - $b;
	} 
	public static function text($a) {
		return strtoupper($a);
	} 
	
}
echo Calculator::qoshish(5, 5)."<br>";
echo Calculator::ayirish(10, 4) . "<br>";
echo Calculator::text("hello world !");

?>