<?php
 //string
 $ism = "Ismigul";
 $familiya = "hakimboyeva";
 echo strtoupper($ism);
 echo "\n";
 echo strtolower($ism);
 echo "\n";
 echo str_replace('hakimboyeva', 'Hakimboyeva',$ism);
 echo "\n";
 echo $ism;
 // ***
 echo "\n";
 echo strrev("Hello World");
 echo "\n";
 echo strrev("Ismigul Hakimboyeva");
 echo "\n";
 echo trim( " Parol Text ");
 echo "\n";
 echo $familiya .''.$ism;
 // ***
 $matn = "Hello";
 echo substr($matn, 3);
 echo "\n";
 echo substr($matn, 2,3);
// ***
 $ism = "Ismigul";
 $familiya = "Hakimboyeva";
 echo $ism."".$familiya;
 $x = '';
 $x .= $ism;
 $x .= " ";
 $x .= $familiya;
 echo "\n";
 echo $x;
 $a = " Hello\nWorld! ";
 echo "\n";
 echo str_replace('\n','<br>',$a);
 echo "\n";
 echo trim("");
 $dars = "Dars: PHP asoslari";
 echo substr($dars,6,3);
	


?>