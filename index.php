<?php
require_once('function.php');
$tweak = new tweakDate();
echo $tweak->addSubtractMonth(date('Y-m-d'),1)."<br>";
echo $tweak->addSubtractMonth(date('Y-m-d'),-1)."<br>";
