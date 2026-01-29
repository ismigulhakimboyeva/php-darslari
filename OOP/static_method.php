<?php
class User{
	public $name;
	public $age;
	public static $soni = 0;
	public function info(){
		return "Bu User classi!". self::welcome();
	}
	public static function welcome(){
		return "Hello User ! <br>";
	}
	public static function add() {
		self::$soni++;
	} 
}
$user = new User();
echo $user->info();
echo $user->welcome();
echo $user::welcome();
echo User::welcome();
 User::add();
 User::add();
 echo User::$soni;
