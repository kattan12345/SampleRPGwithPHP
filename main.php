<?php

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

$tiida = new Human();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

echo $tiida->name . PHP_EOL;
echo $goblin->name . PHP_EOL;

// 現在のHPの表示
echo $tiida->name . " : " . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . PHP_EOL;
echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . PHP_EOL;