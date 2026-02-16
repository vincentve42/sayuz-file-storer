<?php

include("src/main.php");

use Ini\Ini;


$i = readline('Masukan Jumlah Data : ');



for($ss = 1; $ss<=$i; $ss++)
{
    $db = new Ini("db", "user". $ss);
    $db->setString('nama', readline('Masukan Nama : '));
}




?>