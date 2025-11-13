<?php
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
// Times
echo time(). "<br>";
echo date("d.m.Y",strtotime("2025-11-23"));
?>