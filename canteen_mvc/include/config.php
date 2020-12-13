<?php
define("HOST","localhost");
define("DB_NAME","id15119958_foodi");
define("USER","id15119958_foodi1");
define("PASS","Hongthien1110@");
define("BASE_URL","http://foodi.tk/");
define("HOADON_TRANG",20);
define("MON_TRANG",6);


function loadClass($c) {
    if (is_file("controller/$c.php")) {
		include "controller/$c.php";
	} elseif (is_file("model/$c.php")) {
		include "model/$c.php";
	} else {
		echo "No class $c";exit;
	}
}
?>