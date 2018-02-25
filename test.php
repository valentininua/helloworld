<?php
require_once "vendor/autoload.php";

$hello = new Valentininua\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Valentininua\Demo\Hello('My PHP');
echo $hiGirl->hello();
