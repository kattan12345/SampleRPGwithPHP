<?php

require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

$tiida = new Human();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

echo $tiida->name . PHP_EOL;
echo $goblin->name . PHP_EOL;

while ($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {
    // 現在のHPの表示
    echo $tiida->name . " : " . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . PHP_EOL;
    echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . PHP_EOL;

    echo PHP_EOL;

    // 攻撃
    $tiida->doAttack($goblin);
    echo PHP_EOL;
    $goblin->doAttack($tiida);
    echo PHP_EOL;
}

echo "***Done***" . PHP_EOL;
echo $tiida->name . " : " . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . PHP_EOL;
echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . PHP_EOL;


