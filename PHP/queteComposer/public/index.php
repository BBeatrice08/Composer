<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

//use \src\Wcs\Hello;

$helloWorld = new Hello();

echo $helloWorld->talk();
echo "<br>";

echo SayHello::world();