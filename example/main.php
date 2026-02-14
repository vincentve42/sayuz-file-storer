<?php

include("src/main.php");

use Ini\Ini;

$db = new Ini("db", "sayuz");

$value = $db->getInt("id");
$name = $db->getString("nama");
$value2 = $db->getFloat("bb");
$menikah = $db->getBoolean("menikah");
printf("%d %f %d\n", $value, $name, $value2, $menikah);
?>