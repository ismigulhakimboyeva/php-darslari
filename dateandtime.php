<?php
// Date
date_default_timezone_set("Asia/Tashkent");
echo date("Y.m.d"). "<br>";
echo date("/.m/d"). "<br>";
echo date("d.m.Y"). "<br>";
echo date("d.m.y"). "<br>";
echo date("d/,/Y"). "<br>";
echo date("d.m.Y h:i:s"). "<br>";
echo date("I"). "<br>";
echo date("d F Y"). "<br>";
echo date("d F Y h:i:s"). "<br>";
//  Unix Time
echo time(). "<br>";
echo date("d.m.Y",strtotime("2025-11-23"));
// 15.11.2025
echo strtotime("+7 days"). "<br>";
echo date("d.m.Y H:i", "-7 days");
echo date("d.m.Y H:i", "-last Monday");
echo date("d.m.Y H:i", "naxt Year");
echo date("d.m.Y H:i", "2024-11-14");
$t_yil = "2011-06-15";
$yosh = (time() - strtotime($t_yil)) / (60 * 60 * 24 * 365);
echo ( int)$yosh;
?>