<?php

namespace HTL3R\Autoloadingdemo;

use HTL3R\Autoloadingdemo\Mathematics as Mathematics;
require_once "vendor/autoload.php";


$mycalc = new Mathematics\BasicCalculaor();
echo $mycalc->addition(1, 2);