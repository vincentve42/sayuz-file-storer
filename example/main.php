<?php

include("src/main.php");

use Ini\Ini;

$db = new Ini("db", "sayuz");

$value = $db->getInt("id");
$name = $db->getString("nama");
$value2 = $db->getFloat("bb");
$menikah = $db->getBoolean("menikah");
printf("%s %d %f %d\n", $name,$value,  $value2, $menikah);

$db->setInt("id",10);

$db->setInt("id",15);
$db->setInt("uang",10);

$db->setInt("gg",100);

$db->setInt("rizz",100);
$db->setFloat("health",100.5);

$db->setBoolean("menikah",true);

$db->setBoolean("menikah",false);

$db->setString("nama","sayuz");

$db->setFloat("health",100.67);

$db->setString("nama","ve");

?>