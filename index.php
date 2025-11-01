<?php

require_once('./luasLingkaran.php'); //cara panggil file

use App\Math\luasLingkaran; //panggil class

$lingkaran = new luasLingkaran(10);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

luasLingkaran::testing(); // panggil static method
