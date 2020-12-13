<?php
include "include/config.php";
$control="monan";
if(isset($_REQUEST['ctrl']))
    $control=$_REQUEST['ctrl'];

include "controller/".$control.".php";
$func="index";
if(isset($_REQUEST['func']))
    $func=$_REQUEST['func'];
spl_autoload_register('loadClass');
$name=ucwords($control);
$obj=new $name();
$obj->$func();
?>
