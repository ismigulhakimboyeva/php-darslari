<?php
$int = 5;
$kasr = 12.5;
$string_number = "10";

// Intager is_int()
var_dump(is_int($int));      //true
var_dump(is_int($kasr));  //false
var_dump(is_int($string_number));   //false

// Float is_float()
var_dump(is_float($int));    //false
var_dump(is_float($kasr));    //true
var_dump(is_float($string_number));//false

//numeric is_numeric()
var_dump(is_numeric($int)); //true
var_dump(is_numeric($kasr));   //true
var_dump(is_numeric($string_number)); //true

// String is_string()
var_dump(is_string($int)); //false
var_dump(is_string($kasr)); //false
var_dump(is_string($string_number)); //true

?>